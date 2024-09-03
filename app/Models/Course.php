<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [ 'email', 'course_name'];
    public function professor(){
        return $this->belongsTo(Professor::class);
    }
}
