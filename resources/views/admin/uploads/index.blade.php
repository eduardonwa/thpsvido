<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2">
            @can('upload_videos')
                <div x-data="{ show: false }">
                    <button x-on:click="show = ! show" class="text-white border-b-2 border-transparent hover:border-yellow-500">Channels</button>
                    <a href="#banner" class="text-white border-b-2 border-transparent hover:border-yellow-500">Home Banner</a>

                    <div x-show="show" class="my-4">
                        <a class="text-white hover:text-yellow-500 transition ease-in-out" href="{{ route('create.oldschool') }}">Old School</a>
                        <a class="text-white hover:text-yellow-500 transition ease-in-out" href="{{ route('create.thpsnerds') }}">THPS Nerds</a>
                    </div>
                </div>
                
                
            @endcan
        </div>
        
    </x-slot>
    
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @can('view_videos')
                    <div class="p-6 bg-gray-500 text-gray-100">
                        List of uploaded resources
                    </div>
                @endcan
            </div>
        </div>
        @include('admin.uploads.oldschool.index')

        @include('admin.uploads.thpsnerds.index')
    </div>
    
    <x-modal-upload name="upload">   
    </x-modal-upload>

    <x-modal-banner name="banner">   
    </x-modal-banner>
    
</x-app-layout>