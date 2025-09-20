<?php

namespace App\Services;

use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\UserServiceInterface; 

class UserService implements UserServiceInterface
{

    public function __construct(
        protected UserRepositoryInterface $userRepository,

    ){}

    public function store($data)
    {

        return $this->userRepository->create($data);
        
    }
}