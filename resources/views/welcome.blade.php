
{{-- @push('css')
    <link rel="stylesheet" href="public/css/style.css">
@endpush --}}
{{-- @extends('pages.layout')
@php
    $users=['krishna','arjun','sumit'];
@endphp
<script>
    // let data=@json($users);
    let data={{Js::from($users)}}
    data.forEach(element => {
        console.log(element);
        
    });
</script>


@section('content')
<a href="{{route('krishna')}}">Krishna</a>
<a href="{{route('tarun')}}">Tarun</a>
<a href="{{route('abhishek')}}">Abhishek</a>
@endsection --}}


<body>
    {{-- <div class="container">
        <div class="row">
            <div class="col-7">
                <div class="table table-striped table-bordered">
                    @foreach ($students as $student )
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->email}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->age}}</td>
        </tr>
    @endforeach
                </div>

            </div>
        </div>
    </div> --}}
 
      
</body>
{{-- <h2>
    {{$id}}
</h2> --}}
