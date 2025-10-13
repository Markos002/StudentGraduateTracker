<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Interfaces\Services\StudentAlignmentServiceInterface;
use Illuminate\Http\Request;

class StudentAlignmentController extends Controller
{


    public function __construct(
        protected StudentAlignmentServiceInterface $studentAlignmentServiceInterface
    ){}

    public function index()
    {

        $listConfirmation = $this->studentAlignmentServiceInterface->show();

        return view('pages.admin.confirmation', compact(
            'listConfirmation'
        ));
    }

    public function update(Request $request)
    {

        $validate = $request->validate([
            'course_alignment' => 'string',
            'job_id' => 'string'
        ]);
       
        try{

            $this->studentAlignmentServiceInterface->update($validate);
            return redirect()->back()->with('success', 'Successfully update course alignment.');

        }catch(\Exception $e){

            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}