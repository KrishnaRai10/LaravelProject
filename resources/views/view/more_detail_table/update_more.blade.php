<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- Add your CSS styles if necessary -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    
    {{-- @vite(['resources/css/app.css','resources/js/app.js']); --}}

    
   
</head>
<div class="row justify-content-center align-items-center">
<div class="container">
    <div class="col-10 mt-5">
    <form action="{{route('contact.update',$contactUpdate->id)}}" class="row g-3" method="POST">
        @csrf
        @method('PUT')
          <div class="col-md-6">
            <label for="father_name" class="form-label">Father Name</label>
            <input type="text" class="form-control" value="{{$contactUpdate->father_name}}" id="father_name" name="father_name">
            <span class="text-danger">
              @error('father_name')
              {{$message}}
          @enderror
           </span>
          </div>
          <div class="col-md-6">
            <label for="mother_name" class="form-label">Mother Name</label>
            <input type="text" class="form-control" value="{{$contactUpdate->mother_name}}" id="mother_name" name="mother_name">
            <span class="text-danger">
              @error('mother_name')
              {{$message}}
          @enderror
           </span>
          </div>
          <div class="col-12">
            <label for="permanent_address" class="form-label">Permanent Address</label>
            <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="{{$contactUpdate->permanent_address}}" placeholder="1234 Main St">
            <span class="text-danger">
              @error('permanent_address')
              {{$message}}
          @enderror
           </span>
          </div>
          <div class="col-12">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="password" name="phone" value="{{$contactUpdate->phone}}" placeholder="1234 Main St">
            <span class="text-danger">
              @error('phone')
              {{$message}}
          @enderror
           </span>
          </div>
        
        
         
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
</div>
</div>
  
</div>
 