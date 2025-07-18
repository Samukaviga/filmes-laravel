<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">


        <h1 class="text-3xl mb-2 mt-5 text-gray-400 font-bold text-center">Categorias</h1>

        <!-- Alert Succes -->
        @if(session('success'))

        <x-alert-success :message="session('success')" />

        @endif
        <!-- Alert Succes -->

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg m-5 border-box">
            <table class="w-full text-sm text-left rtl:text-right text-gray-400">
                <thead class="text-xs text-gray-400 uppercase bg-gray-800">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            ID
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


                    @foreach ($categories as $category)

                    <tr class="bg-gray-800 border-b border-gray-700 hover:bg-gray-700 ">

                        <th scope="row" class="px-6 py-4 font-medium text-gray-400 whitespace-nowrap">
                            {{ $category->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $category->name }}
                        </td>

                        <td class="flex items-center px-6 py-4">
                            <a href="{{ route('category.edit', $category->id) }}" class="font-bold text-blue-700 hover:underline">Editar</a>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja remover esta categoria?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-bold text-red-700 hover:underline ms-3">
                                    Remover
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach


                </tbody>
            </table>
        </div>



    </div>


</x-layout>