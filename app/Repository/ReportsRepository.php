<?php

namespace App\Repository;

use App\Interfaces\Repository\ReportsRepositoryInterface;
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class ReportsRepository implements ReportsRepositoryInterface
{

   
    public function getRegisteredStudents()
    {     
        $year = now()->year;
        return DB::table('users')
                    ->whereYear('created_at', $year)
                    ->count();

    }

    public function getTotalGraduates()
    { 
        $year = now()->year;
        
        return DB::table('list_data')
                    ->where('batch_graduate', $year)
                    ->count();

    }

    //Count Employed and UnEmployed
    public function getStudentEmploymentStats()
    {
        $year = now()->year;
        
        return DB::table('users')
            ->join('job', 'users.user_id', '=', 'job.user_id')
            ->whereYear('users.created_at', $year)
            ->whereIn('job.occupation_status', ['employed', 'unEmployed'])
            ->groupBy('job.occupation_status')
            ->selectRaw('job.occupation_status, count(*) as count')
            ->pluck('count', 'occupation_status')
            ->toArray();
    }
    
    public function getJobTrends($year, $course)
    {
        $status = 'employed';

        return Job::join('users', 'job.user_id', '=', 'users.user_id')
                ->selectRaw('
                job.occupation,
                COUNT(*) as total_employed
                ')
                ->where('users.course', $course)
                ->where('job.occupation', $status)
                ->whereYear('job.created_at', $year)
                ->groupBy('job.occupation')
                ->orderBy('total_employed', 'desc')
                ->limit(5)
                ->get();
    }


    //Align and Not Alignt Stats
    public function getStudentStatusOverView($course_alignment)
    {
        $year = now()->year;

        return User::join('job', 'user.user_id', '=', 'job.user_id')
                ->selectRaw('
                   users.course,
                   COUNT(*) as total_employed
                ')
                ->where('job.occupation_alignment', $course_alignment)
                ->whereYear('users.created_at', $year)
                ->groupBy('users.course')
                ->get();

    }

    //Demograpic Base on Current Year and Selected Course
    public function getDemographicByCourse($course)
    {
        $year = now()->year;

          return User::join('job', 'users.users_id', '=', 'job.user_id')
                ->selectRaw('
                    COUNT(DISTINCT users.users_id) as total_registered,
                    COUNT(CASE WHEN job.status = "employed" THEN 1 END) as employed,
                    COUNT(CASE WHEN job.status = "unEmployed" THEN 1 END) as unEmployed,
                    (
                        SELECT COUNT(*)
                        FROM list_data ld
                        WHERE ld.course = ? 
                        AND YEAR(ld.created_at) = ?
                        AND ld.users_id NOT IN (
                            SELECT u.users_id 
                            FROM users u
                            WHERE u.course = ? 
                            AND YEAR(u.created_at) = ?
                        )
                    ) as unregistered
                ', [$course, $year, $course, $year])
                ->where('users.course', $course)
                ->whereYear('users.created_at', $year)
                ->first();
        
    }

}