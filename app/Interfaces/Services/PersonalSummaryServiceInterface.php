<?php

namespace App\Interfaces\Services;

interface PersonalSummaryServiceInterface
{

    public function show();

    public function store($data);

    public function update($data);
}