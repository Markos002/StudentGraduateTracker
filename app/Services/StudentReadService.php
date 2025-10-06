<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Services\StudentReadServiceInterface;
use App\Traits\GetAuthId;

class StudentReadService implements StudentReadServiceInterface
{

    use GetAuthId;

    public function __construct(
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
        protected JobRepositoryInterface $jobRepositoryInterface,
    ){}

    public function readPersonalSummary()
    {

        $userId = $this->authId();

        return $this->achievementRepositoryInterface->findPersonalSummaryById($userId);

    }

    public function readCareerHistory()
    {

        $userId = $this->authId();

        return $this->jobRepositoryInterface->findCareerHistoryById($userId);

    }

    public function readCertifications()
    {

        $userId = $this->authId();

        return $this->achievementRepositoryInterface->getCertificateListById($userId);

    }
    
}