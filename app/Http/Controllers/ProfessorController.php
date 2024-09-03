<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Professor;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $professor=Professor::with('courses')->get();

        // $professor=Professor::doesntHave('courses')->get(); //It will show the data which has no courses yet of "doesntHave"

        // $professor=Professor::has('courses')->get(); //It will show the data which has courses 

        // $professor=Professor::has('courses')->with('courses')->get(); //It will show the data which has courses with thier course data 

        // $professor=Professor::has('courses','>=','2')->with('courses')->get(); //It will show the data which has courses with thier course data with minimum courses  

        // $professor=Professor::withCount('courses')->get(); //It will count the courses data

        // $professor=Professor::select(['name','email'])->withCount('courses')->get(); //It will give the data with desired field with count of  courses data

        $professors=Professor::with('courses')->get();
        return view('professor.show_professor_detail',compact('professors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('professor.add_professor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $request->validate([
        //     'name'=>'required|alpha',
        //     'email'=>'required|email',
        //     'department'=>'required|alpha',
           
           
        // ]);
        Professor::create($request->all());
       
        return redirect()->route('professor.index')->with('status',"Successfull Added Professor");
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professors=Professor::with('courses')->findorfail($id);
        // return $professors;
        return view('professor.view_professor',compact('professors'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       $professor_detail=Professor::findorfail($id);
       return view('professor.update_professor',compact('professor_detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professor_detail=Professor::where('id',$id)->update([
            'name'=> $request->name,
            'email'=>$request->email,
            'department'=>$request->department
        ]);
        return redirect()->route('professor.index')->with('status',"Successfull Updated Professor details");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
