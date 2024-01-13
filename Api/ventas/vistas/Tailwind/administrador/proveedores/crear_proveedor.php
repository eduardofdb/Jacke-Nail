<?php
include("../../../Nav.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
    .formulario-container {
        
        max-width: 700px; /* Ajusta el valor según tus necesidades */
        width: 100%;
        margin: 0 auto;
}

 </style>   

    <title>Formulario de proveedor</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 formulario-container">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-sm xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center"> Nuevo proveedor</h1>
          <form class="space-y-4 md:space-y-6" action="#">
                  <div>
                      <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre del proveedor:</label>
                      <input type="text" name="nombre" id="nombre" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese nombre del proveedor" required>
                  </div>
                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo electronico:</label>
                      <input type="text" name="service" id="service"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese correo electronico" required>
                  </div>

                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Direccion:</label>
                      <input type="text" name="service" id="service"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese direccion de la empresa" required>
                  </div>

                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefono:</label>
                      <input type="text" name="service" id="service"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese numero de telefono" required>
                  </div>

                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Empresa::</label>
                      <input type="text" name="service" id="service"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese nombre del la empresa" required>
                  </div>
             
                <div class="flex justify-center">
                    <a type="submin" href="proveedores.php"class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Guardar</a>
                    <a type="submin" href="proveedores.php" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancelar</a>
                </div>
            </form>
         </div>
      </div>
    </div>
</section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
</body>
</html>