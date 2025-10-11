<?php 

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Repository\UserDataRepositoryInterface;
use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\PersonalDetailsServiceInterface;
use App\Traits\GetAuthId;

class PersonalDetailsService implements PersonalDetailsServiceInterface
{
    use GetAuthId;

    public function __construct(
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
        protected UserDataRepositoryInterface $userDataRepositoryInterface,
        protected UserRepositoryInterface $userRepositoryInterface,

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

        return $this->userRepositoryInterface->update($data);
        
    }
}