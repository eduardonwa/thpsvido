<div 
    x-data="{collapse: true}"
>

<div class="flex items-center space-x-2 my-2 rounded-md bg-black">

    <h1 class="font-bold p-2 border-b-2 border-green-500">{{ $season }}</h1>

    <button x-on:click="collapse = ! collapse">
        <svg
            class="w-5 h-5 cursor-pointer" 
            viewBox="0 0 20 20" 
            xmlns="http://www.w3.org/2000/svg"
        >
            <g id="Page-1" stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
                <g id="icon-shape">
                    <path d="M13,10 L13,2 L7,2 L7,10 L2,10 L10,18 L18,10 L13,10 Z" id="Combined-Shape"></path>
                </g>
            </g>
        </svg>
    </button>

</div>

    <div 
        class="my-6 shadow-lg rounded-md p-4 bg-opacity-20 bg-gray-500"
        x-show="collapse"
    >
        {{ $slot }} {{-- foreach season --}}
    </div>
</div>