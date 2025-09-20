<?php

namespace App\Security;

use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Support\SessionManager;

class RegisterRequestSession
{

    public function __construct(
        protected RegisterServiceInterface $registerService,
        protected SessionManager $sessionManager

        ){}

    public function validateRegisterSessionExist($studentId)
    {

        $session = $this->sessionManager->get('registerUser');


        return $session;
    }

    
}