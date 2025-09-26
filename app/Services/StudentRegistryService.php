<?php

namespace App\Services;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Interfaces\Services\StudentRegistryServiceInterface;

class StudentRegistryService implements StudentRegistryServiceInterface
{

  
    public function __construct(
        protected ListDataRepositoryInterface $listDataRepositoryInterface
    ){}
    public function addNewGraduate($data)
    {

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