<!DOCTYPE html>
<html lang="es">
<head>
    
<meta charset="UTF-8">
    
<title>
        @yield('title')
    
</title>
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
        
<p>Pie de página &copy; 2025</p>
    
</footer>
</body>
</html>