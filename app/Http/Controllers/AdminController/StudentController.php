<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\StudentRecordServiceInterface;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use App\Traits\CourseList;
use App\Traits\YearRange;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    use YearRange;
    use CourseList;

    public function __construct(
        protected StudentRecordServiceInterface $studentRecordServiceInterface,
        protected StudentRegistryServiceInterface $studentRegistryServiceInterface,
    ){}

    public function student(Request $request)
    {
        $year = $request->year?? now()->year;
        $selectedCourse = $request->course?? 'ALL'; //defaut ALL,,You can pass ALL,BSIT,BSMX etc.
        $availableYears = $this->yearRange(); //2025 and up 
        $selectedYear = (string)$year;

        $studentList = $this->studentRecordServiceInterface->studentList($year, $selectedCourse);
        $courses = $this->courseList();  //List of course ALL,BSIT,BSMX etc.

        return view('pages.admin.student', compact(
            'availableYears',
            'selectedYear',
            'studentList',
            'courses',
            'selectedCourse'
        ));
    }

    public function store(Request $request)
    {

        $request->validate([
                      'student_id' => 'required|numeric',
                      'last_name' => 'nullable|string|max:50',
                      'first_name' => 'nullable|string|max:50',
                      'tor_number' => 'required|numeric',
                      'course_graduate' => 'required|string|max:20',
                      'batch_graduate' => 'required|numeric',

        ]);

        try{
           
            $this->studentRegistryServiceInterface->addNewGraduate($request);
            return redirect()->back()->with('success', 'Student record created successfully.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
            
        }
      
    }

    public function edit(Request $request)
    {
        $request->validate([
                      'student_id' => 'required|numeric',
                      'last_name' => 'nullable|string|max:50',
                      'first_name' => 'nullable|string|max:50',
                      'tor_number' => 'required|numeric',
                      'course_graduate' => 'required|string|max:20',
                      'batch_graduate' => 'required|numeric',         
        ]);

        try{
            
            $this->studentRegistryServiceInterface->updateData($request);
            return redirect()->back()->with('success', 'Student record updated successfully.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());

        }
    }

    public function delete($id)
    {

        try{

            $this->studentRegistryServiceInterface->deleteById($id);
            return redirect()->back()->with('success', 'Student record delete successfully!');
            
        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());

        }

    }

}
