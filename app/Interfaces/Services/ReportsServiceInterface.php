<?php

namespace App\Interfaces\Services;

interface ReportsServiceInterface
{

    public function totalGraduates();

    public function registerStudents();

    public function studentEmplomentStat();

    public function jobTrends($year, $course);

    public function studentStatisticOverView($course_alignment);

    public function demographicByCourse($course);
    
}