<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Interfaces\Repository\StudentRegistryRepositoryInterface;

class StudentAlignmentController extends Controller
{


    public function __construct(
        protected StudentRegistryRepositoryInterface $studentRegistryRepositoryInterface
    ){}

    public function index()
    {

        $listConfirmation = $this->studentRegistryRepositoryInterface->getJobAlignmentConfirmation();

        return view();
    }
}