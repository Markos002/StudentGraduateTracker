<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use App\Traits\CourseList;
use App\Traits\YearRange;
use Illuminate\Http\Request;

class AlumnusController extends Controller
{

    use YearRange;
    use CourseList;

    public function __construct(
        protected StudentRegistryServiceInterface $studentRegistryServiceInterface
    ){}

    public function alumnus(Request $request)
    {
        $year = $request->year?? now()->year;
        $course = $request->course?? 'ALL';
        $availableYears = $this->yearRange();
        $selectedYear = (string)$year;

        $alumnusList = $this->studentRegistryServiceInterface->alumnusList($year, $course);
        $courses = $this->courseList();  //List of course ALL,BSIT,BSMX etc.

        return view('pages.dmin.Alumnus',compact(
            'availableYears',
            'selectedYear',
            'alumnusList',
            'courses',
        ));
    }
}
