<?php

namespace App\Interfaces\Services;

interface ReportsServiceInterface
{

    public function totalGraduates();

    public function registerStudents();

    public function studentEmplomentStat();

    public function jobTrends($year, $course);

    public function studentStatisticOverView($year, $course_alignment);

    public function demographicByCourse($year, $course);
    
}