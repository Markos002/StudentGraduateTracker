<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\CareerHistoryServiceInterface;
use App\Interfaces\Services\CertificationServiceInterface;
use App\Interfaces\Services\PersonalDetailsServiceInterface;
use App\Interfaces\Services\PersonalSummaryServiceInterface;

class StudentDashboardController extends Controller
{

    public function __construct(
        protected PersonalSummaryServiceInterface $personalSummaryServiceInterface,
        protected CareerHistoryServiceInterface   $careerHistoryServiceInterface,
        protected CertificationServiceInterface   $certificationServiceInterface,
        protected PersonalDetailsServiceInterface $personalDetailsServiceInterface,
    ){}
    

    public function dashboard()
    {
        
        $personalSummary = $this->personalSummaryServiceInterface->show();
        $careerHistory   = $this->careerHistoryServiceInterface->show();  
        $certifications  = $this->certificationServiceInterface->show();
        $personalDetail  = $this->personalDetailsServiceInterface->show();
        //($personalSummary);
        //dd($careerHistory);
        //dd($certifications);
        //dd($personalDetail);
        return view('pages.student.dashboard', compact(
            'personalSummary',
            'careerHistory',
            'certifications',
            'personalDetail'
        ));
        
        
    }


}
