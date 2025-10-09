<?php 

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\UserDataRepositoryInterface;
use App\Interfaces\Services\PersonalDetailsServiceInterface;
use App\Traits\GetAuthId;

class PersonalDetailsService implements PersonalDetailsServiceInterface
{
    use GetAuthId;

    public function __construct(
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
        protected UserDataRepositoryInterface $userDataRepositoryInterface,
    ){}

    public function show()
    {

        $userId = $this->authId();
        
        return $this->userDataRepositoryInterface->getPersonalDetails($userId);

    }

    public function store($data)
    {

        

    }

    public function update($data)
    {


    }
}