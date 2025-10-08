<?php

namespace App\Interfaces\Services\Auth;

interface CheckStudentIfExistServiceInterface
{

    public function checkIfExist($validated);

    public function storeRegistrationSession($student):void;
}