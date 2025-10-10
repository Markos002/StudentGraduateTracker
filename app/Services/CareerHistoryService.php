<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\JobRepositoryInterface;
use App\Interfaces\Services\CareerHistoryServiceInterface;
use App\Traits\GetAuthId;


class CareerHistoryService implements CareerHistoryServiceInterface
{

    use GetAuthId;

    public function __construct(
        protected JobRepositoryInterface $jobRepositoryInterface
    ){}

    public function show()
    {

        $userId = $this->authId();

        return $this->jobRepositoryInterface->findCareerHistoryById($userId);

    }

    public function create($data)
    {

        return $this->jobRepositoryInterface->store($data);

    }

    public function update($data)
    {

        return $this->jobRepositoryInterface->update($data);

    }
}