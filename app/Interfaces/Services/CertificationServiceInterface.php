<?php

namespace App\Interfaces\Services;

interface CertificationServiceInterface
{

    public function show();

    public function create($data);

    public function update($data);
}