<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'lecturer_id',
        'name',
        'description',
    ];

    public function lecturer()
    {
        return $this->belongsTo(User::class, 'lecturer_id', 'id');
    }

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function bookshelves()
    {
        return $this->hasMany(Bookshelf::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
