@extends('admin.layouts.layout')

@section('content')
    
            <!-- best seller & traffic -->
            <div class="grid grid-cols-1 lg:grid-cols-1 gap-5 mt-5">
                <div class="card">

                    <div class="card-body">
                        <div class="flex flex-row justify-between items-center">
                            <h1 class="font-extrabold text-lg">Más vendidos</h1>
                            <a href="#" class="btn-gray text-sm">Ver todos</a>
                        </div>

                        <table class="table-auto w-full mt-5 text-right">

                            <thead>
                                <tr>
                                    <td class="py-4 font-extrabold text-sm text-left">Producto</td>
                                    <td class="py-4 font-extrabold text-sm">Precio</td>
                                    <td class="py-4 font-extrabold text-sm">Vendido</td>
                                    <td class="py-4 font-extrabold text-sm">Ganancia</td>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                        <div class="w-8 h-8 overflow-hidden mr-3">
                                            <img src="img/sneakers.svg" class="object-cover">
                                        </div>
                                        Sneakers and Tennis
                                    </td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                                </tr>
                                <!-- end item -->

                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                        <div class="w-8 h-8 overflow-hidden mr-3">
                                            <img src="img/socks.svg" class="object-cover">
                                        </div>
                                        Crazy Socks & Graphic Socks for Men
                                    </td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                                </tr>
                                <!-- end item -->

                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                        <div class="w-8 h-8 overflow-hidden mr-3">
                                            <img src="img/soccer.svg" class="object-cover">
                                        </div>
                                        Adidas Soccer Ball
                                    </td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                                </tr>
                                <!-- end item -->

                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                        <div class="w-8 h-8 overflow-hidden mr-3">
                                            <img src="img/food.svg" class="object-cover">
                                        </div>
                                        Best Chocolate Chip Cookies
                                    </td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                    <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                    <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                                </tr>
                                <!-- end item -->

                            </tbody>

                        </table>

                    </div>
                </div>
                <div class="card">

                    <div class="card-body">
                        <h2 class="font-bold text-lg mb-10">Compras Recientes</h2>

                        <!-- start a table -->
                        <table class="table-fixed w-full">

                            <!-- table head -->
                            <thead class="text-left">
                                <tr>
                                    <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">Cliente</th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Producto
                                    </th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Factura</th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Precio</th>
                                    <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Estado</th>
                                </tr>
                            </thead>
                            <!-- end table head -->

                            <!-- table body -->
                            <tbody class="text-left text-gray-600">

                                <!-- item -->
                                <tr>
                                    <!-- name -->
                                    <th
                                        class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                        <div class="w-8 h-8 overflow-hidden rounded-full">
                                            <img src="img/user2.jpg" class="object-cover">
                                        </div>
                                        <p class="ml-3 name-1">user name</p>
                                    </th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                    </th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                            class="num-4"></span></th>
                                    <!-- invoice -->

                                    <!-- price -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                            class="num-2"></span></th>
                                    <!-- price -->

                                    <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                    <!-- status -->

                                </tr>
                                <!-- item -->


                                <!-- item -->
                                <tr>
                                    <!-- name -->
                                    <th
                                        class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                        <div class="w-8 h-8 overflow-hidden rounded-full">
                                            <img src="img/user3.jpg" class="object-cover">
                                        </div>
                                        <p class="ml-3 name-1">user name</p>
                                    </th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                    </th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                            class="num-4"></span></th>
                                    <!-- invoice -->

                                    <!-- price -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                            class="num-2"></span></th>
                                    <!-- price -->

                                    <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                    <!-- status -->

                                </tr>
                                <!-- item -->


                                <!-- item -->
                                <tr>
                                    <!-- name -->
                                    <th
                                        class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                        <div class="w-8 h-8 overflow-hidden rounded-full">
                                            <img src="img/user2.jpg" class="object-cover">
                                        </div>
                                        <p class="ml-3 name-1">user name</p>
                                    </th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                    </th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                            class="num-4"></span></th>
                                    <!-- invoice -->

                                    <!-- price -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                            class="num-2"></span></th>
                                    <!-- price -->

                                    <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                    <!-- status -->

                                </tr>
                                <!-- item -->

                                <!-- item -->
                                <tr>
                                    <!-- name -->
                                    <th
                                        class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                        <div class="w-8 h-8 overflow-hidden rounded-full">
                                            <img src="img/user1.jpg" class="object-cover">
                                        </div>
                                        <p class="ml-3 name-1">user name</p>
                                    </th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                    </th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                            class="num-4"></span></th>
                                    <!-- invoice -->

                                    <!-- price -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                            class="num-2"></span></th>
                                    <!-- price -->

                                    <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                    <!-- status -->

                                </tr>
                                <!-- item -->

                                <!-- item -->
                                <tr>
                                    <!-- name -->
                                    <th
                                        class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center w-full">
                                        <div class="w-8 h-8 overflow-hidden rounded-full">
                                            <img src="img/user3.jpg" class="object-cover">
                                        </div>
                                        <p class="ml-3 name-1">user name</p>
                                    </th>
                                    <!-- name -->

                                    <!-- product -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport
                                    </th>
                                    <!-- product -->

                                    <!-- invoice -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                            class="num-4"></span></th>
                                    <!-- invoice -->

                                    <!-- price -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                            class="num-2"></span></th>
                                    <!-- price -->

                                    <!-- status -->
                                    <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                    <!-- status -->

                                </tr>
                                <!-- item -->
                            </tbody>
                            <!-- end table body -->

                        </table>
                        <!-- end a table -->
                    </div>
                </div>
            </div>
            <!-- end best seller & traffic -->
@endsection