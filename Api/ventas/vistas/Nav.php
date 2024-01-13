<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Enlaces a las bibliotecas -->
    <!------ CDN DataTables-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css"
    />

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
    <nav class="fixed top-0 z-50 w-full bg-gray-200 border-2 border-gray-700">
      <div class=" px-3 py-3 lg:px-5 lg:pl-3">
        <div class=" flex items-center justify-between">
          <div class="flex items-center justify-start">
            <a href="#" class="flex ml-2 md:mr-24">
              <img src="../../../Jacke.png" class="w-10 h-10 rounded-full" type="button"
              data-drawer-target="drawer-navigation"
              data-drawer-show="drawer-navigation" />
              <span
                class="text-black focus:ring-4 font-medium rounded-lg text-sm px-5 py-2.5 mr-2"
                aria-controls="drawer-navigation self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white"
                >Jacke Nail</span
              >
            </a>
          </div>
          
          <div class="flex items-center">
              <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification" class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400" type="button">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 14 20">
                <path d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z"/>
                </svg>

                <div class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900"></div>
                </button>
            <div class="flex items-center ml-3">
              <div class="cursor-pointer">
                <i class='bx bx-user-circle' undefined data-dropdown-toggle="dropdown-user" ></i>
              </div>
              <div
                class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown-user"
              >
                <div class="px-4 py-3" role="none">
                  <p class="text-sm text-gray-900 dark:text-white" role="none">
                    Johan Martínez
                  </p>
                  <p
                    class="text-sm font-medium text-gray-900 truncate dark:text-gray-300"
                    role="none"
                  >
                    Johan@gmail.com
                  </p>
                </div>
                <ul class="py-1" role="none">
                  <li >
                    <a
                      href="#"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-red-600 dark:hover:text-white"
                      role="menuitem"
                      >Perfil</a
                    >
                  </li>

                  <li>
                    <a
                      href="../../../index.php"
                      class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                      role="menuitem"
                      >Cerrar sesión</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div
      id="drawer-navigation"
      class="border-2 border-gray-700 fixed left-0 z-40 w-64 h-screen p-6 overflow-y-auto transition-transform -translate-x-full bg-gray-100 dark:bg-gray-800"
      tabindex="-1"
      aria-labelledby="drawer-navigation-label"
    >
      <br /><br /><br />

      <div class="py-2 overflow-y-auto">
        <ul class="space-y-2 font-medium">
          <li>
            <p class="text-center">
              <i class="bx bx-user" style="color: black"></i> Administrador
            </p>
          </li>

          
          <br /><br />
          <li>
             <a
            
            id="dropdownDefaultButton"
          data-dropdown-toggle="dropdown"
          class="cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"          >
          <i class="bx bx-cog" style="color: black"></i> Configuración
          
        
            </a>

          <!-- Dropdown menu -->
          <div
            id="dropdown"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >
              <li>
                <a
                  href="#"
                  class=" block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Roles</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Permisos</a
                >
              </li>
              
            </ul>
          </div>

            </a>
        
          </li>
          <li>
            <a
            
            id="dropdownDefaultButton"
          data-dropdown-toggle="dropdown-usuarios"
          class=" cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"          >
          <i class="bx bx-user" style="color: black"></i>      Usuarios
          
        
            </a>

          <!-- Dropdown menu -->
          <div
            id="dropdown-usuarios"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >
              <li>
                <a
                  href="../../administrador/usuarios/Admin.php"
                  class=" block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Administrador</a
                >
              </li>
              <li>
                <a
                  href="../../administrador/usuarios/Empleados.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Empleados</a
                >
              </li>
              <li>
                <a
                  href="../../administrador/usuarios/Clientes.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Clientes</a
                >
              </li>
              
            </ul>
          </div>

            </a>
          </li>
          <li>
            <a
             
              id="dropdownDefaultButton"
            data-dropdown-toggle="dropdown-agendamiento"
              class=" cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"
            >
              <i class="bx bx-calendar" style="color: black"></i>
              <span class="flex-1 ml-3 whitespace-nowrap">Agendamiento</span>
            </a>
            <div
            id="dropdown-agendamiento"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >
              <li>
                <a
                  href="../../administrador/agendamiento/agenda.php"
                  class=" block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Agenda</a
                >
              </li>
              <li>
                <a
                  href="../../administrador/Servicios/Servicios.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Servicios</a
                >
              </li>
            
            </ul>
          </div>
          </li>
          <li>
            <a
              
              id="dropdownDefaultButton"
            data-dropdown-toggle="dropdown-compras"
              class="cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"
            >
              <i class="bx bx-shopping-bag" style="color: black"></i>
              <span class="flex-1 ml-3 whitespace-nowrap">Compras</span>
            </a>
            <div
            id="dropdown-compras"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >
              <li>
                <a
                  href="../compras/compras.php"
                  class=" block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Compras</a
                >
              </li>
              <li>
                <a
                  href="../proveedores/proveedores.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Proveedores</a
                >
              </li>
              
              
            </ul>
          </div>
          </li>
          <li>
            <a
              id="dropdownDefaultButton"
            data-dropdown-toggle="dropdown-productos"
              class="cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"
            >
              <i class="bx bx-purchase-tag" style="color: black"></i>
              <span class="flex-1 ml-3 whitespace-nowrap">Insumos</span>
            </a>
            <div
            id="dropdown-productos"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >

              <li>
                <a
                  href="../../administrador/categorias/insumos.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Insumos</a
                >
              </li>
              
              <li>
                <a
                  href="../../administrador/categorias/categorias.php"
                  class="block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                  >Categorias</a
                >
              </li>
            </ul>
          </div>
          </li>
          <li>
            <a  
              id="dropdownDefaultButton"
            data-dropdown-toggle="dropdown-ventas"
              class="cursor-pointer border-2 border-red-300 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group"
            >
              <i class="bx bx-cart-alt" style="color: black"></i>
              <span class="flex-1 ml-3 whitespace-nowrap">Ventas</span>
            </a>
            <div
            id="dropdown-ventas"
            class="border-2 border-gray-700 hidden bg-white hover:bg-gray-200 divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700"
          >
            <ul
              class=" text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownDefaultButton"
            >
            <li>
              <a
                href="../../administrador/ventas/Ventas.php"
                class=" block px-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                >Ventas</a
              >
            </li>  
            </ul>
          </div>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
