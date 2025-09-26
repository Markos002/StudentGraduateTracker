<?php

namespace App\Interfaces\Services;

interface StudentRegistryServiceInterface
{


    public function addNewGraduate($data);

    public function deleteById($id);
   
    public function updateData($data);
    
}