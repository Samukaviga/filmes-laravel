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

<body class="w-screen h-screen">

    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
        <span class="sr-only">Open sidebar</span>

        <i
            class="fa-solid fa-bars inline-flex items-center p-2 mt-2 text-2xl text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "></i>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidenav">
        <div
            class="overflow-y-auto py-5 px-3 h-full bg-white border-r border-gray-200">
            <ul class="space-y-2">
                <li>
                    <a href="/teste"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg hover:bg-gray-100 group">
                        <i
                            class="fa-solid fa-house transition duration-75 text-xl w-6 h-6 text-gray-400 group-hover:text-gray-900"></i>
                        <span class="ml-3">Home</span>
                    </a>
                </li>

                <!-- Filme -->

                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                        aria-controls="dropdown-sales" data-collapse-toggle="dropdown-sales">
                        <i
                            class="fa-solid fa-film transition duration-75 text-xl w-6 h-6 text-gray-400 group-hover:text-gray-900"></i>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Filme</span>


                        <i class="fa-solid fa-caret-down w-6 h-6"></i>
                    </button>
                    <ul id="dropdown-sales" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/novo"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100">Novo</a>
                        </li>
                        <li>
                            <a href="/lista"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100">Lista</a>
                        </li>

                    </ul>
                </li>

                <!-- Filme -->

                <!-- Authentication -->
                <li>
                    <button type="button"
                        class="flex items-center p-2 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100"
                        aria-controls="dropdown-authentication" data-collapse-toggle="dropdown-authentication">

                        <i
                            class="fa-solid fa-lock transition duration-75 text-xl w-6 h-6 text-gray-400 group-hover:text-gray-900"></i>

                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Authentication</span>
                        <i class="fa-solid fa-caret-down w-6 h-6"></i>
                    </button>
                    <ul id="dropdown-authentication" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100">Sign
                                In</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100">Sign
                                Up</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 pl-11 w-full text-base font-normal text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100">Forgot
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