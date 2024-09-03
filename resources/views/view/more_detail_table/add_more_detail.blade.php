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

<body>
  {{-- <table class="table table-striped table-bordered">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          No.
        </th>
        
        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Student Id 
        </th>
        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Father 
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Mother
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
         Permanent Address
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Phone
        </th>
        
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          View
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Delete
        </th>
        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
          Update
        </th>
      </tr>
    </thead>
    @foreach ($more_detail as  $student)
    <tbody class="bg-white divide-y divide-gray-200">
        <tr>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$student->id}}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
            {{$student->student_id}}
          </td>
        
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$student->father_name}}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$student->mother_name}}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$student->permanent_address}}
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            {{$student->phone}}
          </td>
         
          
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <a href="{{route('contact.show',$student->id)}}" class="btn btn-primary">View</a>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <form action="{{route('contact.destroy',$student->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-primary">Delete</button>
            </form>
          </td>
          <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
            <a href="{{route('contact.edit',$student->id)}}" class="btn btn-primary">Update</a>
          </td>
        </tr>
        
      </tbody>  
        @endforeach
   
  
</table> --}}
<div class="container">
 
  <div class="row justify-content-center align-items-center">
    <div class="col-10 mt-5">
      <h1>Add More Details</h1>
        <form action="{{route('contact.store')}}" class="row g-3" method="POST">
            @csrf
         
              <div class="col-md-6">
                <label for="father_name" class="form-label">Father Name</label>
                <input type="text" class="form-control"  id="father_name" name="father_name">
                <span class="text-danger">
                  @error('father_name')
                  {{$message}}
              @enderror
               </span>
              </div>

              <div class="col-md-6">
                <label for="student_id" class="form-label">Student Id</label>
                <input type="text" class="form-control" value="{{$id}}"  id="student_id" name="student_id">
                <span class="text-danger">
                  @error('student_id')
                  {{$message}}
              @enderror
               </span>
              <div class="col-md-6">
                <label for="mother_name" class="form-label">Mother Name</label>
                <input type="text" class="form-control"  id="mother_name" name="mother_name">
                <span class="text-danger">
                  @error('mother_name')
                  {{$message}}
              @enderror
               </span>
              </div>
              <div class="col-12">
                <label for="permanent_address" class="form-label">Permanent Address</label>
                <input type="text" class="form-control" id="permanent_address" name="permanent_address"  placeholder="1234 Main St">
                <span class="text-danger">
                  @error('permanent_address')
                  {{$message}}
              @enderror
               </span>
              </div>
              <div class="col-12">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="password" name="phone" placeholder="1234 Main St">
                <span class="text-danger">
                  @error('phone')
                  {{$message}}
              @enderror
               </span>
              </div>
            
            
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
    </div>
      
    </div>
</div>
</body>
