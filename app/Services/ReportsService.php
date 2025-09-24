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

    public function jobTrends($year, $course)
    {

        $courseMap = $this->coureMapping($course);
         
        return $this->reportsRepositoryInterface->getJobTrends($year, $courseMap);
    }

    public function studentStatisticOverView($course_alignment)
    {

        return $this->reportsRepositoryInterface->getStudentStatusOverView($course_alignment);
    }

    public function demographicByCourse($course)
    {

        return $this->reportsRepositoryInterface->getDemographicByCourse($course);
    }


}