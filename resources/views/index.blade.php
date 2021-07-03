@extends('plantilla.layout')

@section('title','Home')

@section('content')
<main>
    <div class="container">
        <div class="galery" id="galery">
            <img src="{{asset('images/img/car3.png')}}"id="img">
            <img src="{{asset('images/img/car1.png')}}" id="img" >
            <img src="{{asset('images/img/car4.jpg')}}" id="img">
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
                            <img src="{{asset('images/img/women1.jpg')}}" alt="mujer">
                        </div>
                        <div class="box">
                            <img src="{{asset('images/img/men.jpg')}}" alt="hombre" class="img2">
                        </div>
                        <div class="box">
                            <img src="{{ asset('images/img/children.jpg') }}" alt="hombre" class="img2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="titulo ">FAVORITOS DE LA SEMANA</h1>
        <section class="p-slider">
            <ul id="autowidth" class="cs-hidden"> 
                @if($productos->count())
                    @foreach($productos as $producto)
                        <x-producto :img="$producto->imagen" :nombre="$producto->nombre" :precio="$producto->precio"/>   
                    @endforeach            
                     @else
                        <li >
                        No se encontraron productos para mostrar
                        </li>
                 @endif
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
@endsection
    
