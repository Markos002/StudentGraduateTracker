<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $primaryKey = 'job_id';
    protected $keyType = 'int';
    public $incrementing = true;


    protected $fillable = [
        'position',
        'company_name',
        'occupation',
        'occupation_status',
        'course_alignment',
        'salary',
        'description',
        'start_date',
        'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
