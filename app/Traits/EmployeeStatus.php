<?php

namespace App\Traits;

trait EmployeeStatus
{

    public function occupationStatus()
    {

        return [
            'employed',
            'unEmployed'
        ];

    }
}