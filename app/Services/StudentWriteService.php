<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Services\StudentWriteServiceInterface;

class StudentWriteService implements StudentWriteServiceInterface
{


    public function __construct(
        protected JobRepositoryInterface $jobRepositoryInterface,
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
    ){}

    public function writePersonalSummary($data)
    {

       return $this->achievementRepositoryInterface->store($data);

    }

    public function writeCareerHistory($data)
    {

        return $this->jobRepositoryInterface->store($data);

    }

    public function addCertifications($data)
    {

        return $this->achievementRepositoryInterface->store($data);
        
    }

    
}