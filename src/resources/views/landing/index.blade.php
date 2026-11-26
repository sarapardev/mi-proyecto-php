
@extends('landing.layouts.landing')

@section('title', 'Home')

@section('content')

<section class="hero">

    <div class="hero-content">

        <span class="section-tag">Buscar prácticas es un rollo...</span>

        <h1>Encuentra tus prácticas</h1>

        <p>
            Conectamos estudiantes con empresas para encontrar
            oportunidades profesionales.
        </p>

        <a href="{{ route('services') }}" class="btn-primary">
            Descubre nuestras ciudades
        </a>

    </div>

</section>

<section class="home-section">

    <div class="section-heading">
        <span class="section-tag">SOBRE NOSOTROS</span>

        <h2>Tu talento merece una oportunidad</h2>

        <p>
            Te ayudamos a encontrar prácticas profesionales
            adaptadas a tus intereses y formación.
        </p>
    </div>

    <div class="home-image">
        <img src="{{ asset('assets/oficina.jpeg') }}"
             alt="Oficina de nuestra empresa">
    </div>

</section>

@endsection
