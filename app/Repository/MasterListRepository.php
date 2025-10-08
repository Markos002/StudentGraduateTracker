<?php

namespace App\Repository;

use App\Interfaces\Repository\MasterListRepositoryInterface;
use App\Models\MasterList;

class MasterListRepository implements MasterListRepositoryInterface
{


    public function findByStudentId($studentId)
    {

        return MasterList::where('student_id', $studentId)
                       ->first();

    }

    public function findById($id)
    {

        return MasterList::findOrFail($id);
                       
    }

    public function create($data)
    {

        return MasterList::create($data);

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