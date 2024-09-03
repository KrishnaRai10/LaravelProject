@extends('view.student.layoutstudent')

@section('title')
    Student Details
@endsection

@section('content')
    <div class="container">
        <h1>Student Details</h1>

        <div class="card mb-3">
            <div class="card-header">
                {{ $students->name }} ({{ $students->city }})
            </div>
            <div class="card-body">
                <p><strong>Age:</strong> {{ $students->age }}</p>
                <p><strong>Email:</strong> {{ $students->email }}</p>
                <p><strong>Address:</strong> {{ $students->address }}</p>

                @if($students->contact_detail)
                    <h5>Contact Details</h5>
                    <p><strong>Father's Name:</strong> {{ $students->contact_detail->father_name }}</p>
                    <p><strong>Mother's Name:</strong> {{ $students->contact_detail->mother_name }}</p>
                    <p><strong>Permanent Address:</strong> {{ $students->contact_detail->permanent_address }}</p>
                    <p><strong>Phone:</strong> {{ $students->contact_detail->phone }}</p>
                @else
                    <a href="{{ route('updatecontact',$students->id) }}" class="btn btn-secondary">Add Contact Details</a>
                @endif
            </div>
            <div class="card-footer">
                {{-- <form action="{{ route('students.destroy', $students) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Student</button>
                </form> --}}
                @if($students->contact_detail)
                    <form action="{{ route('contact.destroy', $students->contact_detail) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Contact Details</button>
                    </form>
                    <a href="{{route('contact.edit',$students->contact_detail->id)}}" class="btn btn-primary mt-3">Update</a>

                @endif
            </div>
        </div>
    </div>
@endsection
