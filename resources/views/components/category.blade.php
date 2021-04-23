@props(['type'])

<div class="md:w-1/5 w-full px-4">
    <a 
        {{ $attributes->merge(['href' => '/'.$type]) }}
        class="bg-gray-800 h-20 lg:h-32 flex justify-center items-center rounded-lg p-4 
               hover:bg-gray-900 border border-indigo-500 transition ease-in-out shadow-boldxl mb-6
                duration-500 transform hover:-translate-y-1 hover:scale-110"
    >
        {{ $slot }}
    </a>
</div>