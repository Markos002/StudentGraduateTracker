<?php

namespace App\Repository;

use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Models\User;
use App\Models\MasterList;
use App\Models\Job;
use Illuminate\Support\Facades\DB;


class StudentRegistryRepository implements StudentRegistryRepositoryInterface
{

    //Student List
    public function getStudentByYearAndCourse($year, $course)
    {
         
         return MasterList::select([
            'master_lists.id',
            'master_lists.student_id',
            DB::raw("CONCAT(master_lists.last_name, ', ', master_lists.first_name) as full_name"),
            'master_lists.tor_number',
            'master_lists.batch_graduate',
            'master_lists.course_graduate',
            'users.user_id',
            'users.email',
            'users.phone',
            'jobs.occupation_status',
            'jobs.occupation'
        ])
            ->leftJoin('users', 'master_lists.student_id', '=', 'users.student_id')
            ->leftJoin('jobs', 'users.user_id', '=', 'jobs.user_id')
            ->whereIn('master_lists.course_graduate', $course)
            ->where('master_lists.batch_graduate', $year)
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

   public function getJobAlignmentConfirmation()
   {

       return Job::with('user:user_id,course')
             ->select([
               'job_id',
               'user_id',
               'position',
               'occupation',
               'description',
               'course_alignment'
               
            ])
            ->whereNull('course_alignment')
            ->paginate(7);

   }
}