<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'assessment_id',
        'file_name',
        'file_dir',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    
    public function assessment()
    {
        return $this->belongsTo(Assessment::class, 'assessment_id', 'id');
    }
}
