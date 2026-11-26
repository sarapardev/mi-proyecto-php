
@extends('landing.layouts.landing')

@section('title', 'Inicio | Empresa de Sara')

@section('header')
    <div class="hero">
        <div class="hero-content">
            <span class="hero-subtitle">BIENVENIDOS A NUESTRA EMPRESA</span>
            <h1>EMPRESA DE Sara</h1>
            <div class="gold-line"></div>
            <a href="#contacto" class="hero-button">CONTÁCTANOS</a>
        </div>
    </div>
@endsection

@section('content')

<section class="office-section">
    <div class="section-heading">
        <span class="small-title">NUESTRO ESPACIO</span>
        <h2>Bienvenido, mira mi oficina</h2>
        <div class="gold-line"></div>
    </div>

    <div class="office-image">
        <img src="{{ asset('assets/oficina.jpeg') }}" alt="Nuestra oficina">
    </div>
</section>

<section class="contact-section" id="contacto">

    <div class="section-heading">
        <span class="small-title">ESTAMOS A TU DISPOSICIÓN</span>
        <h2>Datos de contacto</h2>
        <div class="gold-line"></div>
    </div>

    <div class="contact-owner">
        Sara P.
    </div>

    <div class="contact-grid">

        <div class="contact-card">
            <div class="contact-icon">☎</div>
            <h3>Teléfono</h3>
            <a href="tel:+34961234567">+34 961 234 567</a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">✉</div>
            <h3>Email</h3>
            <p>Escríbenos</p>
            <a href="mailto:info@miempresa.com">
                info@miempresa.com
            </a>
        </div>

        <div class="contact-card">
            <div class="contact-icon">⌖</div>
            <h3>Dirección</h3>
            
            <span>Calle Colón 10, Valencia, España</span>
        </div>

    </div>

</section>

@endsection
