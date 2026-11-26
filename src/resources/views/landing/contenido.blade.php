
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#101b19">
<title>Confía en ti mismo | El poder de creer</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500;1,600&display=swap');

:root {
    --dark: #101b19;
    --dark2: #182925;
    --green: #a9c7a7;
    --cream: #f5f2e9;
    --gold: #d6b77b;
    --muted: #a8b7ad;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    scroll-behavior: smooth;
}

body {
    background: var(--cream);
    color: var(--dark);
    font-family: 'DM Sans', sans-serif;
    overflow-x: hidden;
}

a {
    text-decoration: none;
    color: inherit;
}

/* NAVBAR */

nav {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 8%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 10;
    color: white;
}

.logo {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    letter-spacing: 1px;
}

.logo span {
    color: var(--green);
}

.nav-links {
    display: flex;
    gap: 35px;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.nav-links a {
    opacity: .8;
    transition: .3s;
}

.nav-links a:hover {
    opacity: 1;
    color: var(--green);
}

/* HERO */

.hero {
    min-height: 100vh;
    position: relative;
    background:
        linear-gradient(90deg, rgba(10,24,21,.96), rgba(10,24,21,.65), rgba(10,24,21,.15)),
        url('https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=2000&q=90')
        center/cover;
    display: flex;
    align-items: center;
    padding: 140px 10% 100px;
    color: white;
}

.hero-content {
    max-width: 850px;
    animation: appear 1.2s ease forwards;
}

.eyebrow {
    color: var(--green);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 5px;
    margin-bottom: 30px;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(55px, 8vw, 108px);
    line-height: 1.05;
    font-weight: 500;
    letter-spacing: -3px;
}

.hero h1 em {
    color: var(--green);
    font-weight: 500;
}

.hero-description {
    max-width: 550px;
    color: #d4ddd6;
    font-size: 17px;
    line-height: 1.9;
    margin: 35px 0;
}

.cta {
    display: inline-flex;
    align-items: center;
    gap: 18px;
    padding: 17px 28px;
    background: var(--green);
    color: var(--dark);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    transition: .3s;
}

.cta:hover {
    background: white;
    transform: translateY(-4px);
}

.hero-bottom {
    position: absolute;
    bottom: 35px;
    left: 10%;
    right: 10%;
    display: flex;
    justify-content: space-between;
    color: #c2cec5;
    font-size: 10px;
    letter-spacing: 3px;
    text-transform: uppercase;
}

/* INTRO */

.intro {
    padding: 140px 12%;
    display: grid;
    grid-template-columns: 1fr 1.3fr;
    gap: 100px;
    align-items: center;
}

.section-label {
    color: #78947a;
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 4px;
    margin-bottom: 25px;
}

.intro h2,
.section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(38px, 5vw, 62px);
    line-height: 1.15;
    font-weight: 500;
}

.intro h2 em {
    color: #79947b;
}

.intro-text {
    font-size: 16px;
    line-height: 2;
    color: #64716a;
}

.intro-text p + p {
    margin-top: 20px;
}

/* QUOTE */

.quote {
    background: var(--dark);
    padding: 110px 12%;
    text-align: center;
    color: white;
    position: relative;
    overflow: hidden;
}

.quote::before {
    content: '“';
    position: absolute;
    font-family: 'Playfair Display', serif;
    font-size: 350px;
    color: rgba(169,199,167,.06);
    top: -110px;
    left: 5%;
}

.quote blockquote {
    position: relative;
    max-width: 1000px;
    margin: auto;
    font-family: 'Playfair Display', serif;
    font-size: clamp(30px, 5vw, 55px);
    line-height: 1.4;
}

.quote blockquote em {
    color: var(--green);
}

.quote-author {
    margin-top: 35px;
    color: var(--gold);
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 4px;
}

/* BENEFITS */

.benefits {
    padding: 130px 10%;
}

.center {
    text-align: center;
}

.benefits .section-title {
    max-width: 700px;
    margin: auto;
}

