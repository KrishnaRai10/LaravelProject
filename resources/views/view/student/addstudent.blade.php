@extends('view.student.layoutstudent')
@section('title')
Add New Student
@endsection
@section('content')
<div class="container">
  
<form action="{{route('students.store')}}" class="row g-3" method="POST">
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
      <label for="age" class="form-label">Age</label>
      <input type="text" class="form-control" id="age" name="age" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" id="password" name="password" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="address" class="form-label">Address </label>
      <input type="text" class="form-control" id="address" name="address" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" id="city" name="city">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>
@endsection