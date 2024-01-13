<?php
include("../../../Nav.php");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Compras</title>
</head>
<body>
<br><br>
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
            class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Compras</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Compras</span>
        </div>
      </li>
    </ol>
  </div>
<div class="container mt-12">
         <a href="crear_compra.php" class="btn btn-outline-primary mt-4"><i class="fa-solid fa-circle-plus"></i></a>
         <table id="tabla" class="table table-bordered table-striped text-center mt-1">
               <thead  style="background-color: #2b2929; color: white;">
                  <tr>
                  <th scope="col" style="text-align: center; vertical-align: middle;">ID</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">PROVEEDOR</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">EMPRESA</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">TELEFONO</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">CORREO</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">FECHA COMPRA</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">TOTAL</th>
                  <th scope="col" style="text-align: center; vertical-align: middle;">ESTADO</th>
                     <th scope="col" style="text-align: center; vertical-align: middle;">ACCIONES</th>
                  </tr>
               </thead>
               <tbody>
                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>1</th>
                     <td>Yurani Echeverri</td>
                     <td>Nivea</td>
                     <td>3044471789</td>
                     <td>maryo2005@gmail.com</td>
                     <td>2023-09-30 10:55:00</td> 
                     <td>340000</td>
                     <td>En proceso</td>
                     <td>

                           <button data-dropdown-toggle="userDropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-base p-2 mr-2">
                                 <span class="sr-only"></span>
                                 <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                                       <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                                 </svg>
                              </button>

                  <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                     <th>2</th>
                     <td>Johan Martinez</td>
                     <td>Margaritas</td>
                     <td>3230471789</td>
                     <td>Johan@gmail.com</td>
                     <td>2023-02-14 21:00:00</td> 
                     <td>90000</td>
                     <td>Terminada</td>
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
                     <td>Emerson Vargas</td>
                     <td>Nivea</td>
                     <td>3045471789</td>
                     <td>emerson@gmail.com</td>
                     <td>2024-06-08 12:10:00</td> 
                     <td>220000</td>
                     <td>Cancelado</td>
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
                     <td>Eduardo Mosquera</td>
                     <td>Nike</td>
                     <td>3044474567</td>
                     <td>eduardo@gmail.com</td>
                     <td>2023-11-22 18:20:00</td> 
                     <td>34000</td>
                     <td>Terminada</td>
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
                     <td>Leonardo Arias</td>
                     <td>Nivea</td>
                     <td>3056771789</td>
                     <td>maryo2005@gmail.com</td>
                     <td>2024-04-05 08:30:00</td> 
                     <td>120000</td>
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
                  <a type="submin" href="crear_compra.php" class="btn btn-outline-info" ><i class="fa-solid fa-file-pen"></i></a>
               </td>
         </li>


         <li class="mb-3 border-t border-gray-300 dark:border-gray-600">
            <td>
               <a class="btn btn-outline-info"><i class="fa-solid fa-eye"></i></a>
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
                  lengthMenu: "Agrupar de _MENU_ registros de compras",
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

// function confirmar_eliminar(){
//     Swal.fire({
//       title: 'Esta seguro de eliminar el registro ?',
//       text: "Si lo eliminas no podrás restablecerlo",
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Si, Borrar'
//     }).then((result) => {
//       if (result.isConfirmed) {
//         return Swal.fire({
//           position: 'center',
//           icon: 'success',
//           title: 'Borrado correctamente',
//           showConfirmButton: false,
//           timer: 1500
//         }).then(() => {
//           // Redirige al usuario después del mensaje de éxito
//         });
//       }
//     });
//     }
</script>
</body>
</html>