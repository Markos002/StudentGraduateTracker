<?php

namespace App\Interfaces\Services\Auth;

interface RegisterServiceInterface
{

    public function validate(array $studentId);

    public function registerSessionFromStudent($student):void;
    
}