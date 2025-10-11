<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\PersonalDetailsServiceInterface;
use App\Traits\GetAuthId;
use Illuminate\Http\Request;

class PersonalDetailsController extends Controller
{

    use GetAuthId;

    public function __construct(
        protected PersonalDetailsServiceInterface $personalDetailsServiceInterface
    ){}

    public function update(Request $request)
    {

        $validated = $request->validate([
                    'first_name' => 'sometimes|string',
                    'last_name'  => 'sometimes|string',
                    'email'      => 'sometimes|string',
                    'phone'      => 'sometimes|string|regex:/^09\d{9}$/',
                    'address'    => 'sometimes|string',
        ]);
        $validated['user_id'] = $this->authId();
        
        try{

            $this->personalDetailsServiceInterface->update($validated);
            return redirect()->back()->with('success', 'Successfully update profile.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}