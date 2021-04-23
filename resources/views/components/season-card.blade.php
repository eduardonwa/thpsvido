<div class="flex items-center space-x-2 my-2 rounded-md bg-black">
    <h1 class="font-bold p-2 border-b-2 border-green-500">{{ $season }}</h1>
</div>
<div class="my-6 shadow-lg rounded-md p-4 bg-opacity-20 bg-gray-500">
    {{ $slot }} {{-- foreach season --}}
</div>
