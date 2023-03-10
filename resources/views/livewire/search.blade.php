<div>
 
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto" style="padding: 5px">
    
        <form class="flex items-center" autocomplete="off">   
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input wire:model="search" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Busqueda..." required>
            </div>
           
        </form>
    
        @if ($search)
        <ul class="absolute  w-full  bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-x  " >
            @forelse($this->results as $result)
                <li class="leading-10 text-sm cursor-pointer"> <a
                        href="{{ route('cliente.suscripcion.video', $result->idVideo) }}">{{ $result->NombreVid }}
                    </a> </li>
            @empty
                <li class="leading-10 text-sm cursor-pointer">No hay ninguna coincidencia</li>
            @endforelse
        </ul>
    @endif
        
    </div>
</div>
