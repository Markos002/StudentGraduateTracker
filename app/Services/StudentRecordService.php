<?php

namespace App\Services;

use App\Interfaces\Services\StudentRecordServiceInterface;
use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Traits\CourseMapping;
class StudentRecordService implements StudentRecordServiceInterface
{


    use CourseMapping;

    public function __construct(
        protected StudentRegistryRepositoryInterface $studentRegistryRepositoryInterface,
        protected ListDataRepositoryInterface $listDataRepositoryInterface,
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

    public function masterList($year)
    {

        return $this->studentRegistryRepositoryInterface->getMasterList($year);

    }
}