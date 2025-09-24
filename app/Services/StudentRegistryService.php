<?php

namespace App\Services;

use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use App\Traits\CourseMapping;

class StudentRegistryService implements StudentRegistryServiceInterface
{

    use CourseMapping;

    public function __construct(
        protected StudentRegistryRepositoryInterface $studentRegistryRepositoryInterface,
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
}