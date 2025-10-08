<?php

namespace App\Security;

use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Support\SessionManager;

class RegisterRequestSession
{

    public function __construct(
        protected SessionManager $sessionManager

        ){}

    public function validateRegisterSessionExist()
    {

        $session = $this->sessionManager->get('registerUser');


        return $session;
    }

    
}