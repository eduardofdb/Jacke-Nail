<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-RPww4g/XnZFfJrLrZ8R2k8fL37cgdHMxO+7UJL5yZDjLgkMvRwHhrJCG6GRaGQRwC/iN+BBdZCC2Fgr3u+q8qQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Document</title>
</head>

<body>
    <?php
    include("../../../Nav.php");
    ?>

    <br><br>

    <div class="text-center my-12 mb-2">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Inicio
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a
                        class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Ventas</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Registrar
                        Ventas</span>
                </div>
            </li>
        </ol>
    </div>
    <div class="content-wrapper">
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-8">
                    <div class="box border-3 shadow p-3 mt-4">
                        <div class="box-header with-border">
                            <h1 class="box-title text-center">Crear Ventas
                                <button class="btn" style="background-color: #000; color: #fff;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        style="fill: rgba(255, 255, 255, 1); transform: ;msFilter:;">
                                        <path
                                            d="M19 2H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V20a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-5h4v5a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-9.424c.618-.735 1-1.692 1-2.746V5c0-1.654-1.346-3-3-3zm1 3v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 8V4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 11H6v-3h4v3z">
                                        </path>
                                    </svg>
                                </button>
                            </h1>
                        </div>


                        <div class="panel-body" style="height: 400px;" id="formularioregistros">
                            <form action="" name="formulario" id="formulario" method="POST" class="row">
                                <div class="form-group col-lg-8 col-md-8 col-xs-12">
                                    <label for="">Servicos</label>
                                    <input class="form-control" type="hidden" name="idventa" id="idventa">
                                    <select name="idcliente" id="idcliente" class="form-control selectpicker"
                                        data-live-search="true" required>
                                    </select>
                                </div>
                                <div class="form-group col-lg-4 col-md-4 col-xs-12">
                                    <label for="">Fecha: </label>
                                    <input class="form-control" type="date" name="fecha_hora" id="fecha_hora" required>
                                </div>
                                <div class="form-group row">
                                    <!-- Empleado (col-lg-6) -->
                                    <div class="col-lg-4">
                                        <label for="">Empleado</label>
                                        <select name="tipo_comprobante" id="tipo_comprobante_empleado"
                                            class="form-control selectpicker" required>
                                            <option value="Boleta">Seleccione una opción</option>
                                            <option value="Boleta">Eduardo Mosquera</option>
                                            <option value="Factura">Cristian Aljaba</option>
                                            <option value="Ticket">Ticket</option>
                                        </select>
                                    </div>
                                    <!-- Cliente (col-lg-6) -->
                                    <div class="col-lg-4">
                                        <label for="">Cliente</label>
                                        <select name="tipo_comprobante" id="tipo_comprobante_cliente"
                                            class="form-control selectpicker" required>
                                            <option value="Boleta">Seleccione una opción</option>
                                            <option value="Boleta">Eduardo Mosquera</option>
                                            <option value="Factura">Cristian Aljaba</option>
                                            <option value="Ticket">Ticket</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <label for="">Precio: </label>
                                        <input class="form-control" type="text" name="serie_comprobante"
                                            id="serie_comprobante" maxlength="7" placeholder="Serie">
                                    </div>
                                    <!-- Adiciones (col-lg-2) -->
                                    <div class="col-lg-2 ">
                                        <label for="">Adiciones </label>
                                        <input class="form-control" type="text" name="num_comprobante"
                                            id="num_comprobante" maxlength="10" placeholder="Número" required>
                                    </div>
                                </div>

                                <div class="form-group col-lg-3 col-md-3 col-sm-6 col-xs-12 mt-2 mb-3 ml-auto">
                                    <button type="button"
                                        class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "
                                        onclick="openModal()"> <i class="fa-solid fa-cart-shopping"></i>insumos</button>


                                </div>

                                <div class="form-group col-lg-12 col-md-12 col-xs-12">
                                    <table id="detalles"
                                        class="table table-striped table-bordered table-condensed table-hover">
                                        <thead style="background-color:#000000; color:#FFFFFF">
                                            <th>Opciones</th>
                                            <th>INsumo</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Precio Venta</th>
                                            <th>Subtotal</th>
                                        </thead>
                                        <tfoot>
                                            <th>TOTAL</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>
                                                <h4 id="total">S/. 0.00</h4><input type="hidden" name="total_venta"
                                                    id="total_venta">
                                            </th>
                                        </tfoot>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="button"
                                        class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>
                                    <button class="btn btn-danger mx-3" onclick="cancelarform()" type="button"
                                        id="btnCancelar"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalles del Producto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="flex flex-wrap justify-center">
                        <!-- Tarjeta de producto (repetir según sea necesario) -->
                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 34435.990</p>
                                <p class="text-gray-800 text-sm">limas de uñas X 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 59.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 345.990</p>
                                <p class="text-gray-800 text-sm">Liquidos remover manicure X 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 59.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 4643.990</p>
                                <p class="text-gray-800 text-sm">Esmaltes manicureX 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 453.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 34435.990</p>
                                <p class="text-gray-800 text-sm">limas de uñas X 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 59.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>

                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 345.990</p>
                                <p class="text-gray-800 text-sm">Liquidos remover manicure X 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 59.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>


                        <div
                            class="product-card max-w-md mx-auto bg-white border border-gray-300 p-4 rounded-md shadow-md flex flex-col items-center">
                            <div class="mb-4 ml-auto">
                                <button id="addToCartBtn" class="p-2 bg-gray-100 rounded-full">
                                    <!-- Icono de estrella (puedes agregar tu propio SVG aquí) -->
                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 2s1.42 3.66 2.34 6.86c.23.82.44 1.7.64 2.64H19c1.1 0 2-.9 2-2s-.9-2-2-2h-3.34L12 2zM12 2s-1.42 3.66-2.34 6.86c-.23.82-.44 1.7-.64 2.64H5c-1.1 0-2-.9-2-2s.9-2 2-2h3.34L12 2z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <img src="data:image/jpeg;base64,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"
                                alt="Product Image" class="w-32 h-32 object-cover rounded mb-4">
                            <div class="text-center">
                                <p class="text-red-600 font-bold text-lg">$ 4643.990</p>
                                <p class="text-gray-800 text-sm">Esmaltes manicureX 1 UD</p>
                                <p class="text-gray-600 text-xs">1 un (un a $ 453.990)</p>
                            </div>
                            <div class="mt-4">
                                <div id="addToCartInput" class="flex items-center space-x-2">
                                    <input id="quantityInput" type="number"
                                        class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                                    <button
                                        class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                                        onclick="addToCart()">Agregar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Repite las tarjetas según sea necesario -->

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>



    <script>
        function openModal() {
            const modal = new bootstrap.Modal(document.getElementById('productModal'));
            modal.show();
        }

        function closeModal() {
            const modal = new bootstrap.Modal(document.getElementById('productModal'));
            modal.hide();
        }
    </script>
    <script>
        function addToCart() {
            const addToCartInput = document.getElementById('addToCartInput');
            const quantityInput = document.getElementById('quantityInput');

            // Lógica para agregar el producto al carrito
            // Aquí puedes utilizar la cantidad del input (quantityInput.value)

            // Actualizar el texto del botón y agregar animación
            addToCartInput.innerHTML = `
            <span id="addToCartText" class="mr-2 text-green-500">Agregado</span>
            <button class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                onclick="addToCart()">+</button>
        `;
            addToCartInput.style.animation = 'addedAnimation 1s';

            // Puedes ajustar el tiempo de la animación y restaurar el estado del botón después
            setTimeout(() => {
                addToCartInput.innerHTML = `
                <input id="quantityInput" type="number"
                    class="border border-gray-400 p-1 w-12 text-center" value="1" min="1">
                <button
                    class="bg-blue-500 text-white py-2 px-8 rounded-full focus:outline-none transition-all duration-300 transform hover:scale-105"
                    onclick="addToCart()">Agregar</button>
            `;
                addToCartInput.style.animation = '';
            }, 1000);
        }
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Bootstrap y jQuery scripts (asegúrate de incluir jQuery antes de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery -->

    <style>
        @keyframes addedAnimation {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }

            100% {
                transform: scale(1);
            }
        }

        /* Ajustes para las tarjetas de producto en el modal */
        .product-card {
            max-width: 300px;
            /* Ancho máximo de cada tarjeta de producto */
            margin: 0.9rem;
            /* Margen entre las tarjetas de producto */

        }

        /* Ajustes para el modal */
        #productModal .modal-dialog {
            max-width: 900px;
            /* Ancho máximo del modal */
        }
    </style>

</body>

</html>