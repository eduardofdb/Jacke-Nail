<?php
include("../../../Nav.php");
  ?>
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

    <title>Crear Compra</title>
</head>
<body>
<br><br><br><br><br>
<div class="container">
  <section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 formulario-container">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-sm xl:p-0 dark:bg-gray-800 dark:border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center"> Formulario de Compra</h1>
          <form class="space-y-4 md:space-y-6" action="compras.php">
              <div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seeccionar proveedor:</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="Yurani Echeverri">Yurani Echeverri</option>
                  <option value="Eduardo Mosque">Eduardo Mosque</option>
                  <option value="Emerson Vargas">Emerson Vargas</option>
                  <option value="Leonardo Arias">Leonardo Arias</option>
                </select>
                </div>
                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha de la compra:</label>
                      <input type="date" min="01-01-2023" max="14-11-2023" name="service" id="service"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese correo electronico" required>
                  </div>
                  
                <div id="productos">
                  <div>
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto comprado:</label>
                    <input type="text" name="service" id="nombre"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre del producto" required>
                  </div>

                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad:</label>
                      <input type="number" name="service" id="cantidad"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese la cantidad" required>
                  </div>

                  <div>
                      <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total:</label>
                      <input type="number" name="service" id="total"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el precio unitario" required>
                  </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" id="agregarProducto" class="btn btn-outline-success"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.994 19a8.999 8.999 0 1 1 3.53-17.281M5.995 9l4 4 7-8m-1 8v5m-2.5-2.5h5"/></svg></button>
                    <a type="submin" href="compras.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</a>
                    <a type="submin" href="compras.php" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Cancelar</a>
                </div>
            </form>
         </div>
      </div>
    </div>
</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function() {
    const productosContainer = document.getElementById("productos");
    const agregarProductoBtn = document.getElementById("agregarProducto");

    agregarProductoBtn.addEventListener("click", function() {
      const nuevoProducto = document.createElement("div");
      nuevoProducto.innerHTML = `
        <div class="producto">
          <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto comprado:</label>
            <input type="text" name="service" id="nombre"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre del producto" required>
          </div>

          <div>
            <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cantidad:</label>
            <input type="number" name="service" id="cantidad"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese la cantidad" required>
          </div>

          <div>
            <label for="service" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total:</label>
            <input type="number" name="service" id="total"  class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el precio unitario" required>
          </div>
        </div>
      `;
      productosContainer.appendChild(nuevoProducto);
    });
    document.getElementById("create").addEventListener("change", calcularTotales);
  });
</script>
</body>
</html>