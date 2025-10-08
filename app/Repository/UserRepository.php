<?php

namespace App\Repository;   

use App\Interfaces\Repository\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{


    public function create($data)
    {

        return User::create($data);

    }

    public function findById($user_id)
    {

        return User::find($user_id);

    }

    public function findByStudentId($studentId)
    {

        return User::where('student_id', $studentId)->first();

    }

    public function checkIfAlreadyExist($studentId)
    {

        return User::where('student_id', $studentId)->exists();
        
    }

    public function update($data)
    {

        $user = $this->create($data['user_id']);
        
        return $user->update($data);

    }

    public function delete($user_id)
    {

        $user = $this->findById($user_id);

        return $user->delete();  

    }

}