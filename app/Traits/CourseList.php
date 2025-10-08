<?php

namespace App\Traits;

trait CourseList
{

    public function courseList()
    {

        return [
            'ALL',        // All courses filter
            'BSIT',       // Bachelor of Science in Information Technology
            'BSMX',       // Bachelor of Science in Mechatronics
            'BIT-ELEC',   // Bachelor in Industrial Technology - Major Electronics
            'BIT-CT',     // Bachelor in Industrial Technology - Major Computer Technology
            'BIT-DT',     // Bachelor in Industrial Technology - Major Drafting
            'BIT-ELEX'    // Bachelor in Industrial Technology - Major Electrical 
            ];
    }
}