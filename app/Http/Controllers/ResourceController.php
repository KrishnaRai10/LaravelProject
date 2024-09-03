<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Library;
use App\Models\Contact;
class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         

        // $students=Student::get();
        // return $students;
        // $students=Student::simplepaginate(5);
        
        $students=Student::with('contact_detail')->get();
         return view('view.student.homepage',compact('students'));
        // return $student;


        // $students=Student::where([
        // // ['city','Port Tyrique'], //This will get all all row with city port tyrique
        
        // // ])->orwhere('age','>',20)->toRawSql(); //tis will get the raw sql query
        // // return $students;

        // ['city','Port Tyrique'], //This will get all all row with city port tyrique
        
        // ])->orwhere('age','>',20)->get();
        // // return $students;
        //          return view('welcome',compact('students'));

        // return view('welcome',compact('students')); //return this in welcome view 

        // $students=Student::find(5,['name','age']); //this will find the attribute from the database table
        // return $students;//this will return the row data of database

        // $students=Student::count();//this will count the number of entries present in database;
        // return $students; //return the count;

        // $students=Student::max('age');//this min method only apply in integer column only
        // return $students; //this return the minimum age;


        // $students=Student::min('age');//this max method only apply in integer column only
        // return $students; //this return the maximum age;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('view.student.addstudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // $studentId=Student::
        $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'password'=>'required', 
            'address'=>'required', 
            'city'=>'required|alpha',
            // 'father_name'=>'required|alpha',  // Minimum length of 8 characters
            // 'mother_name'=>'required|alpha',  // Minimum length of 8 characters
            // 'permanent_address' => 'required',
            // 'phone' => ['required','regex:/^[0-9]{10}$/']
           
        ]);
        // $student=new Student;

        // $student->name=$request->name;
        // $student->email=$request->email;
        // $student->age=$request->age;
        // $student->password=$request->password;
        // $student->address=$request->address;
        // $student->city=$request->city;
        // $student->phone=$request->phone;

        // $student->save();
        Student::create($request->all());
       
        return redirect()->route('students.index')->with('status',"Successfull Added Student");
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=Student::with('contact_detail')->findorfail($id);
        // return $students;
        return view('view.student.viewstudent',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentUpdate=Student::find($id);
        return view('view.student.updatestudent',compact('studentUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|numeric',
            'password'=>'required', 
            'address'=>'required', 
            'city'=>'required|alpha',
            'phone'=>'required|numeric',
        ]);
        // $students=Student::find($id);
        // $students->name=$request->name;
        // $students->email=$request->email;
        // $students->age=$request->age;
        // $students->password=$request->password;
        // $students->address=$request->address;
        // $students->city=$request->city;
        // $students->phone=$request->phone;

        // $students->save();

        $student=Student::where('id',$id)->update([
            'name'=> $request->name,
            'email'=>$request->email,
            'age'=>$request->age,
            'password'=>$request->password,
            'address'=>$request->address,
            'city'=>$request->city,
            'phone'=>$request->phone,
        ]);
        return redirect()->route('students.index')->with('status',"Successfull Updated Student details");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentDelete=Student::find($id);
        $studentDelete->delete();
        // $stduentDelete=destroy($id);
        return redirect()->route('students.index')->with('status',"Successfull Delete Student details");
    }
}
