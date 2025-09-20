<?php

namespace App\Repository;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Models\ListData;

class ListDataRepository implements ListDataRepositoryInterface
{


    public function findById($studentId)
    {

        return ListData::where('student_id', $studentId)
                       ->first();

    }

    
}