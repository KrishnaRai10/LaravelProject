<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class TestingController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        // $test_student=Student::orderBy('name')->get();
        // foreach($test_student as $student){
        //     echo "$student->name-$student->age-$student->email     |||||     ";
        // }



        // student::chunk(2,function($users){
        //     foreach($users as $user){
        //         echo "Next data after 3 chunks $user->name - $user->email -$user->age -$user->city   ";
        //         echo"|||||||";
        //     }
        // });



        // foreach(Student::lazy() as $students){
        //     echo"$students->name \n";
        // }


        // $test_student=Student::lazy();        //The lazy method fetches records from the database in smaller chunks and then processes those chunks one by one as you iterate over them. Unlike cursor, which fetches one record at a time, lazy fetches a chunk of records and allows you to work with them as a collection.
        
        // $test_student=Student::cursor();       //When you use cursor, Laravel opens a cursor to the database and fetches records one by one as you iterate over them. This method uses less memory because it doesn't load the entire result set into memory at once. Instead, it keeps a pointer to the database and fetches each record as needed.
        

        // Student::where('city','jaipur')->chunkById(3,function ($user){ // to update the age in database with chunks of 3 student data
        //     $user->each->update(['age'=>'30']);
        // });



        // Student::where('city','jaipur')->lazyById(3)// to update the age in database with lazy method of 3 student data
        // ->each->update(['age'=>'40']);
        
        // Student::firstOrCreate(
        //     ['name'=>'Jojo'],
        //     [
        //         'email'=>'jojo@gmail.com',
        //         'age'=>'21',
        //         'city'=>"Alwar",
        //         'address'=>'adesfga',
        //         'password'=>'1234567',
        //         'phone'=>'1234567899'
        // ]);


        // Student::updateOrCreate(
        //     ['name'=>'Jitesh','city'=>"Alwar",],
        //     [
        //         'email'=>'jitesh@gmail.com',
        //         'age'=>'25',
        //         'address'=>'adesfga',
        //         'password'=>'1234567',
        //         'phone'=>'9876543210'
        // ]);
        Student::upsert(
         
            [
                'name'=>'Jitesh',
                'email'=>'jitesh@gmail.com',
                'age'=>'25',
                'city'=>"Jodhpur",
                'address'=>'mansarover',
                'password'=>'1234567',
                'phone'=>'9876543210'
        ],
    ['email'],['city','address']);

        // return view('testing',compact('test_student'));
    }
}
