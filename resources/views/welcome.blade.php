<x-master>    
    <div class="my-8">
        
        <x-main-slider/>   

        @include('_categories')

        <div class="px-16">

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THPS4</h2>
            @livewire('thps4')

            <h2 class="text-gray-500 font-semibold pl-4 mb-4">THUG'S</h2>
            @livewire('thugs')           

        </div>

    </div>
    <script>
        function showLoading() {
            document.querySelector('#loading').classList.add('loading');
            document.querySelector('#loading-content').classList.add('loading-content');
        }

        function hideLoading() {
            document.querySelector('#loading').classList.remove('loading');
            document.querySelector('#loading-content').classList.remove('loading-content');
        }
    </script>
</x-master>