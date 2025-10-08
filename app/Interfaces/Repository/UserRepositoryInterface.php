<?php

namespace App\Interfaces\Repository;

interface UserRepositoryInterface
{

    public function create($data);

    public function update($data);

    public function checkIfAlreadyExist($studentId);
}