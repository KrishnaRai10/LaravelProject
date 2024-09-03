<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Rules\UpperCase;//For custom validation

use Illuminate\Support\Facades\Validator;   //For closure Method in validation
// use Closure;                        //For closure Method in validation

class UserController extends Controller
{
    public function addUser(Request $req){
$req->validate([
    // 'name'=>['required',new UpperCase],//Custom validation apppling from rules UpperCase
    'name'=>['required',
function(string $attribute,mixed $value,Closure $fail){
    if(strtoupper($value)!==$value){
        $fail('The :attribute must be upperCase');
    }
}
],
    'email'=>'required|email',
    'password'=>'required',
    'password_confirmation'=>'required',
],[
    'name.required'=>'Bro enter the name'
]
);
return $req->all();
    }
    
}
