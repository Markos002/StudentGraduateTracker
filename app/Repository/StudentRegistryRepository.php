<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Models\User;
use App\Models\MasterList;
use Illuminate\Support\Facades\DB;


class StudentRegistryRepository implements StudentRegistryRepositoryInterface
{

    //Student List
    public function getStudentByYearAndCourse($year, $course)
    {
         
         return MasterList::select(
                  'id',
                  'student_id',
                  'tor_number',
                  DB::raw("CONCAT(last_name, ', ', first_name) as full_name"),
                  'course_graduate',
                  'batch_graduate'
                 )
                ->whereIn('course_graduate', $course)
                ->where('batch_graduate', $year)
                ->paginate(7);
    }

    public function getAlumnus($year, $course)
    {

        return User::with('job:user_id,occupation,occupation_status,course_alignment')
                ->select(
                    'user_id',
                    DB::raw("CONCAT(last_name, ', ', first_name) as full_name"),
                    'course',

                )
                ->where('course', $course)
                ->where('year_graduate', $year)
                ->paginate(7);
    }

    public function getMasterList($year)
    {
        
        return MasterList::select(
               'id',
               'student_id',
               DB::raw("CONCAT(last_name, ', ', first_name) as full_name"),
               'tor_number',
               'batch_graduate'
           )
           ->where('batch_graduate', $year)
           ->paginate(7);
    }
}