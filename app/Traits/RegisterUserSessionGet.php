<?php

namespace App\Traits;

use App\Support\SessionManager;

trait RegisterUserSessionGet
{

    public function __construct(
        protected SessionManager $sessionManager,
    ){}
    
    public function getSession()
    {

        return $this->sessionManager->get('registerUser');

    }

}