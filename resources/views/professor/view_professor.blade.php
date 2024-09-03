@extends('professor.layout_professor')

@section('title')
    Professor Details
@endsection

@section('content')
    <div class="container">
        <h1>Professor Details</h1>

        <div class="card mb-3">
            <div class="card-header">
                {{ $professors->name }}
           </div>
            <div class="card-body">
                <p><strong>Email:</strong> {{ $professors->email }}</p>
                <p><strong>Department:</strong> {{ $professors->department }}</p>

                @if($professors->courses->isNotEmpty())
        <h5>Additional Details</h5>
        <p><strong>Course Names:</strong></p>
        <ul>
            @foreach($professors->courses as $course)
                <li>{{ $course->course_name }}</li>
            @endforeach
        </ul>
                @else
                    <a href="{{ route('updatecontact',$professor->id) }}" class="btn btn-secondary">Add Course</a>
                @endif
            </div>
            <div class="card-footer">
                {{-- <form action="{{ route('students.destroy', $students) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Student</button>
                </form> --}}
                @if($professors->courses)
                    <form action="{{ route('professor.destroy', $professors->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Contact Details</button>
                    </form>
                    <a href="{{route('professor.edit',$professors->id)}}" class="btn btn-primary mt-3">Update</a>

                @endif
            </div> 
        </div>
    </div>
@endsection
