<?php

namespace App\Interfaces\Services;

interface PersonalDetailsServiceInterface
{

    public function show();

    public function store($data);

    public function update($data);
}