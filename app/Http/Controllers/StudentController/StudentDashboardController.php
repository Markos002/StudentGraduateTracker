<?php

namespace App\Http\Controllers\StudentController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentDashboardController extends Controller
{
    

    public function dashboard()
    {

        return view('pages.student.dashboard');
        
    }


}
