<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2">
            <a href="#upload" class="text-gray-100 hover:text-yellow-500 font-bold">
                New video
            </a>
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

    </div>
    
    <x-upload-modal name="upload">   
    </x-upload-modal>
    
</x-app-layout>