<?php

namespace App\Interfaces\Services;

interface StudentWriteServiceInterface
{

    public function writePersonalSummary($data);

    public function writeCareerHistory($data);

    public function addCertifications($data);
}