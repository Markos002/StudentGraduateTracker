<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Services\PersonalSummaryServiceInterface;
use App\Traits\GetAuthId;

class PersonalSummaryService implements PersonalSummaryServiceInterface
{

    use GetAuthId;

    public function __construct(
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
    ){}

    
    public function show()
    {
        $userId = $this->authId();

        return $this->achievementRepositoryInterface->findPersonalSummaryById($userId);
    }

    public function create($data)
    {

        return $this->achievementRepositoryInterface->store($data);

    }

    public function update($data)
    {

        return $this->achievementRepositoryInterface->update($data);

    }
}