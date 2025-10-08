<?php

namespace App\Services\Auth;

use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\Auth\UpdatePersonalDetailsServiceInterface;

class UpdatePersonalDetailsService implements UpdatePersonalDetailsServiceInterface
{


    public function __construct(
        protected UserRepositoryInterface $userRepository,

    ){}


    public function updatePersonalDetails($data)
    {

        return $this->userRepository->update($data);
        
    }
}