<x-master>

    <x-category-banner>
        <img src="{{ asset('/img/categories/thps-nerds.svg') }}" alt="">
    </x-category-banner>

    <div class="px-16">

        <div class="p-2 mt-2">

            @foreach ($thpsNerds as $video)
                <h1>{{$video->title}}</h1>
                <img src="{{$video->thumbnail}}" alt="">
            @endforeach
        </div>
            
    </div>

</x-master>