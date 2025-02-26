<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL 11 TASK LIST APP</title>
    @yield('styles')
</head>
<body>
   <h1>@yield('title')</h1>
   <div>
        @if (session()->has('success'))
        <div>{{session('success')}}</div>
        @endif
        @yield('content')
        @if (session()->has('success'))
        @endif
   </div> 
</body>
</html>