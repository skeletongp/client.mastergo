<div class="w-full " x-data="{open: false}" x-cloak @keydown.escape.window="open = false">
    {{-- Modal Main Button --}}
    <div>
        <button type="button" x-on:click.prevent="open = ! open"
            class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700">
            {{$button}}
        </button>

    </div>
    {{-- Modal --}}
    <div x-show="open"  x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="-translate-y-full opacity-0" x-transition:enter-end="opacity-100 -translate-y-0"
    x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 -translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-full"  @click.away="open = false"
        class=" overflow-y-auto overflow-x-hidden w-full z-50 flex justify-center items-center h-full md:inset-0  mx-auto absolute ">

        {{-- Modal Container --}}
        <div
            class=" bg-white rounded-lg flex flex-col p-4 mx-auto w-full max-w-md shadow-sm shadow-blue-500 dark:bg-gray-700 border border-blue-500">
            
            {{-- Modal Header --}}
            <div class="flex justify-between">
                <h1 class="font-bold my-4 uppercase text-xl">{{$title}}</h1>
                <span class="fas fa-times cursor-pointer text-red-600" x-on:click.prevent="open = ! open"></span>
            </div>
            {{-- Modal Body --}}
            <div class="w-full mt-4">
               {{$slot}}
            </div>
        </div>
    </div>
</div>
