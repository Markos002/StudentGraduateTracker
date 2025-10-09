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
}