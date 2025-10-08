<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\StudentReadServiceInterface;
use App\Services\StudentReadService;

class StudentDashboardController extends Controller
{

    public function __construct(
        protected StudentReadServiceInterface $studentReadService,
    ){}
    

    public function dashboard()
    {
        
        $personalSummary = $this->studentReadService->readPersonalSummary();
        $careerHistory   = $this->studentReadService->readCareerHistory();  
        $certifications  = $this->studentReadService->readCertifications();
        $personalDetail  = $this->studentReadService->personalDetails();

        return view('pages.student.dashboard', compact(
            'personalSummary',
            'careerHistory',
            'certifications',
            'personalDetail'
        ));
        
        
    }


}
