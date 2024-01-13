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

  <title>Document</title>
</head>

<body>

<?php
include("../../../Nav.php");
  ?>

  <br><br><br>
  <div class="text-center my-12 mt-12">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
      <li class="inline-flex items-center">
        <a href="#"
          class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
          <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
              d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
          </svg>
          Inicio
        </a>
      </li>
      <li>
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <a
            class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Usuarios</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Administrador</span>
        </div>
      </li>
    </ol>
  </div>

<div class="container">
  <div class="relative  mx-4 my-12">
    <div class="relative shadow-md sm:rounded-lg">
      <table id="usuarios" class="table table-bordered table-striped text-center mt-1">
        <thead style="background-color: #2b2929; color: white;">
          <tr>
            <th scope="col" style="text-align: center; vertical-align: middle;">ID</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Nombre</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Apellido</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Documento</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Correo</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Telefono</th>
            <th scope="col" style="text-align: center; vertical-align: middle;">Rol</th>
            <th scope="col" style="text-align: center; vertical-align: middle;"> <a class="cursor-pointer" data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"><i class='bx bx-user-plus' ></i></a> Acciones </th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
            <td>1</td>
            <td>Johan</td>
            <td>Martinez</td>
            <td>123021165</td>
            <td>Johan@gmail.com</td>
            <td>302165145</td>
            <td>Admin</td>
            <td>
              <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <i class='bx bx-dots-horizontal-rounded' undefined></i>
              </button>

              <!-- Dropdown menu -->
              <div id="dropdownDotsHorizontal"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                  aria-labelledby="dropdownMenuIconHorizontalButton">
                  
  <li class="flex justify-between items-center">
    <span class="flex items-center">Editar</span>
    <a href="#" class="mr-8"><i class='bx bx-edit-alt' style='color:rgba(0, 136, 255, 0.6)'></i></a>
  </li>
  <br>
  <li class="flex justify-between items-center">
    <span class="flex items-center">Estado</span>
    <label class="relative inline-flex items-center cursor-pointer">
      <input type="checkbox" value="" class="sr-only peer">
      <div class=" mr-6 w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
      </div>
    </label>
  </li>
</ul>

              
</div>
</td>
</tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
            <td>2</td>
            <td>eduardo </td>
            <td>Mosquera</td>
            <td>1002321654</td>
            <td>Eduardo@gmail.com</td>
            <td>302315649</td>
            <td>Admin</td>
            <td>
            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <i class='bx bx-dots-horizontal-rounded' undefined></i>
              </button>

            </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
            <td>3</td>
            <td>Emerson </td>
            <td>Vargas</td>
            <td>13202546</td>
            <td>Emerson@gmail.com</td>
            <td>304515649</td>
            <td>Admin</td>
            <td>
            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <i class='bx bx-dots-horizontal-rounded' undefined></i>
              </button>

            </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
            <td>4</td>
            <td>Luciana </td>
            <td>Rodriguez</td>
            <td>1005421654</td>
            <td>Lucia@gmail.com</td>
            <td>302165489</td>
            <td>Admin</td>
            <td>
              <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <i class='bx bx-dots-horizontal-rounded' undefined></i>
              </button>


            </td>
          </tr>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
            <td>5</td>
            <td>yurani </td>
            <td>echeverri</td>
            <td>1002321654</td>
            <td>Yur@gmail.com</td>
            <td>302315649</td>
            <td>Admin</td>
            <td>
            <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                type="button">
                <i class='bx bx-dots-horizontal-rounded' undefined></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>

  <div id="crud-modal" tabindex="-1" aria-hidden="true"
      class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg border-2 border-rose-900 shadow-rose dark:bg-gray-700">
          <!-- Modal header -->
          <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
              Crear nuevo usuario
            </h3>
            <button type="button"
              class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
              data-modal-toggle="crud-modal">
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
              </svg>
              <span class="sr-only">Cerrar </span>
            </button>
          </div>
          <!-- Modal body -->
          <form action="#" class="p-4 md:p-5 grid grid-cols-2 gap-4">
            <div class="col-span-2">

            </div>
            <div>
            <label for="category"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
                <input type="number" name="customer" id="customer"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="administrador" required disabled>
            </div>
            <div>
              <label for="customer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento: </label>
              <input type="number" name="customer" id="customer"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el documento" required="">
            </div>
            <div>
            <label for="employee"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre: </label>
              <input type="text" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el nombre" required="">
            </div>
            <div>
            <label for="employee"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido: </label>
              <input type="text" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el apellido" required="">
            </div>
            <div>
            <label for="employee"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo: </label>
              <input type="email" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el correo" required="">
            </div>

            <div>
            <label for="employee"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">telefono: </label>
              <input type="number" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el telefono" required="">
            </div>
            <div>
            <label for="employee"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contraseña: </label>
              <input type="password" name="employee" id="employee"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese la contraseña" required="">
            </div>
            <div class="col-span-2">
              <button type="submit"
                class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                
                Crear usuario
              </button>

              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                data-modal-toggle="crud-modal">

                <span class="sr-only">Cerrar modal</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
   $(document).ready(function () {
      $('#usuarios').DataTable({
           language: {
                  processing: "Tratamiento en curso...",
                  search: "Buscar&nbsp;:",
                  lengthMenu: "Agrupar de _MENU_ registros de proveedores",
                  info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
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

</script>
</body>
</html>