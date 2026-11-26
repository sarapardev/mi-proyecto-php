<!DOCTYPE html>
<html lang="es">
<head>
    
<meta charset="UTF-8">
    
<title>
        @yield('title')
    
</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>



<header>
    @include('_partials.nav')
    @yield('header')
</header>

    
<main>
    @yield('content')
    
</main>

    
<footer>
        
@include('_partials.footer')
    
</footer>
</body>
</html>