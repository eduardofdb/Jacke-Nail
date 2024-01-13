<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900 fixed w-full z-10">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="index.html" class="flex items-center">
                <img src="img/Logo.png" class="h-12 mr-3" alt="jacke nail" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white mr-2">Jacke
                    nail</span>
            </a>
            <div class="flex items-center md:order-3">
                        <a   href="../agendamiento/index.html"  type="submit" class="flex mr-4 text-sm bg-gray-300 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-200" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Agendamiento</span>
                    </a>
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Contacto</span>
                    
                </button>

                <img class="w-10 h-9 rounded-full" src="https://us.123rf.com/450wm/zodchiy/zodchiy1711/zodchiy171100020/90424942-vector-icono-de-notificaci%C3%B3n.jpg?ver=6" alt="user photo">
                <img class="w-8 h-8 rounded-full"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtRs_rWILOMx5-v3aXwJu7LWUhnPceiKvvDg&usqp=CAU"
                alt="user photo">
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Eduardo mosquera palacios</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">Eduardomoquera@gmail.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fas fa-cog mr-2"></i> ajustes</a>
                        </li>

                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                <i class="fas fa-sign-out-alt mr-2"></i> Cerrar Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex items-center ">
                <form class="flex items-center mr-2"> <!-- Ajuste del margen -->
                    <label for="simple-search" class="sr-only">Buscar servicios</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                            </svg>
                        </div>
                        <input type="text" id="simple-search"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 pr-20 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Buscar servicios..." required>
                    </div>


                    <button type="submit"
                        class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Buscar</span>
                    </button>
                </form>
            </div>
            <a href="#"
                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2         text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white mt-4">Agendamiento</a>
            <a href="#"
                class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white mt-4">Contacto</a>
        </div>
    </nav>
   




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
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 pt-auto ">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="#" class="flex items-center mb-4 sm:mb-0 space-x-3 ">
                <img src="img/Logo.png" class="h-8" alt="Jacke Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Jacke Nail</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"><i class='bx bxl-whatsapp' style='color:#08aa2b'  ></i></a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"> <i class='bx bxl-facebook-circle' style='color:#001cff' ></i></a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6"><i class='bx bxl-instagram' style='color:rgba(245,2,144,0.64)'  ></i></a>
                </li>
                
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Jacke Nail</a>. Todos los derechos reservados.</span>
    </div>
</footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>