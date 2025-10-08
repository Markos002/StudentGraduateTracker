<?php

namespace App\Interfaces\Services;

interface StudentReadServiceInterface
{

    public function readPersonalSummary();

    public function readCareerHistory();

    public function readCertifications();

    public function personalDetails();
}