<?php

namespace App\Services;

use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;
use App\Interfaces\Services\StudentAlignmentServiceInterface;

class StudentAlignmentService implements StudentAlignmentServiceInterface
{

    public function __construct(
        protected StudentRegistryRepositoryInterface $studentRegistryRepositoryInterface,
        protected JobRepositoryInterface $jobRepositoryInterface,

    ){}

    public function show()
    {

        return $this->studentRegistryRepositoryInterface->getJobAlignmentConfirmation();

    }

    public function update($data)
    {

        return $this->jobRepositoryInterface->update($data);
        
    }
}