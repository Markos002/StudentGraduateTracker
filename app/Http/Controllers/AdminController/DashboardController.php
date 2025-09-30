<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\ReportsServiceInterface;

class DashboardController extends Controller
{

    public function __construct(
        protected ReportsServiceInterface $reportsServiceInterface
    ){}

    public function dashboard()
    {

        $totalStudents = $this->reportsServiceInterface->registerStudents();
        $totalGraduates = $this->reportsServiceInterface->totalGraduates();
        $employmentStats = $this->reportsServiceInterface->studentEmplomentStat();

        return view('pages.admin.dashboard', compact(
            'totalStudents',
            'totalGraduates',
            'employmentStats'
         ));
        
    }
}