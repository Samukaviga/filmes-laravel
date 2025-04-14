<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">



        <div class="flex flex-col items-center h-full w-fill p-5">

            <h1 class="text-3xl mb-2 text-gray-500 font-bold">Cadastro Filme</h1>

            <form action="{{ route('film.store') }}" method="POST" class="w-full border rounded-md p-5">
                @csrf
                <div class="mb-5">
                    <label for="large-input"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                    <input type="text" id="large-input" name="name"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>

                <div class="mb-5">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
                    <select name="catogory" id="countries"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

                        <option value="0">Selecione</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach


                    </select>

                </div>

                <div class="mb-5">

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Escolha
                        a capa do filme</label>
                    <input
                        class="block w-full py-2 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        name="image" id="file_input" type="file" accept="image/*">

                </div>

                <input class="bg-lime-500 text-white px-4 py-2 border rounded-md hover:bg-lime-600" type="submit"
                    value="Adicionar">



            </form>
        </div>

    </div>


</x-layout>