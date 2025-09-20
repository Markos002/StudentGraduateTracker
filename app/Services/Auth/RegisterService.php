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
        $data = $this->listdataRepository->findById($studentId['student_id']);

      //  if(!$data || $data->tor_number !== $studentId['tor_number']){
        //    throw new \Exception('Data not found or TOR number mismatch.');
        //}

        return $data;

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