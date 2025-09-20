<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Security\RegisterRequestSession;
use App\Support\SessionManager;
use App\Traits\RegisterUserSessionGet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{

    use RegisterUserSessionGet;
    public function __construct(
        protected RegisterServiceInterface $registerUserService,
        protected RegisterRequestSession $registerRequestSession,
        protected SessionManager $sessionManager,
        
     ){}
   
    public function create()
    {
         $session = $this->getSession();

        if(!empty($session)){
             return redirect()->route('register-confirm', ['studentId' => $session['studentId']]);
        }

        return view('auth.register');
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'student_id' => 'required|integer|min:7',
            'tor_number' => 'required|integer',
        ]);

        try {

            $student = $this->registerUserService->validate($validated);
        
            $this->registerUserService->registerSessionFromStudent($student);    
            $studentData = $this->getSession();
            $studentId = $studentData['studentId'];

            return redirect()->route('register-confirm', [
                'studentId' => $studentId,
            ]);

        } catch(\Exception $e) {

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

}
