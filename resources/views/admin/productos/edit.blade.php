@extends('admin.layouts.layout')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-1 gap-5 mt-5">
        <div class="card">
            <form class="w-full max-w-none" method="post" action="{{ route('admin/productos/update', $producto->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="nombre">
                        Nombre
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border b rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="nombre" name="nombre" type="text" placeholder="Blusa" value="{{ $producto->nombre }}">
                        
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="descripcion">
                        Descripción
                        </label>
                        <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="Descripcion" name="Descripcion" type="text" placeholder="Descripción del producto">{{ $producto->Descripcion }}</textarea>   
                    </div>
                    </div>
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="precio">
                        precio
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="precio" name="precio" type="text" placeholder="$9999" value="{{ $producto->precio }}">
                        
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="talla">
                        Talla
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="talla" name="talla">
                                @if ($producto->talla =='XS')
                                <option selected>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                                
                                @elseif ($producto->talla =='S')
                                <option>XS</option>
                                <option selected>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                                
                                
                                    
                                @elseif ($producto->talla =='M')
                                
                                <option>XS</option>
                                <option>S</option>
                                <option selected>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                                
                                @elseif ($producto->talla =='L')
                                
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option selected>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                                
                                @elseif ($producto->talla =='XL')
                                
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option selected>XL</option>
                                <option>XXL</option>

                                @else
                                
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option selected>XXL</option>
                                @endif
                                
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2       text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="categoria">
                        Categoría
                        </label>
                        <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="categoria" name="categoria" value="{{ $producto->categoria }}">
                                @if ($producto->categoria =='Hombre')
                                <option selected>Hombre</option>
                                <option>Mujer</option>
                                <option>Niño</option>
                                <option>Unisex</option>
                                
                                @elseif ($producto->categoria =='Mujer')
                                <option>Hombre</option>
                                <option selected>Mujer</option>
                                <option>Niño</option>
                                <option>Unisex</option>
                                @elseif ($producto->categoria =='Niño')
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option selected>Niño</option>
                                <option>Unisex</option>
                                @else
                                <option>Hombre</option>
                                <option>Mujer</option>
                                <option>Niño</option>
                                <option selected>Unisex</option>

                                @endif
                                
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2       text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cantidad">
                        Cantidad existente
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cantidad" name="cantidad" type="text" placeholder="1,2,3..." value="{{ $producto->cantidad }}">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="color">
                        Color
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="color" name="color" type="text" placeholder="Negro, rojo, etc..." value="{{ $producto->color }}">
                    </div>
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                            Imagen
                            </label>
                        <img src="{{ asset('images/productos/'.$producto->imagen) }}" >
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Cargar Nueva Imagen
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="image"  name="imagen" type="file" value="{{ $producto->imagen }}">
                    </div>
                </div>
                <button class="bg-blue-500 hover:bg-blue-300 text-white font-bold py-2 px-4 border-b-4  border-blue-700 hover:border-blue-500 rounded">Ingresar prenda </button>
                  
            </form>
        </div>
    </div>    

@endsection    