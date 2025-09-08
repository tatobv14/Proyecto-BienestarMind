<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bienestar Mind</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
<header>
<div class="logo-header">
</div>
<nav>
<ul>
<li><a href="welcome.php">Inicio</a></li>
<li><a href="#">¿Quiénes somos?</a></li>
<li><a href="Error 404.html">Acerca de</a></li>
<li><a href="#">Contacto</a></li>
<li><a href="Error 505.html">Soporte técnico</a></li>
</ul>
</nav>
</header>
<div class="slider">
  <div class="slides">
    <img src="{{ asset('img/sena_inspira.jpeg') }}" alt="SENA Inspira">
    <img src="{{ asset('img/animo_comunidadsena.jpeg') }}" alt="Ánimo Comunidad SENA">
    <img src="{{ asset('img/fortalece_trabajoenequipo.jpeg') }}" alt="Fortalece Trabajo en Equipo">
    <img src="{{ asset('img/trazabilidad_sena.jpeg') }}" alt="Trazabilidad SENA">
    <img src="{{ asset('img/sostenimiento_sena.jpg') }}" alt="sostenimiento">
    <img src="{{ asset('img/ofercta_presencial2.jpg') }}" alt="ofertapresencial2">
    <img src="{{ asset('img/feria_institucional.jpg') }}" alt="feria_institucional">
    <img src="{{ asset('img/sena_marcha.jpeg') }}" alt="marcha">
  </div>
</div>

  <div class="logo-bienestarmind-container">
<img src="{{ asset('/img/LOGO_BIENESTARMIND04.png') }}" alt="BienestarMind Logo">
</div>
 
 
  <div class="contenido">
<h2>Bienvenidos al sistema de bienestar del SENA</h2>
<p>Accede a reservas de espacios, implementos, asesorías y actividades que fortalecen el bienestar físico y emocional de los aprendices.</p>
<p>Ingresa con tu cuenta para gestionar tus beneficios.</p>
<a class="btn secondary-btn" href="LoginBienestarMind.html"> ACCEDER </a>
 
 
  <footer>
<p>Servicio Nacional de Aprendizaje SENA-Centro de Servicios Financieros - Bogotá</li>
<br>Dirección Cra. 13 #65-10 Barrio Chapinero Bogotá D.C.</li>
<br>Sede Salitre Cra. 57c # 64-29, Bogotá </li>
<br>Línea gratuita y resto del País: 018000 910270</li>
<p>© 2025 Bienestar Mind - SENA. Todos los derechos reservados. | Desarrollado por ADSO</p>
<div class="social-icons">
<a href="http://www.facebook.com/" target="_blank">
<img src="Iconos/logo_facebook.png" alt="Facebook">
</a>
<a href="http://www.youtube.com/" target="_blank">
<img src="Iconos/logo_youtube.png" alt="YouTube">
</a>
<a href="http://www.x.com/" target="_blank">
<img src="Iconos/logo_X.png" alt="X (antes Twitter)">
</a>
<a href="https://serviciosfinancierosena.blogspot.com/" target="_blank">
<img src="Iconos/logo-sena-verde-.png" alt="SENA">
</a>
<a href="https://www.whatsapp.com/channel/0029Vb4ouexLdQegC7VkIQ0n/" target="_blank">
<img src="Iconos/Logo_whatsapp.png" alt="Whatsapp">
</a>
</div>
</footer>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
</body>
</html>
