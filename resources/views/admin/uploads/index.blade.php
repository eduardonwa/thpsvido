<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2">
            @can('upload_videos')
                <div x-data="{ show: false }">
                    <button 
                        x-on:click="show = ! show" 
                        class="text-white border-b-2 border-transparent hover:border-yellow-500"
                    >
                        Channels
                    </button>
                    
                    <a href="#banner" class="text-white border-b-2 border-transparent hover:border-yellow-500">Home Banner</a>

                    <div 
                        x-show="show"
                        class="my-4 flex space-x-8"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                    >
                        <a class="text-white hover:text-yellow-500 transition ease-in-out" href="{{ route('create.oldschool') }}">
                            <img class="w-28 p-2 transition ease-in-out rounded-md border border-transparent hover:border-green-500" src="{{ asset('/img/categories/oldschool.svg') }}" alt="">
                        </a>
                        <a class="text-white hover:text-yellow-500 transition ease-in-out" href="{{ route('create.thpsnerds') }}">
                            <img class="w-28 p-2 transition ease-in-out rounded-md border border-transparent hover:border-green-500" src="{{ asset('/img/categories/thps-nerds.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                
                
            @endcan
        </div>
        
    </x-slot>
    
    <div class="py-12">
        @include('admin.uploads.oldschool.index')

        @include('admin.uploads.thpsnerds.index')
    </div>
    
    <x-modal-upload name="upload">   
    </x-modal-upload>

    <x-modal-banner name="banner">   
    </x-modal-banner>
    
</x-app-layout>