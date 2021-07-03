@extends('admin.layouts.layout')

@section('content')
        <div class="grid grid-cols-1 lg:grid-cols-1 gap-5 mt-5">
            <div class="card">

                    <div class="card-body">
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="font-extrabold text-lg">Productos</h1>
                            <a href="{{ route('admin/productos/create') }}" class="btn-gray text-sm">Ingresar Produtos</a>
                        </div>    
                    </div>
                

                <table class="table-auto w-full mt-5 text-right">

                    <thead>
                        <tr>
                            <td class="py-4 font-extrabold text-sm text-left">Producto</td>
                            <td class="py-4 font-extrabold text-sm text-left">Descripción</td>
                            <td class="py-4 font-extrabold text-sm">Precio</td>
                            <td class="py-4 font-extrabold text-sm">Categoria</td>
                            <td class="py-4 font-extrabold text-sm">Talla</td>
                            <td class="py-4 font-extrabold text-sm">Color</td>
                            <th class="py-4 font-extrabold text-sm">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @if($productos->count())
                            @foreach($productos as $producto)
                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                        <div class="w-8 h-8 overflow-hidden mr-3">
                                            <img src="{{ asset('images/productos/'.$producto->imagen) }}" class="object-cover">
                                        </div>
                                        {{ $producto->nombre }}
                                    </td>
                                    <td class="py-4 text-xs text-gray-600 text-left">{{ $producto->Descripcion }}</td>
                                    <td class="py-4 text-xs text-gray-600"> {{ $producto->precio }}</td>
                                    <td class="py-4 text-xs text-gray-600">{{ $producto->categoria }}</td>
                                    <td class="py-4 text-xs text-gray-600">{{ $producto->talla }}</td>
                                    <td class="py-4 text-xs text-gray-600">{{ $producto->color }}</td>
                                    <td class="py-4 text-xs text-gray-600">
                                        <div class="flex flex-row-reverse">
                                            <form action="{{ route('admin/productos/delete', $producto->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }} 
                                                <button class="flex flex-1 bg-red-600 hover:bg-red-300 text-white font-bold py-2 px-4 rounded-full" type="submit">Eliminar</button>
                                            </form>
                                            <form action="{{ route('admin/productos/edit',
                                            $producto->id)  }}">
                                                <button class="flex flex-1 bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Editar</button>
                                            </form>
                                                
                                                
                                        </div>         
                                    </td>
                                </tr>
                                <!-- end item -->
                            @endforeach
                        @else
                        <tr>
                            <td py-4 text-xs text-gray-600 text-left colspan="6">
                                <div class="">
                                    No se encontraron productos para mostrar
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>

                </table>
                {{ $productos->links() }}
            </div>
        </div>   
@endsection    