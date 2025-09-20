<?php

namespace App\Support;

use Illuminate\Support\Facades\Session;

class SessionManager
{

    public function put(string $key, $value):void
    {
        Session::put($key, $value);   
    }

    public function get(string $key, $default = null)
    {
        return Session::get($key, $default);
    }

    public function forget(string $key):void
    {
        Session::forget($key);       
    }

    public function destroy()
    {
        return Session::flush();
    }

}