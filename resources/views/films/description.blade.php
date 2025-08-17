<x-layout>


    <div class="pl-0 h-full w-fill md:pl-64">


        <h1 class="text-3xl mb-2 mt-5 text-gray-400 font-bold text-center">Sinopse</h1>

        <!-- Alert Succes -->
        @if(session('success'))

            <x-alert-success :message="session('success')" />

        @endif
        <!-- Alert Succes -->

        <section class="bg-gray-900">
            <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="mr-auto place-self-center lg:col-span-7">
                    <h1
                        class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-400 md:text-5xl xl:text-6xl ">
                        {{ $film->name }}
                    </h1>
                    <p class="max-w-2xl mb-6 font-light text-gray-400 lg:mb-8 md:text-lg lg:text-xl ">
                        {{ $film->description ? $film->description : "Sem descrição"  }}
                    </p>

                    <a href="{{ route('film.edit', $film->id) }}"
                        class="inline-flex items-center justify-center px-5 py-3 text-base bg-green-800 font-medium text-center text-gray-100 border border-gray-300 rounded-lg hover:bg-green-900 focus:ring-4 focus:ring-green-900">
                        Editar
                    </a>


                </div>
                <div class="hidden  lg:mt-0 lg:col-span-5 lg:flex">
                    <img class="max-w-[350px]" src="{{ $film->image ? asset('storage/' . $film->image) : asset('imagens/sem-foto.webp') }}" alt="mockup">
                </div>
                
            </div>
        </section>

    </div>



</x-layout>