.benefit-grid {
    margin-top: 75px;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.benefit-card {
    padding: 45px 35px;
    background: white;
    border: 1px solid #e9e6dc;
    transition: .4s;
}

.benefit-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 60px rgba(25,45,35,.09);
}

.card-number {
    font-family: 'Playfair Display', serif;
    color: #8da88d;
    font-size: 45px;
    margin-bottom: 30px;
}

.benefit-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    font-weight: 500;
    margin-bottom: 20px;
}

.benefit-card p {
    font-size: 14px;
    line-height: 1.9;
    color: #788078;
}

/* IMAGE SECTION */

.image-section {
    min-height: 600px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    background: #e8e8dc;
}

.image-panel {
    background: url('https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?auto=format&fit=crop&w=1200&q=85') center/cover;
    min-height: 500px;
}

.image-content {
    padding: 90px 12%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.image-content h2 {
    font-family: 'Playfair Display', serif;
    font-size: 50px;
    line-height: 1.2;
    font-weight: 500;
    margin-bottom: 30px;
}

.image-content p {
    color: #66716a;
    line-height: 2;
    font-size: 15px;
}

/* STEPS */

.steps {
    padding: 130px 12%;
    background: white;
}

.steps-list {
    margin-top: 65px;
    max-width: 850px;
    margin-left: auto;
    margin-right: auto;
}

.step {
    display: grid;
    grid-template-columns: 75px 1fr;
    padding: 30px 0;
    border-bottom: 1px solid #e9e9e1;
}

.step-number {
    color: #8da88d;
    font-family: 'Playfair Display', serif;
    font-size: 30px;
}

.step h3 {
    font-family: 'Playfair Display', serif;
    font-size: 25px;
    font-weight: 500;
    margin-bottom: 12px;
}

.step p {
    color: #788078;
    line-height: 1.8;
    font-size: 14px;
}

/* FINAL */

.final-section {
    background:
        linear-gradient(rgba(13,28,24,.85), rgba(13,28,24,.9)),
        url('https://images.unsplash.com/photo-1470252649378-9c29740c9fa8?auto=format&fit=crop&w=1800&q=85') center/cover;
    padding: 150px 10%;
    text-align: center;
    color: white;
}

.final-section h2 {
    max-width: 950px;
    margin: auto;
    font-family: 'Playfair Display', serif;
    font-size: clamp(42px, 7vw, 85px);
    font-weight: 500;
    line-height: 1.15;
}

.final-section h2 em {
    color: var(--green);
}

.final-section p {
    margin: 35px auto;
    max-width: 600px;
    color: #c5d0c8;
    line-height: 1.9;
}

.final-section .cta {
    margin-top: 20px;
}

/* FOOTER */

footer {
    padding: 35px 10%;
    background: #0b1513;
    color: #8c9b90;
    display: flex;
    justify-content: space-between;
    font-size: 11px;
    letter-spacing: 2px;
    text-transform: uppercase;
}

/* ANIMATIONS */

@keyframes appear {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.reveal {
    opacity: 0;
    transform: translateY(35px);
    transition: all .8s ease;
}

.reveal.visible {
    opacity: 1;
    transform: translateY(0);
}

/* RESPONSIVE */

@media(max-width: 850px) {
    .nav-links {
        display: none;
    }

    .intro {
        grid-template-columns: 1fr;
        gap: 35px;
        padding: 90px 8%;
    }

    .benefit-grid {
        grid-template-columns: 1fr;
    }

    .image-section {
        grid-template-columns: 1fr;
    }

    .image-panel {
        min-height: 350px;
    }

    .image-content {
        padding: 70px 8%;
    }

    .steps {
        padding: 90px 8%;
    }

    footer {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }

    .hero-bottom {
        font-size: 8px;
    }
}

@media(max-width: 480px) {
    .hero {
        padding-left: 7%;
        padding-right: 7%;
    }

    .hero h1 {
        letter-spacing: -1px;
    }

    .hero-description {
        font-size: 15px;
    }

    .hero-bottom span:last-child {
        display: none;
    }

    .quote {
        padding: 90px 8%;
    }
}
</style>
</head>

<body>

<nav>
    <a href="#" class="logo">INNER<span>SELF.</span></a>
    <div class="nav-links">
        <a href="#reflexion">Reflexión</a>
        <a href="#beneficios">El poder de creer</a>
        <a href="#cambio">El camino</a>
        <a href="#final">Empieza hoy</a>
    </div>
</nav>

<header class="hero">
    <div class="hero-content">
        <div class="eyebrow">Desarrollo personal · Mentalidad · Confianza</div>

        <h1>
            La importancia<br>
            de <em>confiar</em><br>
            en ti mismo.
        </h1>

        <p class="hero-description">
            Hay una fuerza dentro de ti capaz de transformar tus miedos
            en oportunidades, tus dudas en decisiones y tus sueños
            en realidades. Todo comienza cuando decides creer en ti.
        </p>

        <a href="#reflexion" class="cta">
            Descubre tu potencial <span>→</span>
        </a>
    </div>

    <div class="hero-bottom">
        <span>Una reflexión sobre ti</span>
        <span>El primer paso eres tú · 01 — 04</span>
    </div>
</header>

<section class="intro" id="reflexion">
    <div class="reveal">
        <div class="section-label">01 / El comienzo</div>
        <h2>La persona que más necesita creer en ti eres <em>tú.</em></h2>
    </div>

    <div class="intro-text reveal">
        <p>
            Confiar en uno mismo es mucho más que tener una buena opinión
            sobre nuestras capacidades. Es reconocer nuestro valor,
            aceptar nuestras imperfecciones y comprender que somos
            capaces de afrontar los desafíos que aparecen en nuestro camino.
        </p>

        <p>
            A lo largo de la vida encontramos obstáculos, críticas,
            fracasos y momentos en los que sentimos que no somos
            suficientes. En esos momentos, nuestra confianza se convierte
            en el motor que nos permite continuar.
        </p>

        <p>
            No necesitas tener todas las respuestas, ni ser perfecto.
            Necesitas darte la oportunidad de intentarlo, aprender y
            descubrir hasta dónde puedes llegar.
        </p>
    </div>
</section>

<section class="quote">
    <blockquote>
        "No tienes que demostrarle al mundo que eres capaz.
        Primero tienes que dejar de <em>dudar de ti mismo.</em>"
    </blockquote>
    <div class="quote-author">Una verdad que merece ser recordada</div>
</section>

<section class="benefits" id="beneficios">
    <div class="center reveal">
        <div class="section-label">02 / El poder de creer</div>
        <h2 class="section-title">
            Cuando confías en ti, todo empieza a cambiar.
        </h2>
    </div>

    <div class="benefit-grid">
        <article class="benefit-card reveal">
            <div class="card-number">01</div>
            <h3>Te atreves a avanzar</h3>
            <p>
                Dejas de esperar el momento perfecto y comienzas a tomar
                decisiones. Comprendes que el crecimiento comienza
                precisamente cuando sales de tu zona de confort.
            </p>
        </article>

        <article class="benefit-card reveal">
            <div class="card-number">02</div>
            <h3>Aprendes a superar el miedo</h3>
            <p>
                El miedo deja de ser una barrera que te paraliza y se
                convierte en una señal de que estás explorando algo nuevo.
                Descubres que puedes avanzar incluso con incertidumbre.
            </p>
        </article>

        <article class="benefit-card reveal">
            <div class="card-number">03</div>
            <h3>Reconoces tu propio valor</h3>
            <p>
                Dejas de compararte constantemente con los demás.
                Entiendes que cada persona tiene su propio ritmo y que
                tu valor no depende de la aprobación externa.
            </p>
        </article>

        <article class="benefit-card reveal">
            <div class="card-number">04</div>
            <h3>Te recuperas de los fracasos</h3>
            <p>
                Comprendes que equivocarte no significa ser incapaz.
                Cada error puede enseñarte algo y ayudarte a construir
                una versión más fuerte y consciente de ti.
            </p>
        </article>

        <article class="benefit-card reveal">
            <div class="card-number">05</div>
            <h3>Construyes relaciones sanas</h3>
            <p>
                Cuando reconoces tu valor, aprendes a establecer límites,
                expresar tus necesidades y rodearte de personas que
                respetan quién eres.
            </p>
        </article>

        <article class="benefit-card reveal">
            <div class="card-number">06</div>
            <h3>Persigues tus sueños</h3>
            <p>
                Comienzas a visualizar posibilidades donde antes solo
                veías dificultades. Te permites aspirar a más y trabajar
                por aquello que realmente deseas.
            </p>
        </article>
    </div>
</section>

<section class="image-section" id="cambio">
    <div class="image-panel"></div>

    <div class="image-content reveal">
        <div class="section-label">03 / Una nueva perspectiva</div>

        <h2>No eres tus errores. Eres todo lo que puedes aprender de ellos.</h2>

        <p>
            Uno de los mayores errores que podemos cometer es pensar
            que un fracaso define nuestra identidad. No es así.
            Cada caída representa una oportunidad para conocernos mejor,
            corregir el rumbo y volver a intentarlo con más experiencia.
        </p>
        <br>
        <p>
            La confianza verdadera no significa pensar que nunca
            fallarás. Significa saber que, incluso cuando falles,
            tendrás la capacidad de levantarte y seguir adelante.
        </p>
    </div>
</section>

<section class="steps">
    <div class="center reveal">
        <div class="section-label">04 / Empieza a construirla</div>
        <h2 class="section-title">Pequeños pasos. Grandes transformaciones.</h2>
    </div>

    <div class="steps-list">
        <div class="step reveal">
            <div class="step-number">01</div>
            <div>
                <h3>Deja de hablarte mal</h3>
                <p>
                    Presta atención a cómo te tratas cuando cometes
                    un error. Háblate con la misma comprensión y respeto
                    que ofrecerías a alguien importante para ti.
                </p>
            </div>
        </div>

        <div class="step reveal">
            <div class="step-number">02</div>
            <div>
                <h3>Reconoce tus pequeños logros</h3>
                <p>
                    No esperes a conseguir algo extraordinario para
                    sentirte orgulloso. Cada paso, cada esfuerzo y
                    cada pequeño avance cuentan.
                </p>
            </div>
        </div>

        <div class="step reveal">
            <div class="step-number">03</div>
            <div>
                <h3>Sal de tu zona de confort</h3>
                <p>
                    Atrévete a probar cosas nuevas, aunque no tengas
                    garantías de éxito. La experiencia construye una
                    confianza que la espera nunca podrá darte.
                </p>
            </div>
        </div>

        <div class="step reveal">
            <div class="step-number">04</div>
            <div>
                <h3>Deja de compararte</h3>
                <p>
                    Tu camino no tiene por qué parecerse al de nadie.
                    Concéntrate en tu evolución y mide tu progreso
                    respecto a quien eras ayer.
                </p>
            </div>
        </div>

        <div class="step reveal">
            <div class="step-number">05</div>
            <div>
                <h3>Cumple las promesas que te haces</h3>
                <p>
                    Empieza por pequeños compromisos contigo mismo.
                    Cada vez que los cumples, refuerzas la confianza
                    en tu propia palabra.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="final-section" id="final">
    <div class="section-label">Tu historia continúa</div>

    <h2>
        El mundo no necesita una versión perfecta de ti.
        Necesita tu versión <em>auténtica.</em>
    </h2>

    <p>
        No esperes a sentirte preparado para comenzar.
        No esperes a que desaparezcan todas tus dudas.
        Empieza hoy, con lo que tienes y con quien eres.
        Porque la confianza no aparece antes de actuar:
        se construye mientras avanzas.
    </p>

    <a href="#reflexion" class="cta">
        Vuelve a creer en ti <span>↑</span>
    </a>
</section>

<footer>
    <span>INNERSELF. · Desarrollo personal</span>
    <span>Empieza por creer en ti.</span>
    <span>© 2026</span>
</footer>

<script>
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, {
    threshold: 0.12
});

document.querySelectorAll('.reveal').forEach(element => {
    observer.observe(element);
});
</script>

</body>
</html>
