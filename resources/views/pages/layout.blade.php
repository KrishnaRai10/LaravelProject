<head>
    <title>@yield('title')</title>
</head>
@php
    $users=['Krishna','tarun','abhishek'];
    $detail=["name"=>"krishna","age"=>"21","gender"=>"male"];
@endphp

@include('pages.header',['users'=>$users])


{{-- Key value pair send to header file --}}
{{-- @include('pages.header',['detail'=>$detail]) --}}
{{-- Including the subview --}}
@includeWhen(false,'pages.header',['detail'=>$detail])

{{-- <a href="/blade">Blade Template</a> --}}
{{-- <a href="{{route('krishna')}}">Krishna</a>
<a href="{{route('tarun')}}">Tarun</a>
<a href="{{route('abhishek')}}">Abhishek</a> --}}
<article>
    @yield('content')
    
</article>

@include('pages.footer')