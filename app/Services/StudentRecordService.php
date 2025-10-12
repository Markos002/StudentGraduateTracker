<?php

namespace App\Services;

use App\Interfaces\Repository\MasterListRepositoryInterface;
use App\Interfaces\Services\StudentRecordServiceInterface;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Traits\CourseMapping;
class StudentRecordService implements StudentRecordServiceInterface
{


    use CourseMapping;

    public function __construct(
        protected StudentRegistryRepositoryInterface $studentRegistryRepositoryInterface,
        protected MasterListRepositoryInterface $masterListRepository,
    ){}
    
    public function studentList($year, $course)
    {

        $selectedCourse = $this->courseMapping($course);

        return $this->studentRegistryRepositoryInterface->getStudentByYearAndCourse($year, $selectedCourse);

    }

    public function alumnusList($year, $course)
    {

        $selectedCourse = $this->courseMapping($course);

        return $this->studentRegistryRepositoryInterface->getAlumnus($year, $selectedCourse);

    }

    public function jobConfirmationAlignment()
    {

        return $this->studentRegistryRepositoryInterface->getJobAlignmentConfirmation();
        
    }
}