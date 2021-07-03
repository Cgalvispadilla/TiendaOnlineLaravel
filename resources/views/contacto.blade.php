@extends('plantilla.layout')

@section('title', 'Home')

@section('content')

<div style="height: 80px; "></div>
<main>
    <div class="container">
        <section class="shadow-box contacto-form">
            <div class="sec-img">
            <img src="{{asset('images/img/header.jpg')}}" alt="header">
            </div>
            <div class="container-2 flex">
                <h1 class="tl">Envíanos tu mensaje</h1>
                <form class="form-c" action="{{ route('enviar.mensaje') }}" method="POST">
                    @csrf
                    <div class="n-a">
                        <div class="col-50">
                            <label for="nombres">Nombres</label>
                            <input class="in-t1" type="text" name="nombre" id="nombres" required>
                        </div>
                        <div class="col-50">
                            <label for="apellido">Apellidos</label>
                            <input class="in-t1" type="text" name="apellido" id="apellido" required>
                        </div>
                    </div>
                    <div class="col-100">
                        <label for="correo">Correo</label>
                        <input class="in-t1" type="email" name="correo" id="correo" placeholder="tucorreo@gmail.com" required>
                    </div>
                    <div class="col-100">
                        <label for="tema">Tema</label>
                        <input class="in-t1" type="text" name="tema" required id="tema" placeholder="Queja, reclamo, etc.">
                    </div>
                    <div class="col-100">
                        <label for="textarea-mensaje">Mensaje</label>
                        <textarea required class="ta-1" name="mensaje" id="textarea-mensaje" rows="6"></textarea>
                    </div>
                    <button type="submit" class="btn">Enviar mensaje</button>
                </form>
                <div class="form-c2">
                    <h3>Visitanos</h3>
                    <address>
                        Carrera 13 W #23-44 Barrio El Dorado.<br />
                        Telefono de contacto<br />
                        314 528 8793<br />
                        Montería / Córdoba / Colombia
                    </address>
                </div>
            </div>

        </section>
        <br>
    </div>
</main>

@endsection
