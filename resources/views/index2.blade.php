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
        

    <title>Confecciones Cecy</title>
</head>

<body>
    <header class="header" id="navbar-menu">
        <nav class="nav">
            <div class="logo">
            <a href=""><img src="{{ asset('images/img/logo50x150.png') }}" alt=""></a>
            </div>
            <div class="burger">
                <a href="javascript:void(0);" onclick='menu()'@onclick><i class="fas fa-bars"></i></a>
            </div>
            <div class="navigation" id="navlist">
                <a href="">Inicio</a>
                <a href="">Productos</a>
                <a href="">¿Quienes somos?</a>
                <a href="">Contacto</a>
                <a href="javascript:void(0);"><i class="fas fa-shopping-cart"></i></a>
                {{-- <a href=""> --}}
                    @auth
                    <!-- Settings Dropdown -->
                        <div>
                            <x-jet-dropdown >
                                <x-slot name="trigger">
                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    {{-- <img src="src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt=""> --}}
                                        <button class="text-sm border-2 border-transparent rounded-full focus:outline-none     focus:border-gray-300 transition duration-150 ease-in-out">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </button>
                                    @else
                                    <button class="flex items-center text-sm font-medium text-white  hover:text-white  hover:border-gray-300 focus:outline-none focus:text-white  focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>
        
                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                    @endif
                                </x-slot>
            
                                <x-slot name="content">
                                    <!-- Account Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Account') }}
                                    </div>
            
                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                        {{ __('Profile') }}
                                    </x-jet-dropdown-link>
            
                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </x-jet-dropdown-link>
                                    @endif
            
                                    <div class="border-t border-gray-100"></div>
            
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </x-jet-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    
                    @else
                    <a><i class="fas fa-user "></i></a>

                        
                    @if (Route::has('login'))
                            @auth
                                
                                {{-- <a href="{{ route('dashboard') }}" >Dashboard</a> --}}
                            @else
                                <a href="{{ route('login') }}">Iniciar Sesión</a>
                            
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Registrarse</a>
                                
                                @endif
                            @endif
                        @endif      
                @endif
                    {{-- </a> --}}
            </div>
        </nav>
    </header>

    {{-- <header class="header" id="navbar-menu">
        <div class="nav">
            <a class="nav-logo" href="index.html">
                <img src="{{ asset('images/img/logo50x150.png') }}" alt="logo">
            </a>
            {{-- <input type="checkbox" id="menu-bar">
            <label for="menu-bar" class="fas fa-bars"></label> --}}
            {{-- <div class="burger">
                <a href="javascript:void(0);" onclick="menu()"><i class="fas fa-bars"></i></a>
            </div>
            <div class="navigation" id="navlist">
                <ul>
                    <li><a href=" index.html ">Inicio</a></li>
                    <li><a href=" ">Productos</a></li>
                    <li><a href=" ">¿Quienes somos?</a></li>
                    <li><a href=" ">Contacto</a></li>
                    <li><a href=" "><i class="fas fa-shopping-cart"></i></a></li>
                    <div class="dropdown">  
                        @auth --}}
                                <!-- Settings Dropdown -->
{{--                                
                                    
                                    <div>
                                        <x-jet-dropdown >
                                            <x-slot name="trigger">
                                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                <a ><img src="src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" alt=""></a> --}}
                                                    {{-- <button class="text-sm border-2 border-transparent rounded-full focus:outline-none     focus:border-gray-300 transition duration-150 ease-in-out">
                                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                                    </button> --}}
                                                {{-- @else
                                                 <button class="flex items-center text-sm font-medium text-white  hover:text-white  hover:border-gray-300 focus:outline-none focus:text-white  focus:border-gray-300 transition duration-150 ease-in-out">
                                                    <div>{{ Auth::user()->name }}</div>
                    
                                                    <div class="ml-1">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                                @endif
                                            </x-slot>
                        
                                            <x-slot name="content"> --}}
                                                <!-- Account Management -->
                                                {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                                                    {{ __('Manage Account') }}
                                                </div>
                        
                                                <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                                    {{ __('Profile') }}
                                                </x-jet-dropdown-link>
                        
                                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                    <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                                        {{ __('API Tokens') }}
                                                    </x-jet-dropdown-link>
                                                @endif
                        
                                                <div class="border-t border-gray-100"></div>
                        
                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-jet-dropdown-link href="{{ route('logout') }}"
                                                                        onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
                                                        {{ __('Logout') }}
                                                    </x-jet-dropdown-link>
                                                </form>
                                            </x-slot>
                                        </x-jet-dropdown>
                                    </div>
                                
                                @else
                                    <li><a class="dropbtn" enable><i class="fas fa-user "></i></a></li>
                                    <div class="dropdown-content">
                                @if (Route::has('login'))
                                        @auth --}}
                                            
                                            {{-- <a href="{{ route('dashboard') }}" >Dashboard</a> --}}
                                        {{-- @else
                                            <a href="{{ route('login') }}">Iniciar Sesión</a>
                                        
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">Registrarse</a>
                                            
                                            @endif
                                        @endif
                                    @endif    
                        
                            </div>
                    
                            @endif
                    </div>
                   
                </ul>
            </nav>
        </div>
    </header> --}}
    <div style="height: 80px; "></div>

    <main>
        <div class="container">
            <div class="galery" id="galery">
            </div>
            <div class="home-content">
                <div class="site-info">
                    <div class="text-look">
                        <h3>
                            Encuentra tu estilo #2020
                        </h3>
                        <p>¡Nuevo año, nueva década y nuevo look!</p>
                        <p>
                            Marca la diferencia expresando tu personalidad, descubre tu look ideal y róbate las
                            miradas
                            en cualquier lugar.
                        </p>
                    </div>

                    <div class="img-container">
                        <div class="dy-container">
                            <div class="box">
                                <img src="img/women1.jpg" alt="mujer">
                            </div>
                            <div class="box">
                                <img src="img/men.jpg" alt="hombre" class="img2">
                            </div>
                            <div class="box">
                                <img src="img/children.jpg" alt="hombre" class="img2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="titulo ">FAVORITOS DE LA SEMANA</h1>
            <section class="p-slider">
                <ul id="autowidth" class="cs-hidden">
                    <li class="item-a">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="Producto" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-b">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn"></a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-c">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-d">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-e">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-f">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-g">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-h">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <h2 class="titulo">Núeva colección</h2>
            <section class="p-slider">
                <ul id="autowidth2" class="cs-hidden">
                    <li class="item-a">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="Producto" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-b">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-c">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-d">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-e">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-f">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-g">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                    <li class="item-h">
                        <!--box-slider-->
                        <div class="box">
                            <!--img-box-->
                            <div class="slide-img">
                                <img alt="1" src="img/cloth_1.jpg">
                                <!--overlayer-->
                                <div class="overlay">
                                    <!--buy-btn-->
                                    <a href="#" class="buy-btn">Comprar</a>
                                </div>
                            </div>
                            <!--detail-box-->
                            <div class="detail-box">
                                <!--producto-->
                                <div class="tipo">
                                    <a href="#">Nombre Producto</a>
                                    <span>Núevo</span>
                                </div>
                                <!--price-------->
                                <a href="#" class="precio">$23.000</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section class="subscribe">
                <form action="# " class="formulario">
                    <div class="info-suscribe">
                        <label for="suscripcion">¡Suscríbete a nuestras noticias!</label>
                        <p>
                            Sé el primero en enterarte de las nuevas tendencias y novedades que tenemos para ti.
                        </p>
                    </div>
                    <div class="input-subs">
                        <i class="fas fa-envelope"></i>
                        <input type="email " id="suscripcion" placeholder="E-mail ">
                        <a>Suscribirse</a>
                    </div>
                </form>
            </section>
        </div>
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
    <script src="{{ asset('js\main.js') }}"></script>
</body>

</html>