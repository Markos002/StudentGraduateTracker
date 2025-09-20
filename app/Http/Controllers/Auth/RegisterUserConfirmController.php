<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\UserServiceInterface;
use App\Security\RegisterRequestSession;
use App\Support\SessionManager;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class RegisterUserConfirmController extends Controller
{

    
    public function __construct(
        protected RegisterRequestSession $registerRequestSession,
        protected SessionManager $sessionManager,
        protected UserServiceInterface $userService,
    ){}

   public function view($studentId)
   {

        try {

            $session = $this->registerRequestSession->validateRegisterSessionExist($studentId);

              if(empty($session)){
                return redirect()->route('register');
            }
            
             if($studentId != $session['studentId']){
                return redirect()->route('register-confirm', ['studentId' => $session['studentId']]);
            }
          
            return view('auth.register-confirm', ['studentData' => $session]);

        } catch (\Exception $e) {
            return redirect()->route('register')->with('error', $e->getMessage());
        }

   }

   public function store(Request $request)
   {

        $request->validate([
            'last_name'  => 'nullable|string',
            'first_name' => 'nullable|string',
            'student_id' => 'nullable|min:7',
            'address' => 'nullable|string',
            'email' => 'nullable|string',
            'phone' => 'nullable|regex:/^09\d{9}$/',
            'password'  => ['required', 'confirmed', Rules\Password::min(8)->numbers()->symbols(),],
        ]);


        $validated = [
            'last_name'  => ucwords($request['last_name']),
            'first_name' => ucwords($request['first_name']),
            'student_id' => $request->student_id,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 'active',
            'role' => 'User',
            'password' => Hash::make($request['password']),
        ];

         try{
              $this->userService->store($validated);
              $this->sessionManager->destroy();
              return redirect()->route('login')->with('success', 'You’re all set! Your account has been created successfully.');

         }catch(\Exception $e){

              return redirect()->back()->with('error', $e->getMessage());
         }

   }


}