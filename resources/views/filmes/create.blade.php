<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">



        <div class="flex flex-col items-center h-full w-fill p-5">

            <h1 class="text-3xl mb-2 text-gray-400 font-bold">Cadastro Filme</h1>

            <!-- Alert Succes -->
            @if(session('success'))

                <x-alert-success :message="session('success')" />

            @endif
            <!-- Alert Succes -->


            <!-- Alert error -->
            @if($errors->any())
                @foreach ($errors->all() as $error)

                    <x-alert-error :error="$error" />

                @endforeach
            @endif
            <!-- Alert error -->



            <form action="{{ route('film.store') }}" method="POST" class="w-full border border-gray-700 rounded-md p-5"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="large-input" class="block mb-2 text-sm font-medium text-gray-300">Nome</label>
                    <input type="text" id="large-input" name="name"
                        class="block w-full p-2 text-gray-300 border border-gray-700 rounded-lg bg-gray-800 text-base focus:ring-gray-500 focus:border-gray-500">
                </div>

                <div class="mb-5">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-300">Categoria</label>
                    <select name="category" id="countries"
                        class="bg-gray-800 border border-gray-700 text-gray-300 text-sm rounded-lg focus:ring-gray-500 focus:border-gray-500 block w-full p-2.5">

                        <option value="0">Selecione</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach


                    </select>

                </div>

                <div class="mb-5">

                    <label class="block mb-2 text-sm font-medium text-gray-300" for="file_input">Escolha
                        a capa do filme</label>
                    <input
                        class="block w-full py-2 text-sm text-gray-300 border border-gray-700 rounded-lg cursor-pointer bg-gray-800 focus:outline-none"
                        name="image" id="file_input" type="file" accept="image/*">

                </div>

                <input
                    class="bg-blue-800 text-gray-300 font-bold px-4 py-2 border border-gray-600 rounded-md hover:bg-blue-900"
                    type="submit" value="Adicionar">



            </form>
        </div>

    </div>


</x-layout>