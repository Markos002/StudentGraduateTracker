<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterList extends Model
{
    
    protected $fillable = [

        'student_id',
        'last_name',
        'first_name',
        'tor_number',
        'course_graduate',
        'batch_graduate',
    ];
}
