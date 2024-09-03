<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['stud_id', 'book', 'date', 'status'];

    public function student_detail()
    {
        return $this->belongsTo(Student::class);
    }
}
