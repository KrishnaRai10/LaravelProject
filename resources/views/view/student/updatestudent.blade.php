@extends('view.student.layoutstudent')
@section('title')
Update Student
@endsection
@section('content')
<div class="container">
  
  <form action="{{route('students.update',$studentUpdate->id)}}" class="row g-3" method="POST">
    @csrf
    @method('PUT')
      <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$studentUpdate->name}}" id="name" name="name">
        <span class="text-danger">
          @error('name')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" value="{{$studentUpdate->email}}" id="email" name="email">
        <span class="text-danger">
          @error('email')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-12">
        <label for="age" class="form-label">Age</label>
        <input type="text" class="form-control" id="age" name="age" value="{{$studentUpdate->age}}" placeholder="1234 Main St">
        <span class="text-danger">
          @error('age')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-12">
        <label for="password" class="form-label">Password</label>
        <input type="text" class="form-control" id="password" name="password" value="{{$studentUpdate->password}}" placeholder="1234 Main St">
        <span class="text-danger">
          @error('password')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-12">
        <label for="address" class="form-label">Address </label>
        <input type="text" class="form-control" id="address" name="address" value="{{$studentUpdate->address}}" placeholder="Apartment, studio, or floor">
        <span class="text-danger">
          @error('address')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-md-6">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" value="{{$studentUpdate->city}}" name="city">
        <span class="text-danger">
          @error('city')
          {{$message}}
      @enderror
       </span>
      </div>
      
    
     
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
@endsection