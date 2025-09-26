<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\ReportsServiceInterface;
use App\Traits\CourseAlignment;
use App\Traits\CourseList;
use Illuminate\Http\Request;
use App\Traits\YearRange;

class InsightController extends Controller
{

    use YearRange;
    use CourseList;
    use CourseAlignment;

    public function __construct(
        protected ReportsServiceInterface $reportsServiceInterface,
    ){}

    public function analytics(Request $request)
    {
        $year = $request->year?? now()->year;
        $course = $request->course?? 'ALL'; //default ALL if no select,, pass course
        $alignedSelect = $request->aligned?? 'aligned'; //default aligned if no select,, pass aligned or notAligned
        $availableYears = $this->yearRange();
        $selectedYear = (string)$year;

        $jobTrend = $this->reportsServiceInterface->jobTrends($year, $course);
        $studentAlignment = $this->reportsServiceInterface->studentStatisticOverView($alignedSelect); 
        $studentOverViewCourse = $this->reportsServiceInterface->demographicByCourse($course); 
        $courses = $this->courseList();  //List of course ALL,BSIT,BSMX etc.
        $courseAlignment = $this->courseAlignment(); //aligned or notAligned 

            return view('pages.admin.insight',compact(
                'availableYears',
                'selectedYear',
                'jobTrends',
                'studentAlignment',
                'studentOverViewCourse',
                'courses',
                'courseAlignment',
            ));

    }
}