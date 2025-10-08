<?php

namespace App\Repository;

use App\Interfaces\Repository\UserDataRepositoryInterface;
use App\Models\User;

class UserDataRepository implements UserDataRepositoryInterface
{

    public function getPersonalDetails($userId)
    {

        return User::find($userId, [
            'first_name',
            'last_name',
            'address',
            'user_id',
            'phone',
            'email'
        ]);

    }
}