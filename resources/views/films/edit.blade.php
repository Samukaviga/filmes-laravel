<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">



        <div class="flex flex-col items-center h-full w-fill p-5">

            <h1 class="text-3xl mb-2 text-gray-400 font-bold">Editar Filme</h1>

            <!-- Alert Succes -->
            @if(session('success'))
            <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-200" role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Info</span>
                <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 ml-4 bg-green-200 text-green-500 hover:text-green-600 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-300 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-3" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            @endif
            <!-- Alert Succes -->


            <!-- Alert error -->
            @if($errors->any())
            @foreach ($errors->all() as $error)
            <div class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
                <svg class="shrink-0 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <span class="sr-only">Erro</span>
                <div class="ms-3 text-sm font-medium">
                    {{ $error }}
                </div>
                <button type="button" class="ms-auto bg-red-50 text-red-500 rounded-lg p-1.5 hover:bg-red-200 focus:ring-2 focus:ring-red-400" aria-label="Fechar">
                    <svg class="w-3 h-3" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            @endforeach
            @endif
            <!-- Alert error -->



            <form action="{{ route('film.store') }}" method="POST" class="w-full border border-gray-700 rounded-md p-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="large-input"
                        class="block mb-2 text-sm font-medium text-gray-300">Nome</label>
                    <input type="text" id="large-input" name="name"
                        class="block w-full p-2 text-gray-300 border border-gray-700 rounded-lg bg-gray-800 text-base focus:ring-gray-500 focus:border-gray-500">
                </div>

                <div class="mb-5">
                    <label for="countries"
                        class="block mb-2 text-sm font-medium text-gray-300">Categoria</label>
                    <select name="category" id="countries"
                        class="bg-gray-800 border border-gray-700 text-gray-300 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5">

                        <option value="0">Selecione</option>
                    
                        <option value="22">2</option>
                  
                    </select>

                </div>

                <div class="mb-5">

                    <label class="block mb-2 text-sm font-medium text-gray-300" for="file_input">Escolha
                        a capa do filme</label>
                    <input
                        class="block w-full py-2 text-sm text-gray-300 border border-gray-700 rounded-lg cursor-pointer bg-gray-800 focus:outline-none"
                        name="image" id="file_input" type="file" accept="image/*">

                </div>

                <input class="bg-blue-800 text-gray-300 font-bold px-4 py-2 border border-gray-600 rounded-md hover:bg-blue-900" type="submit"
                    value="Adicionar">



            </form>
        </div>

    </div>


</x-layout>