@extends('professor.layout_professor')
@section('title')
Update Professor
@endsection
@section('content')
<div class="container">
  
  <form action="{{route('professor.update',$professor_detail->id)}}" class="row g-3" method="POST">
    @csrf
    @method('PUT')
      <div class="col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" value="{{$professor_detail->name}}" id="name" name="name">
        <span class="text-danger">
          @error('name')
          {{$message}}
      @enderror
       </span>
      </div>
      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" value="{{$professor_detail->email}}" id="email" name="email">
        <span class="text-danger">
          @error('email')
          {{$message}}
      @enderror
       </span>
      </div>
     
    
      <div class="col-12">
        <label for="department" class="form-label">Department </label>
        <input type="text" class="form-control" id="department" name="department" value="{{$professor_detail->department}}" placeholder="Apartment, studio, or floor">
        <span class="text-danger">
          @error('department')
          {{$message}}
      @enderror
       </span>
      </div>
      
 
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
@endsection