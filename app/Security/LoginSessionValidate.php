<?php

namespace App\Security;

class LoginSessionValidate
{

    public function authSession($request)
    {

        $request->authenticate();

        $request->session()->regenerate();

        return $request->user();
    }
}