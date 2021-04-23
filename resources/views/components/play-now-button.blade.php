@props(['type' => '/'])

<a
    class="border rounded-md p-2 md:w-32 flex items-center justify-center mb-4
        bg-black font-bold border-gray-700 hover:bg-indigo-500 hover:shadow-xl transition ease-in-out"
    {{ $attributes->merge(['href' => '/'.$type]) }}
>
    <svg
        class="w-6 h-6"
        viewBox="0 0 20 20" 
        xmlns="http://www.w3.org/2000/svg"
    >
        <g id="Page-1" stroke="none" stroke-width="1" fill="gainsboro" fill-rule="evenodd">
            <g id="icon-shape">
                <polygon id="Rectangle-161" points="4 4 16 10 4 16"></polygon>
            </g>
        </g>
    </svg>
    Play Now
</a>