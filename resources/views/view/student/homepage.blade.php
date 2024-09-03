@extends('view.student.layoutstudent')
@section('title')
HomePage
@endsection
@section('content')
<a href="{{route('students.create')}}" class="btn btn-success btn-sm mb-3">Add Student</a>
@if (session('status'))
<span class="alert alert-success">
 {{session('status')}}
</span>
@endif

<table class="table table-striped table-bordered">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        No.
      </th>
      <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Name
      </th>
      <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Email
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Age
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Address
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        City
      </th>
      <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
        Password
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
  @foreach ($students as  $student)
  <tbody class="bg-white divide-y divide-gray-200">
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{$student->id}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{$student->name}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$student->email}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$student->age}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$student->address}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$student->city}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$student->password}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <a href="{{route('students.show',$student->id)}}" class="btn btn-primary">View</a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <form action="{{route('students.destroy',$student->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
          </form>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary">Update</a>
        </td>
     
      </tr>
      
    </tbody>  
      @endforeach
 

    </table>

   
    {{-- <div class="mt-4">
      {{$students->links()}}
    </div> --}}
    @endsection

    

