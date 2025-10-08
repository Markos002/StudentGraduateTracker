<?php

namespace App\Interfaces\Repository;

interface MasterListRepositoryInterface
{

    public function findByStudentId($studentId);

    public function findById($id);

    public function create($data);

    public function delete($id);

    public function update($data);
}