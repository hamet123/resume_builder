<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'job_position',
        'company_name',
        'job_description',
        'job_start_date',
        'job_end_date',
    ];
}
