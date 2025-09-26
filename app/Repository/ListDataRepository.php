<?php

namespace App\Repository;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Models\ListData;

class ListDataRepository implements ListDataRepositoryInterface
{


    public function findByStudentId($studentId)
    {

        return ListData::where('student_id', $studentId)
                       ->first();

    }

    public function findById($id)
    {

        return ListData::findOrFail($id);
                       
    }

    public function create($data)
    {

        return ListData::create($data);

    }

    public function delete($id)
    {
 
        $find = $this->findById($id);

        return $find->delete();

    }

    public function update($data)
    {

        $put = $this->findByStudentId($data['student_id']);

        return $put->update($data);

    }

    
}