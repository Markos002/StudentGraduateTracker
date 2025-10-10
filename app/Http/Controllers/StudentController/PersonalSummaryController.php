<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\PersonalSummaryServiceInterface;
use App\Traits\GetAuthId;
use Illuminate\Http\Request;

class PersonalSummaryController extends Controller
{
    
    use GetAuthId;

    public function __construct(
        protected PersonalSummaryServiceInterface $personalSummaryServiceInterface,
    ){}

    public function store(Request $request)
    {
        $validated = $request->validate([
                    'personal_summary' => 'nullable|string'
        ]);
        $validated['user_id'] = $this->authId();
        
        try{

            $this->personalSummaryServiceInterface->store($validated); 
            return redirect()->back()->with('success', 'Successfully write personal summary.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'personal_summary' => 'sometimes|string'
        ]);

        $validated['achievement_id'] = $id;

        try{

           $this->personalSummaryServiceInterface->update($validated);
           return redirect()->back()->with('success', 'Successfully update personal summary.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}