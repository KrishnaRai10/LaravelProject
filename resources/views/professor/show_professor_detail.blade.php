@extends('professor.layout_professor')
@section('title')
HomePage
@endsection
@section('content')
<a href="{{route('professor.create')}}" class="btn btn-success btn-sm mb-3">Add Professor</a>
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
        Department
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
  @foreach ($professors as  $professor)
  <tbody class="bg-white divide-y divide-gray-200">
      <tr>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{$professor->id}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
          {{$professor->name}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$professor->email}}
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          {{$professor->department}}
        </td>
      
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <a href="{{route('professor.show',$professor->id)}}" class="btn btn-primary">View</a>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <form action="{{route('professor.destroy',$professor->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-primary">Delete</button>
          </form>
        </td>
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
          <a href="{{route('professor.edit',$professor->id)}}" class="btn btn-primary">Update</a>
        </td>
     
      </tr>
      
    </tbody>  
      @endforeach
 

    </table>

   
    {{-- <div class="mt-4">
      {{$students->links()}}
    </div> --}}
    @endsection

    

