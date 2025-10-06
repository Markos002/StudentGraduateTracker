<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait GetAuthId
{

    public function authId()
    {

        return Auth::id();
        
    }
}