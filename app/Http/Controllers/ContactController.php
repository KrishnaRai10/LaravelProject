<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $more_detail=Contact::get();
        return view('view.more_detail_table.add_more_detail',compact('more_detail'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('view.more_detail_table.add_more_detail');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id'=>'required',
            'father_name'=>'required|alpha',  // Minimum length of 8 characters
            'mother_name'=>'required|alpha',  // Minimum length of 8 characters
            'permanent_address' => 'required',
            'phone' => ['required','regex:/^[0-9]{10}$/'],
        ]);
        // dd($request->all());
        Contact::create($request->all());
       
        return redirect()->route('students.show',$request->student_id)->with('status',"Successfull Added Student");
       
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact_detail=Contact::findorfail($id);
        return view('view.more_detail_table.view_more',compact('contact_detail'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contactUpdate=Contact::find($id);
        return view('view.more_detail_table.update_more',compact('contactUpdate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student=Contact::where('id',$id)->update([
            'father_name'=> $request->father_name,
            'mother_name'=> $request->mother_name,
            'permanent_address'=> $request->permanent_address,
            'phone'=>$request->phone,
        ]);
        return redirect()->route('students.index')->with('status',"Successfull Updated Student details");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
