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

    
}