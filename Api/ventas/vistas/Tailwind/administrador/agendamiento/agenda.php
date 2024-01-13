<?php
include("../../../Nav.php");
?>

<div id="dropdownNotification" class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700" aria-labelledby="dropdownNotificationButton">
    <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50 dark:bg-gray-800 dark:text-white mt-5">
        Notificationes
    </div>
    <div class="divide-y divide-gray-100 dark:divide-gray-700">
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
            <div class="flex-shrink-0">
                <img class="rounded-full w-11 h-11" src="https://i.pinimg.com/236x/ea/f6/68/eaf66863f41fa6f4bafa3c990147f83d.jpg" alt="Jese image">
                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                        <path d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                    </svg>
                </div>
            </div>
            <div class="w-full ps-3">
                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Yiliana Sanchez </span>: "hola, Quiero cancelar mi cita"</div>
                <div class="text-xs text-blue-600 dark:text-blue-500">Hace un momento!</div>
            </div>
        </a>
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
            <div class="flex-shrink-0">
                <img class="rounded-full w-11 h-11" src="https://i.pinimg.com/564x/ae/87/d6/ae87d67adec6d0eaadb4be3500e529b9.jpg" alt="Joseph image">
                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-gray-900 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z" />
                    </svg>
                </div>
            </div>
            <div class="w-full ps-3">
                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Elizabeth Alcatraz </span>: "hola, Quiero cancelar mi cita"</div>
                <div class="text-xs text-blue-600 dark:text-blue-500">Hace 10 minutos!</div>
            </div>
        </a>
        <a href="#" class="flex px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-700">
            <div class="flex-shrink-0">
                <img class="rounded-full w-11 h-11" src="https://i.pinimg.com/236x/8d/79/5d/8d795ddb0c16f2f4bef6f2f88ef32d0e.jpg" alt="Bonnie image">
                <div class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-gray-800">
                    <svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                        <path d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z" />
                    </svg>
                </div>
            </div>
            <div class="w-full ps-3">
                <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400"><span class="font-semibold text-gray-900 dark:text-white">Alma Marcela</span>: "hola, Quiero cancelar mi cita"</div>
                <div class="text-xs text-blue-600 dark:text-blue-500">Hace 44 minutos!</div>
            </div>
        </a>
    </div>
</div>

<br><br><br>
  <div class="text-center my-12 mb-2">
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
            class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Agendamiento</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Agenda</span>
        </div>
      </li>
    </ol>
  </div>

<div class="container">
         <a href="crear_agenda.php" class="btn btn-outline-primary mt-4"><i class="fa-solid fa-circle-plus"></i></a>
         <table id="tabla" class="table table-bordered table-striped text-center mt-1">
               <thead  style="background-color: #2b2929; color: white;">
                  <tr>
                     <th scope="col" style="text-align: center; vertical-align: middle;">ID</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">EMPLEADO</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">CLIENTE</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">TECNICA</th> 
                     <th scope="col" style="text-align: center; vertical-align: middle;">FECHA</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">ESTADO</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">ACCIONES</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>1</th>
                     <td>Jacke Montoya</td>
                     <td>Laura Martinez</td> 
                     <td>Uñas Permanentes</td>
                     <td>21/11/2023 13:20 pm</td>
                     <td>Terminada</td>
                     <td>

                           <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2 mr-2">
                                 <span class="sr-only"></span>
                                 <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                       <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                 </svg>
                              </button>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>2</th>
                     <td>Monica Sanchez</td>
                     <td>Esmeralda Ramirez</td> 
                     <td>Uñas Semi-Permanentes</td>
                     <td>21/07/2023 4:50 pm</td>
                     <td>Cancelada</td>
                     <td>
                     <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                           <span class="sr-only"></span>
                           <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                              <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                           </svg>
                        </button>
                     </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>3</th>
                     <td>Monica Sanchez</td>
                     <td>Perla Lopez</td> 
                     <td>Uñas Esculpidas</td>
                     <td>03/12/2023 2:30 pm</td>
                     <td>En proceso</td>
                     <td>
                           <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                              <span class="sr-only"></span>
                              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                 <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                           </button>
                     </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>4</th>
                     <td>Jacke Montoya</td>
                     <td>Karina Mau</td> 
                     <td>Uñas Acrilicos</td>
                     <td>09/12/2023 6:00 pm</td>
                     <td>En proceso</td>
                     <td>
                           <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                              <span class="sr-only"></span>
                              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                 <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                           </button>
                     </td>
                  </tr>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>5</th>
                     <td>Monica Sanchez</td>
                     <td>leonardo Arias</td> 
                     <td>unas sencillas</td>
                     <td>10/12/2023 6:00 pm</td>
                     <td>En proceso</td>
                     <td>
                           <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2">
                              <span class="sr-only"></span>
                              <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                 <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                              </svg>
                           </button>
                     </td>
                  </tr>
               </tbody>
         </table>
      </div>
   </div>

   <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 dark:divide-gray-600">
      <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 flex flex-col items-center" aria-labelledby="avatarButton">
         <li class="mb-3 border-t border-gray-300 dark:border-gray-600">
               <td>
                  <a type="submin" href="crear_proveedor.php" class="btn btn-outline-info"><i class="fa-solid fa-file-pen"></i></a>
               </td>
         </li>
         <li>
               <label class="relative inline-flex items-center mb-5 cursor-pointer">
                  <input type="checkbox" value="" class="sr-only peer" checked>
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:w-5 after:h-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
               </label>
         </li>
      </ul>
   </div>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script> 
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<script>
   $(document).ready(function () {
      $('#tabla').DataTable({
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
