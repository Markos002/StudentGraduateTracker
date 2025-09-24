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
            'BIT-ELEC',   // Bachelor in Information Technology - Electronics
            'BIT-CT',     // Bachelor in Information Technology - Computer Technology
            'BIT-DT',     // Bachelor in Information Technology - Drafting
            ];
    }
}