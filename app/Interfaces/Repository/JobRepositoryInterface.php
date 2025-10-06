<?php

namespace App\Interfaces\Repository;

interface JobRepositoryInterface
{


    public function findById($job_id);

    public function store($data);

    public function update($data);

    public function findCareerHistoryById($userId);
    
}