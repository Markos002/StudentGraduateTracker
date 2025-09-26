<?php

namespace App\Services\Auth;

use App\Interfaces\Repository\ListDataRepositoryInterface;
use App\Interfaces\Services\Auth\RegisterServiceInterface;
use App\Support\SessionManager;

class RegisterService implements RegisterServiceInterface
{
    

    public function __construct(
        protected ListDataRepositoryInterface $listdataRepository,
        protected SessionManager $sessionManager,
     ){}

     
    public function validate(array $studentId)
    {   

        return $this->listdataRepository->findById($studentId['student_id']);

    }


    public function registerSessionFromStudent($student): void
    {

        if(!$student) {
            throw new \Exception('No validated student available.');
        }

        $key = 'registerUser';
        
        $value = [
            'studentId' => $student->student_id, 
            'firstName' => $student->first_name,
            'lastName'  => $student->last_name,
            'torNumber'       => $student->tor_number,
            'sessionExpireAt' => now()->addMinutes(10)
        ];

        $this->sessionManager->put($key, $value);
    }

}