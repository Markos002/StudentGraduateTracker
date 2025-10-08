<?php

namespace App\Services\Auth;

use App\Interfaces\Repository\MasterListRepositoryInterface;
use App\Interfaces\Repository\UserRepositoryInterface;
use App\Interfaces\Services\Auth\CheckStudentIfExistServiceInterface;
use App\Support\SessionManager;

class CheckStudentIfExistService implements CheckStudentIfExistServiceInterface
{

    public function __construct(
        protected MasterListRepositoryInterface $masterListRepository,
        protected SessionManager $sessionManager,
        protected UserRepositoryInterface $userRepository,
    ){}


   public function checkIfExist($validated)
   {
       
        $data = $this->masterListRepository->findByStudentId($validated['student_id']);
        $tor_num = (int) $validated['tor_number'];

        if(!$data || $tor_num !== $data->tor_number){

            throw new \Exception('No credentials found. TOR number or Student number does not match.');
        }
        
        $exist = $this->userRepository->checkIfAlreadyExist($validated['student_id']);
        
        if($exist){

            throw new \Exception('Student already exist.');      
        }
        
        return $data;
    }


    public function storeRegistrationSession($student):void
    {

        if(!$student) {
            throw new \Exception('No validated student available.');
        }

        $key = 'registerUser';
        
        $value = [
            'studentId' => $student->student_id, 
            'firstName' => $student->first_name,
            'lastName'  => $student->last_name,
            'courseGraduate'    => $student->course_graduate,
            'batchGraduate'     => $student->batch_graduate,
            'torNumber'       => $student->tor_number,
            'sessionExpireAt' => now()->addMinutes(10)
        ];

        $this->sessionManager->put($key, $value);
    }
}