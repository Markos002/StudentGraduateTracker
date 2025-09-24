<?php

namespace App\Interfaces\Repository;

interface StudentRegistryRepositoryInterface
{

    public function getStudentByYearAndCourse($year, $course);

    public function getAlumnus($year, $course);
}