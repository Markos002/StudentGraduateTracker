<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $primaryKey = 'work_id';
    protected $keyType = 'int';
    public $incrementing = true;


    protected $fillable = [
        'position',
        'company_name',
        'description',
        'salary',
        'start_date',
        'end_date'
    ];
}
