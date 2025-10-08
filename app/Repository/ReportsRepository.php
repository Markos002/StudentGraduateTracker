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
        
        return DB::table('master_lists')
                    ->where('batch_graduate', $year)
                    ->count();

    }

    //Count Employed and UnEmployed
    public function getStudentEmploymentStats()
    {
        $year = now()->year;
        
        return DB::table('users')
            ->join('jobs', 'users.user_id', '=', 'jobs.user_id')
            ->whereYear('users.created_at', $year)
            ->whereIn('jobs.occupation_status', ['employed', 'unEmployed'])
            ->groupBy('jobs.occupation_status')
            ->selectRaw('jobs.occupation_status, count(*) as count')
            ->pluck('count', 'occupation_status')
            ->toArray();
    }
    
    public function getJobTrends($year, $course)
    {
        $status = 'employed';

        return Job::select([            
                DB::raw('COUNT(users.user_id) as total_employed'),
                'jobs.occupation'
            ])        
            ->join('users', 'jobs.user_id', '=', 'users.user_id')
            ->where('users.course', $course)
            ->where('jobs.occupation_status', $status) 
            ->whereYear('jobs.created_at', $year) 
            ->groupBy('jobs.occupation') 
            ->orderBy('total_employed', 'desc')
            ->limit(5)
            ->get();
    
    }


    //Align and Not Alignt Stats
    public function getStudentStatusOverView($year, $course_alignment)
    {

        return User::select([
                'users.course',
                DB::raw('COUNT(users.user_id) as student_count')
                ])
                ->join('jobs', 'users.user_id', '=', 'jobs.user_id')
                ->where('jobs.course_alignment', $course_alignment)
                ->whereYear('users.created_at', $year)
                ->groupBy('users.course')
                ->orderBy('student_count', 'desc')
                ->get();

    }

    //Demograpic Base on Current Year and Selected Course
    public function getDemographicByCourse($year, $course)
    {
        

         $employmentStats = User::leftJoin('jobs', 'users.user_id', '=', 'jobs.user_id')
                ->select([
                    'users.course',
                    DB::raw('COUNT(users.user_id) AS total_registered'),
                    DB::raw('COUNT(CASE WHEN jobs.occupation_status = "employed" THEN 1 END) AS total_employed'),
                    DB::raw('COUNT(CASE WHEN jobs.occupation_status = "unemployed" THEN 1 END) AS total_unemployed'),
                ])
                ->whereIn('users.course', $course)
                ->whereYear('users.created_at', $year)
                ->groupBy('users.course')
                ->first();


         $graduateCount = DB::table('master_lists')
            ->where('course_graduate', $course)
            ->where('batch_graduate', $year)
            ->count();


        return [
            'total_graduates' => $graduateCount,
            'total_registered' => $employmentStats->total_registered ?? 0,
            'total_employed' => $employmentStats->total_employed ?? 0,
            'total_unemployed' => $employmentStats->total_unemployed ?? 0,     
        ];
        
    }

}