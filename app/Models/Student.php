<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Student extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=['name','email','age','address','city','password'];
    // // protected $primaryKey = "student_id";
    // protected $attributes=[
    //     'name'=>"Test",
    //     'email'=>'test@gmail.com',
        
    // ];

    public function library_detail()
    {
        return $this->hasOne(Library::class);
    }
    public function contact_detail()
    {
        return $this->hasOne(Contact::class);
    }
    
   
}
