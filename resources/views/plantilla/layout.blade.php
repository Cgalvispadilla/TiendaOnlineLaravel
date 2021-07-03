<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,700;0,900;1,300;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{  asset('css/main.css')}}">
    <script src="https://kit.fontawesome.com/47d12d955b.js" crossorigin="anonymous"></script>
      <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        @livewireStyles

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        

    <title>Confecciones Cecy - @yield('title')</title>
</head>
<body>
   @include('plantilla.header')
    <div style="height: 80px; "></div>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="footer-container">
            <div class="footer-colum">
                <a href="index.html">Inicio</a>
                <a href="productos.html ">Producto</a>
                <a href="# ">Contacto</a>
            </div>
            <div class="footer-colum">
                <a href="# ">Preguntas frecuentes</a>
                <a href="# ">Politicas de envios</a>
                <a href="# ">Quejas y reclamos</a>
            </div>
            <div class="footer-colum mx-hidden">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.270660215617!2d-75.9014112852152!3d8.76058549370739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zOMKwNDUnMzguMSJOIDc1wrA1Myc1Ny4yIlc!5e0!3m2!1ses!2sco!4v1598827834560!5m2!1ses!2sco "
                    width="auto " height="100px " frameborder="0 " style="border:0; margin: auto; padding: 10px;"
                    allowfullscreen="" aria-hidden="false " tabindex="0 ">
                </iframe>
                <address>
                    Dirección:<br />
                    Carrera 13 W #23-44 Barrio El Dorado.<br />
                    Telefono de contacto<br />
                    314 528 8793<br />
                    Montería / Córdoba / Colombia
                </address>
            </div>
        </div>
    </footer>
    <footer>
        <div class="footer-copyright ">© 2020 Copyright:
            <a href="index.html "> cecyshop.com</a>
        </div>
    </footer>
    <script src="{{ asset('js\jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('js\lightslider.js') }}"></script>
    {{-- <script src="{{ asset('resources\js\main.js') }} "></script> --}}
    <script src="{{ asset('js\nav-bar.js') }}"></script>
    <script src="{{ asset('js\galeryslider.js') }}"></script>
    <script src="{{ asset('js\product-slider.js') }}"></script>

</body>

</html>