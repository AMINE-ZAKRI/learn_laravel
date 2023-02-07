<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout-app-@yield('title')</title>
</head>
<body>
    <div>
        @if (session('status'))
        <div style="background: red;color:blue">
            {{ session('status') }}
        </div>
            
        @endif
    </div>
    @yield('content')
   
</body>
</html>