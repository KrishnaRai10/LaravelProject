@extends('professor.layout_professor')
@section('title')
Add New Professor
@endsection
@section('content')
<div class="container">
  
<form action="{{route('professor.store')}}" class="row g-3" method="POST">
  @csrf
    <div class="col-md-6">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="col-12">
      <label for="department" class="form-label">Department</label>
      <input type="text" class="form-control" id="department" name="department" placeholder="1234 Main St">
    </div>
   
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>
@endsection