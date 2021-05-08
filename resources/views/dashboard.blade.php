<x-app-layout>
    @can('upload_videos')
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-yellow-100 leading-tight">
                Welcome, {{Auth::user()->name}}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="text-yellow-100 p-6 bg-gray-500">
                        Something
                    </div>
                </div>
            </div>
        </div>
    @endcan

    @cannot('upload_videos')
        <x-slot name="header">
            <p class="text-yellow-100">Welcome, {{Auth::user()->name}}</p>
        </x-slot>
    @endcannot
</x-app-layout>
