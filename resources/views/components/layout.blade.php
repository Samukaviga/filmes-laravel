<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="w-screen h-screen bg-gray-900">

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-gray-800 focus:ring-gray-800 ">
        <span class="sr-only">Open sidebar</span>

        <i
            class="fa-solid fa-bars inline-flex items-center p-2 mt-2 text-2xl text-gray-500 rounded-lg sm:hidden hover:bg-gray-800 focus:outline-none focus:ring-gray-800 focus:ring-gray-800 "></i>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidenav">
        <div
            class="overflow-y-auto py-5 px-3 h-full bg-gray-900 border-r border-gray-800">
            <ul class="space-y-2">
                <li>
                    <a href="{{ route('film.index') }}"
                        class="flex items-center p-2 text-base font-normal text-gray-800 rounded-lg hover:bg-gray-800 group">
                        <i
                            class="fa-solid fa-house transition duration-75 text-xl w-6 h-6 text-gray-600 group-hover:text-gray-400"></i>
                        <span class="ml-3 text-gray-300">Home</span>
                    </a>
                </li>

                <!-- Filme -->

                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-200 rounded-lg transition duration-75 group hover:bg-gray-800"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                        <i
                            class="fa-solid fa-film transition duration-75 text-xl w-6 h-6 text-gray-600 group-hover:text-gray-400"></i>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Filme</span>


                        <i class="fa-solid fa-caret-down w-6 h-6"></i>
                    </button>
                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('film.create') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Novo</a>
                        </li>
                        <li>
                            <a href="{{ route('film.show') }}"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Lista</a>
                        </li>

                    </ul>
                </li>

                <!-- Filme -->

                <!-- Categorias -->
                <li>
                    <button type="button" class="flex items-center p-2 w-full text-base font-normal text-gray-300 rounded-lg transition duration-75 group hover:bg-gray-800" aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                        <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-600 transition duration-75 group-hover:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Categorias</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('category.create') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Novo</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}" class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Lista</a>
                        </li>
                    </ul>
                </li>
                <!-- Categorias -->

                <!-- Authentication -->
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-300 rounded-lg transition duration-75 group hover:bg-gray-800"
                        aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">

                        <i
                            class="fa-solid fa-lock transition duration-75 text-xl w-6 h-6 text-gray-600 group-hover:text-gray-600"></i>

                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                        <i class="fa-solid fa-caret-down w-6 h-6"></i>
                    </button>
                    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Sign
                                In</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Sign
                                Up</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-400 rounded-lg transition duration-75 group hover:bg-gray-800">Forgot
                                Password</a>
                        </li>
                    </ul>
                </li>
                <!-- Authentication -->
            </ul>

        </div>

    </aside>


    {{$slot}}





    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>