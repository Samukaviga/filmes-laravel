<x-layout>

    <!-- filter -->
    <div class="mx-auto w-full box-border pl-0 md:pl-64">
        <!-- Start coding here -->
        <div class="relative bg-gray-900 border-2 border-gray-800 shadow-md sm:rounded-lg">
            <div class="flex flex-col items-center  p-4 space-y-3 md:flex-row md:space-y-0 md:space-x-4">
                <div class="w-full md:w-1/4">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Pesquisar</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" id="simple-search"
                                class="block w-full p-2 pl-10 text-sm text-gray-200 border border-gray-700 rounded-lg bg-gray-800 focus:ring-gray-500 focus:border-gray-500"
                                placeholder="Pesquisar" required="">
                        </div>
                    </form>

                </div>

                <!-- drops downs -->
                <div class="flex items-center w-full space-x-3 md:w-auto">

                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                        class="flex items-center justify-center w-full px-4 py-2 text-sm font-medium text-gray-400 bg-gray-800 border border-gray-700 rounded-lg md:w-auto focus:outline-none hover:bg-gray-700 hover:text-gray-400 focus:z-10 focus:ring-gray-4 focus:ring-gray-200"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-4 mr-2 text-gray-500"
                            viewbox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd" />
                        </svg>
                        Filtro
                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-gray-800 rounded-lg shadow">
                        <h6 class="mb-3 text-sm font-medium text-gray-400">
                            Categoria
                        </h6>
                        <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                            <li class="flex items-center">
                                <input id="apple" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-400 border-gray-500 rounded text-gray-900 focus:ring-primary-500" />
                                <label for="apple" class="ml-2 text-sm font-medium text-gray-400">
                                    Apple (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="fitbit" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-400 border-gray-500 rounded text-gray-900 focus:ring-primary-500" />
                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-400">
                                    Fitbit (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="dell" type="checkbox" value=""
                                    class="w-4 h-4 bg-gray-400 border-gray-500 rounded text-gray-900 focus:ring-primary-500" />
                                <label for="dell" class="ml-2 text-sm font-medium text-gray-400">
                                    Dell (56)
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="asus" type="checkbox" value="" checked
                                    class="w-4 h-4 bg-gray-400 border-gray-500 rounded text-gray-900 focus:ring-primary-500" />
                                <label for="asus" class="ml-2 text-sm font-medium text-gray-400">
                                    Asus (97)
                                </label>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- drops downs -->

            </div>
        </div>
    </div>
    <!-- filter -->


    <!-- Card -->

    <div class=" pl-0 md:pl-64">

        <div class="p-5 flex justify-center md:justify-start gap-2 flex-wrap">
            <div class="max-w-sm bg-gray-800 border border-gray-600 rounded-lg shadow-sm">
                <a href="/editar">
                    <img class="rounded-t-lg w-full h-64 md:h-[350px] object-cover object-center"
                        src="{{ asset('/imagens/tropa-de-elite.jpg') }}" alt="" />
                </a>
                <div class="p-5">

                    <p class="text-gray-400 font-bold mb-1">Ação</p>

                    <a href="/editar">
                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-300">Tropa de elite</h5>
                    </a>
                </div>
            </div>

            <div class="max-w-sm bg-gray-800 border border-gray-600 rounded-lg shadow-sm">
                <a href="/editar">
                    <img class="rounded-t-lg w-full h-64 md:h-[350px] object-cover object-center"
                        src="{{ asset('/imagens/tropa-de-elite-2.jpg') }}" alt="" />
                </a>
                <div class="p-5">

                    <p class="text-gray-400 font-bold mb-1">Ação</p>

                    <a href="/editar">
                        <h5 class="mb-3 text-2xl font-bold tracking-tight text-gray-300">Tropa de elite 2</h5>
                    </a>
                </div>
            </div>
        </div>



    </div>


    <!-- Card -->

</x-layout>