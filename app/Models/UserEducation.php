<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEducation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'education_name',
        'education_description',
        'education_start_date',
        'education_end_date',
        'institute_name',
    ];
}
