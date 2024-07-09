<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing demo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<header class="text-gray-600 body-font bg-white">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <x-application-mark class="block h-9 w-auto" />
        <span class="ml-3 text-xl">Demo</span>
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900">Registrarse</a>
      </nav>
      <a href="{{ route('login') }}" class="inline-flex items-center text-white bg-blue-700 border-0 py-1 px-3 focus:outline-none hover:bg-blue-900 rounded text-base mt-4 md:mt-0">Iniciar sesión
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
    </a>
    </div>
  </header>
<body class="bg-gray-100">

    <div class="min-h-screen flex flex-col justify-center items-center">
        <div class=" bg-white p-8 rounded shadow-lg w-full md:w-4/5 lg:w-4/5">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Seguimiento de Softwares, Suscripciones y Mantenciones</h1>
                <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0B5ED7" d="M171.7 232.8A5.4 5.4 0 0 0 176.7 229.5 48.1 48.1 0 0 1 191.6 204.2c1.2-.8 1.7-2.5 1.7-4.1a4.2 4.2 0 0 0 -2.1-3.3L74.4 128.5 149 85a9.9 9.9 0 0 0 5-8.3 9.1 9.1 0 0 0 -5-8.3L126.6 55.6a9.7 9.7 0 0 0 -9.5 0l-100.2 58a9.9 9.9 0 0 0 -5 8.3V237a9.1 9.1 0 0 0 5 8.3L39.2 258.1a8.8 8.8 0 0 0 5 1.2 9.4 9.4 0 0 0 6.6-2.5 10.8 10.8 0 0 0 2.9-7V164.5L169.7 232.4A4.5 4.5 0 0 0 171.7 232.8zM323.3 377.7a12.5 12.5 0 0 0 -5 1.2l-74.5 43.1V287.9c0-2.9-2.9-5.8-6.2-4.6a53 53 0 0 1 -29 .4 4.9 4.9 0 0 0 -6.2 4.6V421.6l-74.5-43.1a8.8 8.8 0 0 0 -5-1.2 9.6 9.6 0 0 0 -9.5 9.5v26.1a9.1 9.1 0 0 0 5 8.3l100.2 57.6A8.8 8.8 0 0 0 223.5 480a11 11 0 0 0 5-1.2l100.2-57.6a9.9 9.9 0 0 0 5-8.3V386.8C332.8 382.3 328.2 377.7 323.3 377.7zM286 78a23 23 0 1 0 -23-23A23 23 0 0 0 286 78zm63.6-10.1a23 23 0 1 0 23 23A23 23 0 0 0 349.6 67.9zM412.8 151.6a23 23 0 1 0 -23-23A23 23 0 0 0 412.8 151.6zm-63.2-9.2a23 23 0 1 0 23 23A23 23 0 0 0 349.6 142.4zm-63.6 83.2a23 23 0 1 0 -23-23A23 23 0 0 0 286 225.6zm-62.1 36.4a23 23 0 1 0 -23-23A23 23 0 0 0 223.9 262zm188.9-82.4a23 23 0 1 0 23 23A23 23 0 0 0 412.8 179.6zm0 72.3a23 23 0 1 0 23 23A23 23 0 0 0 412.8 251.9z"/></svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800 mt-4">Seguimiento de Software</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0B5ED7" d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800 mt-4">Seguimiento de Suscripciones</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 p-4">
                    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
                        <div class="flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#0B5ED7" d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v17.7c0 7.8 4.8 14.8 11.6 18.7c6.8 3.9 15.1 4.5 21.8 .6l13.8-7.9c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-14.4 8.3c-6.5 3.7-10 10.9-10 18.4s3.5 14.7 10 18.4l14.4 8.3c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-13.8-7.9c-6.7-3.9-15.1-3.3-21.8 .6c-6.8 3.9-11.6 10.9-11.6 18.7v17.7c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V467.8c0-7.9-4.9-14.9-11.7-18.9c-6.8-3.9-15.2-4.5-22-.6l-13.5 7.8c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l14-8.1c6.5-3.8 10.1-11.1 10.1-18.6s-3.5-14.8-10.1-18.6l-14-8.1c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l13.6 7.8c6.8 3.9 15.2 3.3 22-.6c6.9-3.9 11.7-11 11.7-18.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z"/></svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-800 mt-4">Seguimiento de Mantenciones</h2>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                    </div>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
            </div>
        </div>
    </div>

</body>
<footer class="text-gray-600 body-font bg-white">
    <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900" style="text-decoration: none;">
        <x-application-mark class="block h-9 w-auto" />
        <span class="ml-3 text-xl">Demo</span>
      </a>
      <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4"> 2024 DEMO
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
</footer>
</html>
