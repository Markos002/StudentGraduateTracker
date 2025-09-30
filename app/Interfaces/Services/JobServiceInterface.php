<?php

namespace App\Interfaces\Services;

interface JobServiceInterface
{

    public function writePersonalSummary($data);

    public function writeCareerHistory($data);

    public function addCertifications($data);
}