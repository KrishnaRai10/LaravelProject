<h1>Blade Template</h1>
{{23*1234}}
<br><br>
{{"Hello World"}}
<br><br>
{!!"<h1>HI blade</h1>"!!}
{!!'<script>alert("Hello blade")</script>'!!}
@php
    $names=["Krishna","Abhishek","Tarun"]
@endphp
<ul>
@foreach ($names as $name )
    {{-- <li>{{$loop->iteration}}{{$name}}</li>   Iteration --}}
    {{-- <li>{{$loop->count}}{{$name}}</li>   Count --}}
    {{-- <li>{{$loop->index}}{{$name}}</li>   Index --}}
    {{-- <li>{{$loop->first}}{{$name}}</li>   First --}}
    {{-- <li>{{$loop->last}}{{$name}}</li>   last --}}
    {{-- <li>{{$loop->depth}}{{$name}}</li>   depth --}}
    {{-- <li>{{$loop->parent}}{{$name}}</li>   parent --}}
    @if ($loop->even)
        <li style="color: red">{{$name}}</li>
@elseif ($loop->odd)
        <li style="color: green">{{$name}}</li>
    @endif
  

    <li>{{$name}}</li>
    
    @endforeach
</ul>