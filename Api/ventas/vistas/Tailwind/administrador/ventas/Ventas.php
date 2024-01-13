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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link href="s.css" rel="stylesheet" />

  <title>Document</title>
</head>

<body>
  <style>
    .bx {
      font-size: 28px;
    }

    nav a {
      color: black;
      text-decoration: none;
      font-family: cursive;
      font-size: 60px;
    }

    nav a:hover {
      color: black;
    }

    #drawer-navigation a {
      text-decoration: none;
    }
  </style>
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
            class="cursor-pointer ms-1 text-sm font-medium text-gray-700  md:ms-2 dark:text-gray-400 dark:hover:text-white">Ventas</a>
        </div>
      </li>
      <li aria-current="page">
        <div class="flex items-center">
          <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 9 4-4-4-4" />
          </svg>
          <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Ventas</span>
        </div>
      </li>
    </ol>
  </div>


  <div class="container" style="max-width: 92%;">
    <div class="relative  mx-4 my-4">
      <div class="relative shadow-md sm:rounded-lg">
        <table id="ventas" class="table table-bordered table-striped text-center mt-1">
          <thead style="background-color: #2b2929; color: white;">
            <tr>
              <th scope="col" style="text-align: center; vertical-align: middle;">ID</th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Cliente </th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Servicio</th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Empleado</th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Hora</th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Categoria</th>
              <th scope="col" style="text-align: center; vertical-align: middle;">Acciones
                <a   href="../../administrador/ventas/agregar.php"  type="button">
                  <i class=" mx-2 bx bx-cart-alt" style="color: blue"></i>
                </a>
              </th>
            </tr>
          </thead>

          <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">1</td>
              <td class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full"
                  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7tKeHrvh8kSk6K4_AeawHmiyCpYL8qT101A&usqp=CAU"
                  alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Johan stiven martine</div>
                  <div class="font-normal text-gray-500">Johanmartinez@gmai.com</div>
                </div>
              </td>



              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRy-hUalgvzknq62APka-dSCc4x-nQi0QKUQ&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Servicio Name</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>

              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQERHeC0VaUZvz_DZPyuorNpiubXkdYt-HOQw&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Acrilicas</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 text-center">
                12/11/2023 4:30 pm
              </td>

              <td class="px-6 py-4">
                Manicura francesa
              </td>
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
                        <div
                          class=" mr-6 w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                      </label>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>



            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">1</td>
              <td class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full"
                  src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBUQEBIVFRUVFxYVFhcWFRYWFRUYGBUWFx4XGhUYHSggGBolHRgYITEhJikrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQGy0lICYtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAQUGBwIDBAj/xABREAACAQMBBAcFAwYKBgkFAAABAgMABBEFBhIhMQcTQVFhcYEUIjJSkTNCoSNicpKxwTRDY3OCorLD0fAVFlOTs/EkNXSDo7TC0uEIFyVUVf/EABoBAAIDAQEAAAAAAAAAAAAAAAABAgMEBQb/xAA1EQACAQIEAggGAgEFAQAAAAAAAQIDEQQSITFBUQUTImFxgZGxMjOhwdHwQuEUJFNygvEj/9oADAMBAAIRAxEAPwC12gU9lYeyrXTRXAdCk3dxXoYbGlYVHZWysqKnGEY/CrDEoooqQBRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAla5IQeyttFRlCMlaSuBwSW5HLjXOadjWmaAHzrm1uj09afoVuHI4aWkdcHBpK5TTWjK9haKSkzSC5lRWOaKAuO9FFFeqNAUUUUAFFFFABRRWu4mVEZ3OFUFicE4AGScDieFAGyiuPTNUguE6y3lSVPmRgwB7jjkfA1102rbjasZUlcmoalBAu/cTRxL3yOqA+W8RmttpcpKiyROrowyrKQVYd4I5iiztcLG6iiikIKKKKACiiigAooooAKKKKAFrGlooA57mHIyOdcBGOBp2rVPAG86wYvB9Z24b+5CUL6jdS0OpBwaK47TWjKNgooopDHaiiivUGkKKSigBaKKKACkNa7h2VGKLvsASFyF3j3bx4DzqAnpKkSZ4ZtNmRk4ugljaUL8wjIG
                +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"
                  alt="Jese image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Eduardo moquera</div>
                  <div class="font-normal text-gray-500">Eduardo@gmail.com</div>
                </div>
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQERHeC0VaUZvz_DZPyuorNpiubXkdYt-HOQw&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Acrilicas</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>

              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQERHeC0VaUZvz_DZPyuorNpiubXkdYt-HOQw&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Acrilicas</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4">
                10/10/2023 2:40 pm
              </td>
              <td class="px-6 py-4">
                Manicure nail art
              </td>
              <td>
                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                  type="button">
                  <i class='bx bx-dots-horizontal-rounded' undefined></i>
                </button>
              </td>
            </tr>

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="px-6 py-4">1</td>

              <td class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full"
                  src="data:image/png;base64,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"
                  alt="Cliente image">
                <div class="ps-3">
                  <div class="text-base font-semibold">Emerson vargas</div>
                  <div class="font-normal text-gray-500">emerson33@gmail.com</div>
                </div>
              </td>

              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRy-hUalgvzknq62APka-dSCc4x-nQi0QKUQ&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Servicio Name</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>

              <td class="px-6 py-4">
                <div class="flex items-center">
                  <img class="w-10 h-10 rounded-full"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQERHeC0VaUZvz_DZPyuorNpiubXkdYt-HOQw&usqp=CAU"
                    alt="Servicio image" style="vertical-align: top;">
                  <div class="ps-3" style="vertical-align: top;">
                    <div class="text-base font-semibold">Acrilicas</div>
                    <div class="font-normal text-gray-500">Descripción del servicio</div>
                  </div>
                </div>
              </td>

              <td class="px-6 py-4">
                11/10/2023 1:30 pm
              </td>

              <td class="px-6 py-4">
                Limas
              </td>
              <td>
                <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal"
                  class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                  type="button">
                  <i class='bx bx-dots-horizontal-rounded' undefined></i>
                </button>
      </div>
      </td>
      </tr>
      </tbody>
      </table>
    </div>
  </div>


  <style>
    .bx {
      font-size: 28px;
    }

    a {
      color: black;
      text-decoration: none;
      font-family: cursive;

    }

    footer a:hover {
      color: black;
    }
  </style>


  <script>
    $(document).ready(function () {
      $('#ventas').DataTable({
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


  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>