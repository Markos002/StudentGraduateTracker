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

    public function findCareerHistoryById($userId)
    {

        return Job::where('user_id', $userId)
                    ->select(
                        'job_id',
                        'position',
                        'occupation',
                        'start_date',
                        'end_date',
                        'description',
                        'created_at',
                    )
                    ->orderBy('created_at', 'asc')
                    ->get();

    }



    
}