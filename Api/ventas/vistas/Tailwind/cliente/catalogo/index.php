

<!DOCTYPE html>
<html>

<head>
    <!-- Agrega el enlace al archivo CSS de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    rel="stylesheet"
  />
    <!-- Agrega el enlace al archivo CSS de FontAwesome para los iconos -->
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
                
                    <!-- Primer botón -->
                    <a   href="../agendamiento/index.html"  type="submit" class="flex mr-4 text-sm bg-gray-300 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-200" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Agendamiento</span>
                    </a>
                <!-- Segundo botón -->
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
    <section class="section-features floubite-section">
        <div class="floubite-container">
            <div class="floubite-row">
                <div class="floubite-col-md-4">
                    <div class="feature-item text-center floubite-card">
                        <i class="fas fa-hand-sparkles floubite-icon"></i>
                        <h3 class="feature-item__title floubite-heading">Manicura</h3>
                        <p class="feature-item__text floubite-paragraph">Descubre los mejores productos y técnicas para
                            lograr una manicura perfecta en casa.</p>
                    </div>
                </div>
                <div class="floubite-col-md-4">
                    <div class="feature-item text-center floubite-card">
                        <i class="fas fa-paint-brush floubite-icon"></i>
                        <h3 class="feature-item__title floubite-heading">Diseños Creativos</h3>
                        <p class="feature-item__text floubite-paragraph">Inspírate con una variedad de diseños de uñas
                            creativos y aprende cómo crearlos tú misma.</p>
                    </div>
                </div>
                <div class="floubite-col-md-4">
                    <div class="feature-item text-center floubite-card">
                        <i class="fas fa-leaf floubite-icon"></i>
                        <h3 class="feature-item__title floubite-heading">Cuidado de Uñas</h3>
                        <p class="feature-item__text floubite-paragraph">Aprende a cuidar tus uñas de manera adecuada
                            para mantenerlas saludables y fuertes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="flex flex-wrap justify-start ml-72 mt-0" style="margin-top: -110px;">
        <!-- Tarjeta 1 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="display: block; margin: auto" class="pl-3 p-2 rounded-t-lg"  
                            src="https://images.milanuncios.com/api/v1/ma-ad-media-pro/images/786fba46-bbbe-4f9e-b072-c479052d030e?rule=hw396_70"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                                uñas con gel .</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">6.7%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$90.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img  style="display: block; margin: auto" class=" pl-3 p-2   rounded-t-lg"
                            src="https://i.pinimg.com/236x/9c/39/16/9c39161b7d4ad20e0784092dbfc1bf9a.jpg"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                                uñas acrilicas.</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$68.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        

        <!-- Tarjeta 3 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated" style="align-items: center">
                <div
                  class="w-full max-w-sm bg-white   border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> 
                    <a href="#">
                        <img class=" pl-3 p-2  rounded-t-lg" style="display: block; margin: auto"
                            src="https://i.pinimg.com/236x/78/41/9e/78419e952fcf62eaaa1b968c04353f78.jpg"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                                uñas con decoracion 3D.</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">3.0%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$75.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex flex-wrap justify-start ml-72 mt-0" style="margin-top: -10px;">
        <!-- Tarjeta 4 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img style="display: block; margin: auto" class="pl-3 p-2 rounded-t-lg"  
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQERHeC0VaUZvz_DZPyuorNpiubXkdYt-HOQw&usqp=CAU"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                                uñas permanentes . </h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">6.7%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$60.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar 
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Tarjeta 5 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated">
                <div
                    class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img  style="display: block; margin: auto" class=" pl-3 p-2   rounded-t-lg"
                            src="https://i.pinimg.com/236x/1e/d2/85/1ed2855982b5fe62f66e70c4b0314a07.jpg"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                               uñas semi permanentes .</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$70.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        
        <!-- Tarjeta 3 -->
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 border-animated" style="align-items: center">
                <div
                  class="w-full max-w-sm bg-white   border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700"> 
                    <a href="#">
                        <img class=" pl-3 p-2  rounded-t-lg" style="display: block; margin: auto"
                            src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFhUYGBgaGhocGhgZGhgaHhoYHBgZHBocGRwcIS4lHB4rIRgaJjgmKy8xNTU1GiQ7QDs0Py40NTEBDA
                        wMEA8QHxISHjQrJCs0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDE0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAOMA3gMBIgACEQEDEQH/xAAaAAACAwEBAAAAAAAAAAAAAAADBAECBQAG/8QAORAAAQMCBAMGBQQCAQQDAAAAAQACEQMhBBIxQVFhcQUigZGh8DKxwdHhE0JSYnLxkgYUosKC0vL/
                        xAAZAQADAQEBAAAAAAAAAAAAAAAAAQIDBAX/xAAnEQACAgICAgICAgMBAAAAAAAAAQIRAyESMUFRBGEisTJxFIGRE//aAAwDAQACEQMRAD8A2BVRmVJSIRqYXnHrOKCYulnHPY81m0qhBg6ixWuFn9oYU/E3Ueo4IFH0whehtddLYavmCaaFXYmqDsEqwYq0wmWoomwIaqYilaeCbaxSWooLM6iU00JN7cj42Nx9Qm6TkkNly1De1MAKr2J0SApcEYoL2xf3CKoZQ
                        NyE8K7nKqEM6gy61KQskqDE4woYMK5BcFeVUqQF3tUFqKV2VMAELsqOKaksQDAAKRdS4KWpomjMYU3TCUYE3SKuiuQw1qu5khVYjNVUS2eX7SpGk/OPgdr/AFdx6H5jmnMNUkLSx+FD2EHf3bmvMYOo5jyx+xj7JVTNL5R+z0NNHak6FSU40qkYvQYBWahtKkJBQtjqMiQLi4+yUoVVrPbZYuJZkfydcddx9fFS1Wy470adJ6I8JLD1LIz6qLDjss8hBzwCOHy2UOeg1WSFDLoo
                        HyUzSbKSpi8LQoIoljVNqKAqU1dDEQVDirOSz33hIaYUFEQWXRcqBlwquVmhQ9AgD0HMjPCEWpJlUZtJ8ptqxcNULTlOo9QtSm9dKM5JoeYUdhSjHpikUCDZZC8/27g/3jUa9Px916VoslsVSzAqRxdM83gcRNjqtai9YWIpGm/l9FoYavKOmU1as12FMBiQpvT9F82+XG22ipGb0WhZvauHLmGB3h3m8yNvESPFaBeqvCmRUdOzzuEryAQeidY6Vl12fp1nM2d329C
                        e8PA+hCeovUUav6G2hcoa8AShZ3HQJAkWewapmiEnn2NjwKcwxt09hApRoZYiNCrTaioM2xfG1crZSNA7lR2hVzPDeFz10H19FakEmWlSHaRRmlLtRWXQIKFWorNKWxlXKEn0KO2WLlUhCw7DF0ck7KEaHn+0cLuNQh4XET13WviWyFhY3Duac7deHEcF1WiEuSNmi9P0Hrz+DxQcPdjwPNadGqmQ0aoepddKsepNZS2CQj2nhgbwscDIeR0+y9E85lkYqh+3joeB9/VC
                        alop2t/9D4aotClU92+uqwcNVixsRYjmtFlRJOgaH3vj2VX9VKh8q0ypbKSFu1cNnbLfjaZbz4tPIi3WDslMNVkAhazWLJxNLI/+rrjkdx9fNCLXoYL/AHzmycw4ELNd8JPCD5H7Sn8K+wVxVAxt9IEQVQDKQfDrwKNTC7EUpFlTjZLkuhhgVcQ+AVehdoPED5LO7Yqd3L/I5fC5PoCsnozStiOG7xLz+4z4bei0qbUthqaepsSNGXY1Wa1WAV0Esq5ZdQ53ng2w67n6eCfxtTK0ngCkMGw/f
                        mkxxXkeYFLipAUESkNibDKrXoSFTDvTBeFtRG7PN4rDuY7M3xHH8801gsUHAe/A807i3NNpCwcQw03Z23B1HEcRz+eiDTjyX2ejbURGOWXhcSHAEGy0aLwk0yOhxgQMVQDgjteIQatZFDRhYmmWnNuLO5jZ3hv15I1J9kTGsbVaWzMg3Czez3ugsf8AGwwT/IftcOo9ZGyb3saVKjWpGU+xllnUHJ9j4CmhNhoSWPoh7SJg7HgdirGo51miVXEMewS4WO7SHecKuEu6EpRTq9mbhK0yDYixHA
                        /ZNYN8Et4adNln9rU3tH6zBmLR3mD97OX9hcjxG6Xo9rMdDgcrhs/umNxf5iU0aPd0euolOMbIWbgK7Xta9pBBEgj34LUoFdUYaPPnk3RVlpHl09/MLExj89aNmN9XH7Af8l6HEUpFtV5fBvzkv/mS7/4n4fQBc2aHFm+Cakm/RqYdqZAS1ByIa4HuFia7Y0xvv3qpcFSlUlWe6yEDM3tN85WcTPg2/wA8qYwtKwSD3Z6h4Nt46n7eC1aboCXZT0izmoblb9QKQOvgihXowWPhTVqW62SdGpsfA/fkj
                        1ASLai4+y3caYY5KQ3TpiEPE4GQY8l2GqSAtGiZVpWOUnE8lTYaTy3Rrj5O/PvVbGGqp3tXsn9Rpy2dseayKRIsRBFiDsUnBoX/AKRl/ZqVK8N6JL9QudlIMlryIgy8FuRjiJDQQTM6QNEOue7qRcd4Ra9iJ3mEXDPJc4kkS6ckmKZgSxgJOUAjQb8NE4xStsmSbdIM/CuzAlozDNq53ekQ0yLACNhflCQx1PK4PAIIAzgx8JjNpYgOkjkt2nLhuQPGFFeiHCCEN2VGNGWw7q7qkwONkoxhpvN
                        N3CWHZzJi3MGxG1tiCSExDuBB8FCjvYN0tG9gmAAC3U30kzab8uieY/M68nd1oOaIvueHTos7CvtqfstKg8wHNF9xeLcOH+16KSrR4s23LZl9o4JrCcnwHUfxPL+p9F5bGYMNJEW2XugQ74jDSRm8jobx+PLznatHKQOvlsVyZ8fHaO/42dyXF9ozuxcV+m7IT3HH/i479Dv58V6/DvXkXUFs9lYk/AdRoeI+4T+Pk3xkT8rG/wCUf9nqaRkLzGPo/p1HN0BOYdHG485Hkt7D1Eh229j3MhwL
                        2yCBqAYN+BtpzWnyknC/Rj8STU68MSFQgKtN5JVHt8FahbmvMaPVXVmlShTiqoa0ngD4pem9L4985WcTJ6D8x5Kl0TVspgmQJOupPE6lMl5KpRZZWcxIbZzXpoPlIlHpvsmo2yZaR5uEWk8ix0+X4XFigBdbOWMmnaCtflOYXadY25j6j6rSw1TQzIWU3lZFo1nNPEbj6jgURVMuWTkvs9Th3AhZ/a/ZubvsHeGo/kPvw8uERhcUDofx1WtTqBwhdSjyRxObjKzx7YIg6EQeh
                        VabyCAS0EBoDRYkNETkOgiDLbTms0m7H/UmFFB4rsIioYqMkSTBh7Bx4jflcpdzw9gLXTBlrhsfexXJJcW0elikpxUjTw1eNCmXPBvxWXg6gfb4XjVu3VvAfLROtcRY++h+v0slwfZTmrryRi8H+qwsBAeO/TcdngXB/q4WPTiAsfDVswhwLXCWuadWuFnA8wVvhx1HGx4HUAjb5G/OMn/qLClhGJYLHKKjeIsGv/yFmnlHBa8eUb8r9HPz4zp9P9hsBWg
                        ZTqPlx9FrUXmdYPOYtuY6eq8th8W1/fY4EjUfMOGy3cDVDgCDrGu17zC1xztUc3yMXGXJGyXAgEAhu4mXR+7la50/cs/tvCZmh4BBYSCDJlpMT1Bi23eWhgmhzSLZhBBPwwAZzeJ1TGJZ8TXtN5Bkgy0i50iIj/Sc1yi0zCEnCSkjx/6JKt+iW30i88FotpZTB1Fkv2i4BhHG3mvOquz1VKxVnaNSq0D4AQJykybcdWjkPMpjD0YEDZDw1PRaFOmm25bYVGOkqKGnOoVBTTgYiCkpcSuQuxkJEHO8nhYeH5lO4+tkaT5ddB6lLYFkAbqaKXVmhSp2Uvpo9FtlWqnRFmc5t05haVpJifY+6E1md4aNzfkBr6fRabqewBPIWhb4oeTn+Rk8Hk8qgMRoVS1aEAixSWAK+VSW2TAE5+S412A368kbB9vtDe+CHAE92SHR/H+JPA+aTxTT74LPaxNylF6KhCM1sDja76ry95l2gGzR/FvAfNVoAtIIJFxpab78fFH/AElLad1g27tncqSpEvqvBzB1xoYHuFs9mdpB4ggBw+Ju3VvL1Czv07JarRIIc0kOFwR7/wBq8eXi/o58uJTXp+Gesa3dvkb+HMfbimaAa5jmOuLhzHDRroEE/uaZI21E6icHsvtHP3XWeNRxHFvLlt6rbbWa0F7iGhou4mIbvJ4LvxqD/KL0eZllkX4SWzwWL7BNGu8agwaZ3yHSTxBBB6TutHsys6k65Ja74tbH+Q+vLoE9j8eK7hlbDWyA46mYm2wslzTXBJqM3xej043OCWRbrZ6fDVtMsTtoReItvrputlmJD25TmaMxIaLlkGCDIuL6cl47svEZSGONv2ngeH24eS9A2oTBJJNpnW+866bnhddEZqSs8/JjcXRXtRoDyQIaYi8iIsRHFefxL8z42aJ8Tp6T5rb7RxLXD9oIAAyiBbcjaRO+5XnMK7MS/wDkSfDQegBXJmSUtHf8e+Ns1MO1aFILPoFOsqQpRchxtL2VzhCpTqdPCQg47FBjS47Dz4AcyYCGJJ3Rl4+pneGDRtz1Og8p8wnMMIWfhKZ+I3JMk8z9FotCyNmq0NtqWhCq1EBz4U0ml7g0exurW3REvxVmj2XRsXnU2H+I+5+QWi02tZKNY8ECwEaTUDck9F2RVKjzZS5SbPKGmqFiKXqjnJOjSyv6cIhpWQnPA3RcNWDjlnp9kRavZMraFatGUucEdQPstavVYyxMngLn8JR+KnRpAVTcXoIOUXaFP+2I28kKpSgiyd/VP8UvUcS6/L36rnkkkdmPI5Omc1i52HkIrAmWQsUzZoyv+yvOhFweB67IfatR7mta8y1sEt2MGXEjc5QVuuYIWL2ozvNHP/fpIVxk0qJ4qTTa2iMBThoHqnv01TDMsnGgKUxS7FDRlPse8gCY4kanqVam0IhcAmpNdMiUU/Bn9pVMrCBqbDqeHql8IyAANgFXtB+d4GwPyE//AFjxRaISkax/iO0ymWFKNKMxySZLHGOWZi6md4Zs25/yiw8BfxCZxNfI0nXlxJsB5rNoOLeZNzHE6nkhu9GkI+TWoMTGVZ+HxNwCCJIT5qePvZNIJRaFaqf7NZlbm3d8tvv4hJtbmdHO/TdaUyI0W2KPk5PkT1xGDV4+HpoqB081QNsb+l+Pgua4bg8gNlucZ58YcbknxXfot4IxCq5Kka2UNJvBULAEVVISaAoAFKgBXDUhlUjVPePX8LRLFnObJjiSfCfyomtUb/H7bOY8mwBPRM0X+B4Gx/PgmcNTjRGr4YObcfgrLho620Cz2WTi71Og+Z/HqnKLiJB1BhIUTmc53Fx8h3R8p8VHgKobpFMNPJAY1FZZITQxTQ8XWDWknYKcyzcbUzODdtT4aDzv4JCUdlMNTJ7x1Nzy3hP0qcIWHC0abbIpsbYOFLRCKafvRJ4urkaSdgTz05J0JKylZ+d8bN0/yj6A+qewtAD7pLs2laTqb+dyfNbFNi1jGtjc0nQr2hSGQncBVbVlg6fQImPMgM/kQPDUnyCDSZnfGjd+nuybVscpKMbY3g2QMx3+Uptvy8h91Ru3yGvBXb74LoiqVHlTk5SbZa353N4geaIxxGnkL+foh+56wrdbchz4lMgyS1Vyo2XmqkINAYYoLUSFxKABZIUwphS4QlQyizcM2/SB91ouSzGQ53WfO6iSN8EqseoJp2iUolMvNlFG/JGNjX5GvcNZtzOUAeqXwzIaBwAHkpx75IH9pPQafRVY4iwF1k0zd9DtNNMaEkaVRoByGOIvwmDodeKJhsRNt9wdvBS4tdoy0+mHxDICw2ukl3E26Cy1O0KxawxroOpsPUhIUqZDmhsd1u87gtBtvrvrO6qMbKTpFqdU6gEjTMAYnhm0T2HxUwDv9vL1VG4d+Uw9wBi0wCQ4kWHCTfWCboTu6A1+clzg1r2wQ1rnO+PMZMDK1oaCSYG60WNVpkOTXaNV77e+Cy8Q39RwZsTB6b+krqeIcWQ6xFiOB8UbspkuLvAfX6eaIQ5SonJPhFyNOhQiwTDmwESmxUrXt68F1SxpI4o5m9mc6pmcQLk2H38/kE3hqQbaeBJ4nkiYeg1ghrfHoeeq5m+0/e3RZxjWy8uZy0ug2YADu3J31iVw8Psq1G3Avfbcogb0n0FuPFUc5zDF5HXny5ogA3kDlck8Tw1VA7fpeNByXEcCRppcnW54IAzYUFEhUcEGhUqCFJUFAEKhG6uVUlAFXnghkXVz7/KgG6Sjeh8uOw1II77NJ4A/JUowpxbu5HEgfX6J8KVlPJfRhVmDMBwHz/8AyneymR39CdDew5R5pPEi5ixMAeIA+q2cO0AAaD0HX3oliguTZpmyNY0vY5TbmMNaSYJdlAItEwNgPske2MGAMwLc44ctitVmGMjLMl0OMObDYuXOgCLOnw4pbtCmGsDcw+F0wHAA6Zbi/WAtpxTTTOTFNqSaPM1n5so3u6OMaDzITmGpAa3vc8TuUjhO9VaP6gnwifUtWphmaTpqei4uNKz1r3QY3ubDbkFTFMyjUhwIIixaRcX2cCAeUXvoyX5b/ui39N/+en+M8dEsWO46DB0af7HQehPRpVJUJu/6/Yg55cMxcXlwBzSST3RqSSSbXJMzK28FSyDJwseu/qs/AUJfmgZW3iTAJPdkkzxM8lrBjYmffJa4nxdnF8r8kojeYAJdpkzr8h+VUGwny3PVWjx5cL7rWclLo5YR49ly+x+eg8FzNLeZ6bBcBxi3kL7cVdp3/wDI6nawWZZzZm/LTVXbtMWi22v7lDPLTqfHZWbO2gjoLnXiUCLPHdnjbQ8T8KthjtfTa2+87odYtgAHMSR858FdltTGogfUoAznBDhWifeik++CDQGVUq5CgIAoVVWdwUR7+6AKQqjVFd74IZaqg0pbJmm46D0ioxp+EdT9Puqs6j0VazpdxAgTstcjXHRji5ctiNWiS9kbuH/ic3/qtSi2bBsk8p+V5EJdvs/ZN0pAEHbUEgi4mCNOFtieazxqkzbNJySXo1P+8OVlMMg9wuc64uQC4zsJJBOkSsrtx5DHXaZGVrmkwQ45Q6/K9tuKOWQLglwsLwABEASDO9hp8ku2mSGMaSdzpo0QNrC//iqlqLZGFLkvViHZ7O8Xc48AnmNiCNvY9b+CHhGAGBtI8ZTTGrLJBqKR148qlKT8A/0ybD3zQMU0ueGMFmCSf7O1no2P+RC0WtjxQTrGsk2G9vkk4cY0+2T/AJDbtdIrh6YaABxF9pRgfrc/RVYOk26BFbxPODt4ISMW23bLZoabX56m0qwYSCYMXsL+ZVQ36dSrNFoBjSw8rnZMRMdDr0Ej5q5O8+O+2g26qcOxsXOwi1vz1XSJN99dz3eHBAiQ2OvD7lWYb31GlrC/GbqANjbSANbjc/RXEHnwAsBI3PGyYHOEeIIk73BgcERgidr6cEIEjpcT4bDZEAgagSd9fElAGWVB9/hXcFXN59EjQo/2VDQr5NyucNkABIXQrlq4BAFCPf2VMvFFcFD4A5oAA7XkpDff4V8qk2vupAqzWI23/Ccw+gvY67625zaLpRjdfkm2Gw8/KLR+d1tDoyydjdWHRAOkW1k6DXSYHOVlYk94/wBbc7CT6kjwWg6QMxuLEO3ht59J8Fm5Zmd5niZ1+aJ+hQvbB4XUJ6mICVFGLgkaWN/9ItN54Lo5wlv0Y1OKr2XqOm3mfsuyXmN/E2+SgCTzv0H3RmjebT8Vp00XLJ8nZ0RXFUQ82ADdI6eJRWMJBNt7mw8BuqNboI4W26lFaDFjw2nXgN1IwbRfU9d7D0CIw7ROnTxKmlTE94mJdMfF48FYluaGi0i23iUAdmB0uY1NgL7DdWaA24A/yO5B/aoyiJ10vs2+3FWE6k2ve3omII+qTAyam8QDrvGis2k7LmMEDYREg/u4qjr6c+ZOnxclctIs2xM93gNd0AV5zpq7gLiG8QhuYN7cJueepsmKVPNPfbI0mYE3tCEwEklozGbuOvTpZACLtCobsoXILRI26BCOq
                        5ckMl3yXDjzXLkmB0WQly5MEc3X3wUHXyXLlIFhui06YeCHX13I/aOC5ctoeDHJ0MYt5/TN9v8A2YPqfNIN0neTfwXLlM+yodFnfCp28/muXKSgo1hFB36LlyBEs+KNpFvBFp/C47jLB4XKhcgRZvwzxzKwHeA2LhZcuTAbxTRmaIsC23igjc/5LlyYEU7X5omItpb/AEuXJADOoGxAspZrHAD6qFyAP//Z"
                            alt="product image" />
                    </a>
                    <div class="px-5 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">Tecnica de
                                uñas esculpidas.</h5>
                        </a>
                        <div class="flex items-center mt-2.5 mb-5">
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path
                                    d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                            </svg>
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">3.0%</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">$80.000</span>
                            <a href="#"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agendar </a>
                        </div>
                    </div>
                </div>
            </div>
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
<
<footer class="bg-white rounded-lg shadow dark:bg-gray-900 pt-auto mt-5 ">
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