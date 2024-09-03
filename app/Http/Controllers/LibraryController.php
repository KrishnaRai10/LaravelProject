<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Library;
use App\Models\Student;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students = Student::with('library_detail')->get(); //One to one relationship
        // $students = Student::where('city','jaipur')->withWhereHas('library_detail',function($query){
        //     $query->where('book','Bio Book');
        // })->get();
        // return $students;


        // $students = Student::where('city','jaipur')->WhereHas('library_detail',function($query){
        //     $query->where('book','Bio Book');
        // })->get();
        // return $students;


        $students=Library::with('student_detail')->get(); //Inverse relationship One to one relationship
        return $students;
        // echo $students->email . "<br>";
        // echo $students->name . "<br>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $students=Student::create([
        //     'name'=>'John Doe',
        //     'email'=>'johndoe@gmail.com',
        //     'age'=>'32',
        //     'password'=>'12345', 
        //     'address'=>'dfghdfhgsfdg', 
        //     'city'=>'paris',
        //     'phone'=>'1234567898',
        // ]);
        // $students->library_detail()->create([
        //     'book'=>'John wick',
        //     'date'=>'2024-08-27',
        //     'status'=>"1"
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
