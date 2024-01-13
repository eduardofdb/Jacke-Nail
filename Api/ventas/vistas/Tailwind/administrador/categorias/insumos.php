<?php
include("../../../Nav.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>Insumoss de insumos</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .formulario-conteiner {
            max-width: 600px;


        }
    </style>
</head>

<body>
    <br><br><br>
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
                        class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Insumos</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Insumoss de
                        insumos</span>
                </div>
            </li>
        </ol>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <div>
                    </div>
                    <div class="card-body">
                        <section class="bg-gray-50 dark:bg-gray-900">
                            <div
                                class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 formulario-conteiner">
                                <div
                                    class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                                    <div class="border-2 border-blue-300 rounded-lg p-8 space-y-6 sm:p-8">
                                        <h1
                                            class="flex justify-center text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white py-2">
                                            Registrar Insumos
                                        </h1>
                                        <form class="space-y-6" action="#">
                                            <!-- Primera fila -->
                                            <div class="flex space-x-4">
                                                <div class="flex-1 mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="file_input">
                                                        Imagen de la Insumos</label>
                                                    <input
                                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                        id="file_input" type="file">
                                                </div>
                                            </div>
                                            <div class="flex space-x-4">
                                                <div class="flex-1 mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="name">Nombre del Insumo</label>
                                                    <input type="text" name="name" id="name"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Nombre del Insumo" required="">
                                                </div>
                                                <div class="flex-1 mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="quantity">Cantidad</label>
                                                    <input type="number" name="quantity" id="quantity"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="Cantidad" required="">

                                                </div>
                                            </div>
                                            <!-- Segunda fila -->
                                            <div class="flex space-x-4">
                                                <!-- Estado -->
                                                <div class="flex-1 mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="status">Estado</label>
                                                    <button type="button"
                                                        class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Estado</button>

                                                </div>

                                                <!-- Categoría -->
                                                <div class="flex-1 mb-4">
                                                    <label
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                                        for="category">Categoría</label>
                                                    <select id="category" name="category"
                                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                                        <!-- Opciones de categoría aquí -->
                                                        <option value="Insumos1">Limas</option>
                                                        <option value="Insumos2">Esmaltes</option>
                                                        <option value="Insumos3">herramientas</option>
                                                    </select>
                                                </div>


                                            </div>
                                            <!-- Botón de guardar -->
                                            <div class="flex justify-center">
                                                <button type="button"
                                                    class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <br>
                <div class="table-responsive">
                    <table id="tabla" class=" table table-bordered border-black table-striped text-center mt-1 ">
                        <thead style="background-color: #2b2929; color: white;">
                            <tr>
                                <th scope="col" style="text-align: center; vertical-align: middle;">ID</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">IMAGEN</th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">NOMBRE Insumo
                                </th>
                                <th scope="col" style="text-align: center; vertical-align: middle;">cantidad</th>

                                <th scope="col" style="text-align: center; vertical-align: middle;">Estado</th>

                                <th scope="col" style="text-align: center; vertical-align: middle;">ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-center">
                                    <img width="50"
                                        src="https://http2.mlstatic.com/D_NQ_NP_994578-MCO70192912253_062023-O.webp"
                                        class="mx-auto img-fluid rounded" />
                                </td>

                                <td>Paquetes de limas</td>
                                <td>3456544</td>
                                <td><button type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Activo</button>
                                </td>

                                <td>
                                    <button data-dropdown-toggle="userDropdown"
                                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                                        <span class="sr-only"></span>
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td class="text-center">
                                    <img width="50"
                                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAgH4Tmiw3ryPc8ORyjkYCmL-nRLXZOeh5Xg&usqp=CAU"
                                        class="mx-auto img-fluid rounded" />
                                </td>

                                <td>Paquete de Corta uñas </td>
                                <td>3456544</td>
                                <td><button type="button"
                                        class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Abierto</button>
                                </td>
                                <td>
                                    <button data-dropdown-toggle="userDropdown"
                                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                                        <span class="sr-only"></span>
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td class="text-center">
                                    <img width="50"
                                        src="https://http2.mlstatic.com/D_NQ_NP_754735-MCO48098657362_112021-O.webp"
                                        class="mx-auto img-fluid rounded" />
                                </td>

                                <td>Esmaltes Clasico</td>
                                <td>3456544</td>
                                <td><button type="button"
                                        class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 ">Activo</button>
                                </td>

                                <td>
                                    <button data-dropdown-toggle="userDropdown"
                                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                                        <span class="sr-only"></span>
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td class="text-center">
                                    <img width="50"
                                        src="https://http2.mlstatic.com/D_NQ_NP_674482-MLC53167010414_012023-V.webp"
                                        class="mx-auto img-fluid rounded" />
                                </td>

                                <td>Secador de Esmaltes</td>
                                <td>3456544</td>
                                <td><button type="button"
                                        class="text-white bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Inactivo</button>
                                </td>

                                <td>
                                    <button data-dropdown-toggle="userDropdown"
                                        class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                                        <span class="sr-only"></span>
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="userDropdown"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 flex flex-col items-center"
            aria-labelledby="avatarButton">
            <li class="mb-3 border-t border-gray-300 dark:border-gray-600">
                <td>
                    <a class="btn btn-outline-info"><i class="fa-solid fa-file-pen"></i></a>
                </td>
            </li>
            <li>
                <label class="relative inline-flex items-center mb-5 cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer" checked>
                    <div
                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                    </div>
                </label>
            </li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>


    <script>
        $(document).ready(function () {
            $('#tabla').DataTable({
                language: {
                    processing: "Tratamiento en curso...",
                    search: "Buscar&nbsp;:",
                    lengthMenu: "Agrupar de _MENU_ Insumoss",
                    info: "",
                    infoEmpty: "No existen datos.",
                    infoFiltered: "(filtrado de _MAX_ elementos en total)",
                    infoPostFix: "",
                    loadingRecords: "Cargando...",
                    zeroRecords: "No se encontraron datos con tu busqueda",
                    emptyTable: "No hay datos disponibles en la tabla.",
                    paginate: {
                        first: "Primero",
                        previous: "Anterior",
                        next: "Siguiente",
                        last: "Ultimo"
                    },
                    aria: {
                        sortAscending: ": active para ordenar la columna en orden ascendente",
                        sortDescending: ": active para ordenar la columna en orden descendente"
                    }
                },
                scrollY: 'auto', // Cambiado a valor dinámico
                lengthMenu: [[5, 8, 10, 25, -1], [5, 8, 10, 25, "All"]],
                order: [[0, 'asc']] // Cambiado a ordenar por la primera columna de forma ascendente
            });
        });

        //   function confirmar_eliminar(){
        // Swal.fire({
        //   title: 'Esta seguro de eliminar el registro ?',
        //   text: "Si lo eliminas no podrás restablecerlo",
        //   icon: 'warning',
        //   showCancelButton: true,
        //   confirmButtonColor: '#3085d6',
        //   cancelButtonColor: '#d33',
        //   confirmButtonText: 'Si, Borrar'
        // }).then((result) => {
        //   if (result.isConfirmed) {
        //     return Swal.fire({
        //       position: 'center',
        //       icon: 'success',
        //       title: 'Borrado correctamente',
        //       showConfirmButton: false,
        //       timer: 1500
        //     }).then(() => {
        //       // Redirige al usuario después del mensaje de éxito
        //     });
        //   }
        // });
        // }
    </script>
</body>

</html>