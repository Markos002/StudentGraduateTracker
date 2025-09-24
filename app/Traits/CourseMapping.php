<?php

namespace App\Traits;

use InvalidArgumentException;
trait CourseMapping
{

    public function courseMapping($course)
    {

       return match($course){

             'BSIT' => ['BSIT'],
             'BSMX' => ['BSMX'],
             'BIT-ELEX' => ['BIT-ELEX'],
             'BIT-ELEC' => ['BIT-ELEC'],
             'BIT-CT'   => ['BIT-CT'],
             'BIT-DT'   => ['BIT-DT'],
             'ALL'  => ['BSIT', 'BSMX', 'BIT-ELEX', 'BIT-ELEC', 'BIT-CT', 'BIT-DT'],
             default     => throw new InvalidArgumentException("Invalid course type: $course")
       };
    }
}