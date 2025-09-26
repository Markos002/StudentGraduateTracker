<?php

namespace App\Interfaces\Repository;

interface ListDataRepositoryInterface
{

    public function findById($studentId);
    
    public function create($data);
}