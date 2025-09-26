<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListData extends Model
{
    
    protected $fillable = [

        'student_id',
        'last_name',
        'first_name',
        'tor_number',
        'batch_graduate',
    ];
}
