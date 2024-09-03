<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateContactController extends Controller
{
    public function show(string $id){
        // $contact_detail=Contact::findorfail($id);
        return view('view.more_detail_table.add_more_detail',compact('id'));
    }
}
