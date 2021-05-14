<x-master>

        <x-home-banner :banner="$banner"/>

        <div class="px-4">
            @include('_categories')
        </div>

        <div class="px-16">

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THPS1+2</h2>
            @livewire('thps1-plus2')

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THAW</h2>
            @livewire('thaw')

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THUG2</h2>
            @livewire('thug2')

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THUG'S</h2>
            @livewire('thugs')

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THPS4</h2>
            @livewire('thps4')
            
            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THPS3</h2>
            @livewire('thps3')          
        </div>

</x-master>