<?php

namespace App\Repository;

use App\Interfaces\Repository\JobRepositoryInterface;
use App\Models\Job;

class JobRepository implements JobRepositoryInterface
{


    public function findById($job_id)
    {

        return Job::findOrFail($job_id);

    }

    public function store($data)
    {

        return Job::create($data);

    }

    public function update($data)
    {

        $find = $this->findById($data['job_id']);

        return $find->update($data);
        
    }

    
}