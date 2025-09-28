<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Models\User;
use App\Models\ListData;
use Illuminate\Support\Facades\DB;


class StudentRegistryRepository implements StudentRegistryRepositoryInterface
{

    //Student List
    public function getStudentByYearAndCourse($year, $course)
    {
         
        return User::select(
                  'user_id',
                  'student_id',
                  'tor_number',
                  DB::raw("CONCAT(last_name, ', ', first_name) as full_name"),
                  'course',
                  'year_graduate'
                 )
                ->where('course', $course)
                ->where('year_graduate', $year)
                ->get();
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
                ->get();
    }

    public function getMasterList($year)
    {
        
        return ListData::select(
               'id',
               'student_id',
               DB::raw("CONCAT(last_name, ', ', first_name) as full_name"),
               'tor_number',
               'batch_graduate'
           )
           ->where('batch_graduate', $year)
           ->get();
    }
}