<?php

namespace App\Interfaces\Repository;

interface ReportsRepositoryInterface
{

    public function getRegisteredStudents();

    public function getTotalGraduates();

    public function getCountPendingAlignedConfirmation();

    public function getCountAlignAndNotAlingnByCourse();

    //Count Employed and UnEmployed
    public function getStudentEmploymentStats();

    public function getJobTrends($year, $course);

    public function getStudentStatusOverView($year, $course_alignment);

    //Demograpic Base on Current Year and Selected Course
    public function getDemographicByCourse($year, $course);

    

}