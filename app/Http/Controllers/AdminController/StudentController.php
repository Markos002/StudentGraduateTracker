<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use App\Traits\CourseList;
use App\Traits\YearRange;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use YearRange;
    use CourseList;
    public function __construct(
        protected StudentRegistryServiceInterface $studentRegistryServiceInterface,
    ){}

    public function student(Request $request)
    {
        $year = $request->year?? now()->year;
        $course = $request->course?? 'ALL'; //defaut ALL,,You can pass ALL,BSIT,BSMX etc.
        $availableYears = $this->yearRange(); //2025 and up 
        $selectedYear = (string)$year;

        $studentList = $this->studentRegistryServiceInterface->studentList($year, $course);
        $courses = $this->courseList();  //List of course ALL,BSIT,BSMX etc.

        return view('pages.admin.Student', compact(
            'availableYears',
            'selectedyear',
            'studentList',
            'courses',
        ));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
                      'student_id' => 'required|integer|exists:users,user_id',
                      'last_name' => 'nullable|string|max:50',
                      'first_name' => 'nullable|string|max:50',
                      'tor_number' => 'required|integer',
                      'batch_graduate' => 'required|string|max:20',

        ]);
        
        $this->studentRegistryServiceInterface->addNewGraduate($validated);

    }

}
