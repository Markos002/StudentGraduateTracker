<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\StudentWriteServiceInterface;
use App\Traits\GetAuthId;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    use GetAuthId;

    public function __construct(
        protected StudentWriteServiceInterface $studentWriteServiceInterface
    ){}


    public function storePersonalSummary(Request $request)
    {
        $validated = $request->validate([
                    'personal_summary' => 'nullable|string'
        ]);

        try{

            $this->studentWriteServiceInterface->writePersonalSummary($validated); 
            return redirect()->back()->with('success', 'Successfully write personal summary.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }

    }

    public function storeCareerHistory(Request $request)
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

            $this->studentWriteServiceInterface->writeCareerHistory($validated);
            return redirect()->back()->with('success', 'Successfully write career history.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function storeCertifications(Request $request)
    {

        $validated = $request->validate([
                      'cert_name' => 'nullable|string',
                      'year'      => 'nullable|string',
                      'term'      => 'nullable|string',
        ]);
        $validated['user_id'] = $this->authId();

        try{
            
            $this->studentWriteServiceInterface->addCertifications($validated);
            return redirect()->back()->with('success', 'Successfully add certification.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
