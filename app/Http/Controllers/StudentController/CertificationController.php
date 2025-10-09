<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\CertificationServiceInterface;
use App\Traits\GetAuthId;
use Illuminate\Http\Request;

class CertificationController extends Controller
{

    use GetAuthId;
    
    public function __construct(
        protected CertificationServiceInterface $certificationServiceInterface
    ){}

    public function store(Request $request)
    {

         $validated = $request->validate([
                      'cert_name' => 'nullable|string',
                      'year'      => 'nullable|string',
                      'term'      => 'nullable|string',
        ]);
        $validated['user_id'] = $this->authId();

        try{
            
            $this->certificationServiceInterface->create($validated);
            return redirect()->back()->with('success', 'Successfully add certification.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request)
    {


    }
}