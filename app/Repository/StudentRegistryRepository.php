<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class StudentRegistryRepository implements StudentRegistryRepositoryInterface
{


    public function getStudentByYearAndCourse($year, $course)
    {
         
        return User::select(
                  'user_id',
                  'tor_number',
                  DB::raw("CONCAT(lastname, ', ', firstname) as full_name"),
                  'course',
                  'year_graduate'
                 )
                ->where('course', $course)
                ->whereYear('created_at', $year)
                ->get();
    }

    public function getAlumnus($year, $course)
    {

        return User::with('job:user_id,occupation,occupation_status,course_alignment')
                ->select(
                    'user_id',
                    DB::raw("CONCAT(lastname, ', ', firstname) as full_name"),
                    'course',

                )
                ->where('course', $course)
                ->whereYear('created_at', $year)
                ->get();
    }
}