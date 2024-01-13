<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
      
        <!-- Enlaces a las bibliotecas -->
        <!------ CDN DataTables-->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
      
        <title>Document</title>
      </head>
<body class="bg-gray-100">
  
    <style>
        h1  {
            font-family: cursive;
        }
    </style>
    
    
        <div class=" container mx-auto my-auto p-4 flex flex-col items-center justify-center ">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-8 h-8 mr-2" src="Jacke.png" alt="logo">
                Jacke Nail    
            </a>
            <div class="border-2 border-solid border-gray-700 mx-auto my-auto p-8 bg-red-100 rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-8 space-y-4 md:space-y-6 sm:p-8 bg-red-100">
                    <h1 class=" mb-8 text-center text-l font-cursive leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                       Iniciar sesión
                    </h1>
                    <form class="flex flex-col items-center space-y-6 md:space-y-8 p-1" action="#">
                        <div class="relative ">
                            <input type="email" id="email" class="block mx-8 px-2.5 pb-2.5 pt-4 w-full lg:w-96 text-sm text-gray-900 bg-white rounded-lg border-1 border-solid border-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                                Correo electrónico</label>
                        </div>
                    
                        <div class="relative">
                            <input type="password" id="password" class="block px-2.5 pb-2.5 pt-4 w-full lg:w-96 text-sm text-gray-900 bg-white rounded-lg border-1 border-gray-900 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_outlined" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto start-1">
                                Contraseña</label>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="m-4 items-start">
                                <a href="#" class="-sm font-medium text-primary-600 hover:underline dark:text-primary-500">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="flex items-center justify-center">
                                <a href="Tailwind/administrador/usuarios/Admin.php" type="button" class="text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Iniciar sesión</a>
                            </div>
                        </div>
                        <div class="m-3 flex items-center justify-center">
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                ¿No tienes una cuenta? <a href="Registro.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">¡Regístrate!</a>
                            </p>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>
      
<?php 
include('Footer.php')
?>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</html>