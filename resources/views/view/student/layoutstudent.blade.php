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
    <div class="container col-10">
        <div class="row justify-content-center align-items-center">
            <div class="col-8 bg-success-subtle text-center py-2">Eloquent ORM</div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-8 bg-warning-subtle text-center mb-3">@yield('title')</div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-10">
                @yield('content')
            </div>
            
    </div>
   
   </div>
</body>
        