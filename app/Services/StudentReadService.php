<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Repository\UserDataRepositoryInterface;
use App\Interfaces\Services\StudentReadServiceInterface;
use App\Traits\GetAuthId;

class StudentReadService implements StudentReadServiceInterface
{

    use GetAuthId;

    public function __construct(
        protected AchievementRepositoryInterface $achievementRepository,
        protected JobRepositoryInterface $jobRepository,
        protected UserDataRepositoryInterface $userDataRepository
    ){}

    public function readPersonalSummary()
    {

        $userId = $this->authId();

        return $this->achievementRepository->findPersonalSummaryById($userId);

    }

    public function readCareerHistory()
    {

        $userId = $this->authId();

        return $this->jobRepository->findCareerHistoryById($userId);

    }

    public function readCertifications()
    {

        $userId = $this->authId();

        return $this->achievementRepository->getCertificateListById($userId);

    }

    public function personalDetails()
    {

        $userId = $this->authId();
        return $this->userDataRepository->getPersonalDetails($userId);
        
    }
    
}