<?php

namespace App\Services;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Interfaces\Repository\MasterListRepositoryInterface;
use App\Interfaces\Services\StudentRegistryServiceInterface;
use Exception;

class StudentRegistryService implements StudentRegistryServiceInterface
{

  
    public function __construct(
        protected MasterListRepositoryInterface $listDataRepositoryInterface
    ){}
    public function addNewGraduate($data)
    {

        $find = $this->listDataRepositoryInterface->findByStudentId($data['student_id']);

        if($find){
          throw new Exception('Student ID already exist');
        }

        return $this->listDataRepositoryInterface->create($data);

    }

    public function deleteById($id)
    {

       return $this->listDataRepositoryInterface->delete($id);

    }

    public function updateData($data)
    {

        return $this->listDataRepositoryInterface->update($data);
        
    }
}