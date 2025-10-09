<?php

namespace App\Services;

use App\Interfaces\Repository\AchievementRepositoryInterface;
use App\Interfaces\Services\CertificationServiceInterface;
use App\Traits\GetAuthId;

class CertificationService implements CertificationServiceInterface
{


    use GetAuthId;
    public function __construct(
        protected AchievementRepositoryInterface $achievementRepositoryInterface,
    ){}


    public function show()
    {

        $userId = $this->authId();

        return $this->achievementRepositoryInterface->getCertificateListById($userId);

    }

    public function create($data)
    {

        return $this->achievementRepositoryInterface->store($data);

    }

    public function update($data)
    {


    }
}