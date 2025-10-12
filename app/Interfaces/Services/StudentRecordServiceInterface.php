<?php

namespace App\Interfaces\Services;

interface StudentRecordServiceInterface
{

    public function studentList($year, $course);

    public function alumnusList($year, $course);

    public function jobConfirmationAlignment();

}