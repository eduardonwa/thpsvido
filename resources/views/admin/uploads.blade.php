<x-app-layout>
    <x-slot name="header">

        <div class="flex space-x-2">
            @can('upload_videos')
                <a href="#upload" class="text-white">Upload Video</a>
                <a href="#banner" class="text-white">Home Banner</a>
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

    </div>
    
    <x-modal-upload name="upload">   
    </x-modal-upload>

    <x-modal-banner name="banner">   
    </x-modal-banner>
    
</x-app-layout>