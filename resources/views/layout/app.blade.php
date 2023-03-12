<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
        @isset($title) {{ $title }} @endisset
         - {{ config('app.name') }}
    </title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="{{ asset('css/generique.css') }}">
    <link rel="stylesheet" href="{{ asset('css/composantes.css') }}">
</head>
<body>
    <!-- Navigation -->
    @includeUnless(Request::is('/'), 'layout.navigation')
    
    <!-- Content -->
    @yield('content')
    
    <!-- Footer -->
    @include('layout.footer')
</body>
</html>
