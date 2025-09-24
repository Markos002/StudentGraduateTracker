<?php

namespace App\Interfaces\Services;

interface StudentRegistryServiceInterface
{


    public function studentList($year, $course);

    public function alumnusList($year, $course);
    
}