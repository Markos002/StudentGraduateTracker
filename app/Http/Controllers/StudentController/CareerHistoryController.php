<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\CareerHistoryServiceInterface;
use App\Traits\GetAuthId;
use Illuminate\Http\Request;

class CareerHistoryController extends Controller
{

    use GetAuthId;
    public function __construct(
        protected CareerHistoryServiceInterface $careerHistoryServiceInterface,

    ){}


    public function store(Request $request)
    {

         $validated = $request->validate([
                     'position' => 'nullable|string', // Position
                     'occupation' => 'nullable|string', // Job
                     'occupation_status' => 'nullable|string', //please pass [employed,Unemployed]
                     'course_alignment' => 'nullable|string', // please pass [aligned,notAlinged]
                     'description' => 'nullable|string',
                     'start_date'  => 'nullable|string',
                     'end_date' => 'nullable|string',
        ]);
        $validated['user_id'] = $this->authId();

        try{

            $this->careerHistoryServiceInterface->create($validated);
            return redirect()->back()->with('success', 'Successfully write career history.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {

          $validated = $request->validate([
                     'position' => 'sometimes|nullable|string', // Position
                     'occupation' => 'sometimes|nullable|string', // Job
                     'occupation_status' => 'sometimes|nullable|string', //please pass [employed,Unemployed]
                     'course_alignment' => 'sometimes|nullable|string', // please pass [aligned,notAlinged]
                     'description' => 'sometimes|nullable|string',
                     'start_date'  => 'sometimes|nullable|string',
                     'end_date' => 'sometimes|nullable|string',
        ]);
         $validated['job_id'] = $id;

         try{
            
            $this->careerHistoryServiceInterface->update($validated);
            return redirect()->back()->with('success', 'Successfully update career data.');

         }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
         }
    }
}