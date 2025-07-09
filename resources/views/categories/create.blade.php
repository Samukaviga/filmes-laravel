<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">



        <div class="flex flex-col items-center h-full w-fill p-5">

            <h1 class="text-3xl mb-2 text-gray-500 font-bold">Cadastro Categoria</h1>

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



            <form action="{{ route('category.store') }}" method="POST" class="w-full border rounded-md p-5">
                @csrf
                <div class="mb-5">
                    <label for="large-input"
                        class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
                    <input type="text" id="large-input" name="name"
                        class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>

                <input class="bg-blue-600 text-white font-bold px-4 py-2 border rounded-md hover:bg-blue-700" type="submit"
                    value="Adicionar">



            </form>
        </div>

    </div>


</x-layout>