<?php

namespace App\Services;

use App\Interfaces\Repository\ReportsRepositoryInterface;
use App\Interfaces\Services\ReportsServiceInterface;
use App\Traits\CourseMapping;
class ReportsService implements ReportsServiceInterface
{

    use CourseMapping;
    public function __construct(
         protected ReportsRepositoryInterface $reportsRepositoryInterface
    ){}


    public function totalGraduates()
    {

        return $this->reportsRepositoryInterface->getTotalGraduates();
    }

    public function registerStudents()
    {

        return $this->reportsRepositoryInterface->getRegisteredStudents();
    }

    public function studentEmplomentStat()
    {

        return $this->reportsRepositoryInterface->getStudentEmploymentStats();
    }

    public function countPendingAlignConfirmation()
    {

        return $this->reportsRepositoryInterface->getCountPendingAlignedConfirmation();
        
    }

    public function countAlignmentByCourse()
    {
        
        return $this->reportsRepositoryInterface->getCountAlignAndNotAlingnByCourse();
    }

    public function jobTrends($year, $course)
    {

        $courseSelect = $this->courseMapping($course);
         
        return $this->reportsRepositoryInterface->getJobTrends($year, $courseSelect);
    }

    public function studentStatisticOverView($year, $course_alignment)
    {

        return $this->reportsRepositoryInterface->getStudentStatusOverView($year,$course_alignment);
    }

    public function demographicByCourse($year, $course)
    {
       
        $courseSelect = $this->courseMapping($course);

        return $this->reportsRepositoryInterface->getDemographicByCourse($year, $courseSelect);
    }


}