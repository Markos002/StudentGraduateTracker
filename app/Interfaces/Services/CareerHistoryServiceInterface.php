<?php

namespace App\Interfaces\Services;

interface CareerHistoryServiceInterface
{

    public function show();

    public function create($data);

    public function update($data);
}