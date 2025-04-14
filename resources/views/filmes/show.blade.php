<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">


        <h1 class="text-3xl mb-2 mt-5 text-gray-500 font-bold text-center">Todos Filmes</h1>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5 border-box">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            Nome
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Categoria
                        </th>

                        <th scope="col" class="px-6 py-3">
                            #
                        </th>

                    </tr>
                </thead>
                <tbody>


                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Tropa de elite 2
                        </th>
                        <td class="px-6 py-4">
                            Ação
                        </td>

                        <td class="flex items-center px-6 py-4">
                            <a href="#" class="font-bold text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                            <form action="">
                                <input class="font-bold text-red-600 dark:text-red-500 hover:underline ms-3"
                                    type="submit" value="remover">
                            </form>
                        </td>
                    </tr>

                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Tropa de elite 2
                        </th>
                        <td class="px-6 py-4">
                            Ação
                        </td>

                        <td class="flex items-center px-6 py-4">
                            <a href="#" class="font-bold text-blue-600 dark:text-blue-500 hover:underline">Editar</a>

                            <form action="">
                                <input class="font-bold text-red-600 dark:text-red-500 hover:underline ms-3"
                                    type="submit" value="remover">
                            </form>

                        </td>
                    </tr>


                </tbody>
            </table>
        </div>



    </div>


</x-layout>