<head>
  <link rel="stylesheet" href="public/css/style.css">
    </head>
    <body>
    
    {{-- <div class="header">
      <a href="#default" class="logo">Header</a>
      <div class="header-right">
        @forelse ($users as $user )
        <a class="active" href="#home">{{$user}}</a>
        @empty
        <a href="#contact">No users found.</a>
        @endforelse
      </div>
    </div> --}}
    <div class="header">
      <a href="#default" class="logo">Header</a>
      <div class="header-right">
        {{-- @forelse ($detail as $key => $value ) --}}
        @forelse ($users as $user )
        <a  class="active">{{$user}}</a>
        @empty
        <a href="#contact">No users found.</a>
        @endforelse
      </div>
    </div>
    {{-- <a href="#contact">Contact</a>
    <a href="#about">About</a>
    --}}
    