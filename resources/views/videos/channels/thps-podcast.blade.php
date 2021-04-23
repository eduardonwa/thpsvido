<x-master>

    <x-category-banner>
        <img src="{{ asset('/img/categories/thpspodcast.svg') }}" alt="">
    </x-category-banner>

    <div class="px-16">

        <x-season-card>

            <x-slot name="season">
                Season 5
            </x-slot>

            @foreach($podcastS5 as $podcast)
                <div class="border rounded-md border-gray-500 flex flex-col items-center lg:flex-row lg:justify-start lg:pt-0 justify-center my-4 pt-2 w-full">
                    <img 
                        class="w-36 lg:w-64" 
                        src="{{$podcast['Thumbnail']}}" 
                        alt=""
                    >
                    <div class="lg:pl-8">
                        <p class="text-sm lg:text-xl lg:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                    </div>
                </div>
            @endforeach

        </x-season-card> {{-- season 5 --}}

        <x-season-card>

            <x-slot name="season">
                Season 4
            </x-slot>

            @foreach($podcastS4 as $podcast)
                <div class="border rounded-md border-gray-500 flex flex-col items-center lg:flex-row lg:justify-start lg:pt-0 justify-center my-4 pt-2 w-full">
                    <img 
                        class="w-36 lg:w-64" 
                        src="{{$podcast['Thumbnail']}}" 
                        alt=""
                    >
                    <div class="lg:pl-8">
                        <p class="text-sm lg:text-xl lg:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                    </div>
                </div>
            @endforeach

        </x-season-card> {{-- season 4 --}}

        <x-season-card>
            <x-slot name="season">
                Season 3
            </x-slot>

            @foreach($podcastS3 as $podcast)
                <div class="border rounded-md border-gray-500 flex flex-col items-center lg:flex-row lg:justify-start lg:pt-0 justify-center my-4 pt-2 w-full">
                    <img 
                        class="w-36 lg:w-64" 
                        src="{{$podcast['Thumbnail']}}" 
                        alt=""
                    >
                    <div class="lg:pl-8">
                        <p class="text-sm lg:text-xl lg:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                    </div>
                </div>
            @endforeach

        </x-season-card> {{-- season 3 --}}

        <x-season-card>

            <x-slot name="season">
                Season 2
            </x-slot>

            @foreach($podcastS2 as $podcast)
                <div class="border rounded-md border-gray-500 flex flex-col items-center lg:flex-row lg:justify-start lg:pt-0 justify-center my-4 pt-2 w-full">
                    <img 
                        class="w-36 lg:w-64" 
                        src="{{$podcast['Thumbnail']}}" 
                        alt=""
                    >
                    <div class="lg:pl-8">
                        <p class="text-sm lg:text-xl lg:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                    </div>
                </div>
            @endforeach

        </x-season-card> {{-- season 2 --}}

        <x-season-card>
            <x-slot name="season">
                Season 1
            </x-slot>

            @foreach($podcastS1 as $podcast)
                <div class="border rounded-md border-gray-500 flex flex-col items-center lg:flex-row lg:justify-start lg:pt-0 justify-center my-4 pt-2 w-full">
                    <img 
                        class="w-36 lg:w-64" 
                        src="{{$podcast['Thumbnail']}}" 
                        alt=""
                    >
                    <div class="lg:pl-8">
                        <p class="text-sm lg:text-xl lg:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                    </div>
                </div>
            @endforeach

        </x-season-card> {{-- season 1 --}}

    </div>

</x-master>