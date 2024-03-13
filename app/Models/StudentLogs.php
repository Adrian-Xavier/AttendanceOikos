<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentLogs extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_id',
        'name',
        'grade',
        'section',
        'checked_in',
        'time_cooldown',
        'date_created'
    ];
    public $timestamps=false;
}
