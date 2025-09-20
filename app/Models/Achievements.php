<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievements extends Model
{
    protected $primaryKey = 'achievment_id';
    protected $keyType = 'int';
    public $incrementing = true;

    protected $fillable = [

        'personal_summary',
        'cert_name',
        'year',
        'term'

    ];
}
