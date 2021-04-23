<x-master>

    <x-category-banner>
        <img src="{{ asset('/img/categories/thpspodcast.svg') }}" alt="">
    </x-category-banner>

    <div class="px-16">

        <div class="p-2">
            <div 
                x-data="{ open: false }" 
                class="text-right md:w-1/4 relative md:inset-x-3/4 border border-gray-500 rounded-md bg-black"
            >
                <button 
                    class="font-bold p-2 w-full text-right"
                    x-on:click="open = !open"
                >
                    Seasons
                </button>
                    <ul
                        x-show="open"
                        x-on:click.away="open = false"
                    >
                        <li x-on:click="$dispatch('dropdown-select', { element: 'one' })" 
                            class="hover:bg-opacity-60 hover:bg-green-500 font-semibold rounded-sm p-1 cursor-pointer"
                        >
                            Season 1
                        </li>
                        <li 
                            x-on:click="$dispatch('dropdown-select', { element: 'two' })" 
                            class="hover:bg-opacity-60 hover:bg-green-500 font-semibold rounded-sm p-1 cursor-pointer"
                        >
                            Season 2
                        </li>
                        <li 
                            x-on:click="$dispatch('dropdown-select', { element: 'three' })" 
                            class="hover:bg-opacity-60 hover:bg-green-500 font-semibold rounded-sm p-1 cursor-pointer"
                        >
                            Season 3
                        </li>
                        <li 
                            x-on:click="$dispatch('dropdown-select', { element: 'four' })" 
                            class="hover:bg-opacity-60 hover:bg-green-500 font-semibold rounded-sm p-1 cursor-pointer"
                        >
                            Season 4
                        </li>
                        <li 
                            x-on:click="$dispatch('dropdown-select', { element: 'five' })" 
                            class="hover:bg-opacity-60 hover:bg-green-500 font-semibold rounded-sm p-1 cursor-pointer"
                        >
                            Season 5
                        </li>
                    </ul>
            </div>

            <div 
                x-data="{ selected: 'five' }" 
                x-on:dropdown-select.window="selected = $event.detail.element"
            >
                <div x-show="selected === 'one'">
                    <x-season-card>
                        <x-slot name="season">
                            Season 1
                        </x-slot>
            
                        @foreach($podcastS1 as $podcast)
                            <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                                        md:flex-row md:justify-start md:pt-0 justify-center 
                                        lg:my-10 lg:mx-24 md:px-10"
                            >
                                <img 
                                    class="md:my-4 rounded-md w-36 md:w-64" 
                                    src="{{$podcast['Thumbnail']}}" 
                                    alt=""
                                >
                                <div class="md:pl-8">
                                    <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                                    <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                                </div>
                            </div>
                        @endforeach
            
                    </x-season-card>
                </div>
                <div x-show="selected === 'two'">
                    <x-season-card>

                        <x-slot name="season">
                            Season 2
                        </x-slot>
            
                        @foreach($podcastS2 as $podcast)
                            <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                                        md:flex-row md:justify-start md:pt-0 justify-center 
                                        lg:my-10 lg:mx-24 md:px-10"
                            >
                                <img 
                                    class="md:my-4 rounded-md w-36 md:w-64" 
                                    src="{{$podcast['Thumbnail']}}" 
                                    alt=""
                                >
                                <div class="md:pl-8">
                                    <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                                    <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                                </div>
                            </div>
                        @endforeach
            
                    </x-season-card>
                </div>
                <div x-show="selected === 'three'">
                    <x-season-card>
                        <x-slot name="season">
                            Season 3
                        </x-slot>
            
                        @foreach($podcastS3 as $podcast)
                            <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                                        md:flex-row md:justify-start md:pt-0 justify-center 
                                        lg:my-10 lg:mx-24 md:px-10"
                            >
                                <img 
                                    class="md:my-4 rounded-md w-36 md:w-64" 
                                    src="{{$podcast['Thumbnail']}}" 
                                    alt=""
                                >
                                <div class="md:pl-8">
                                    <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                                    <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                                </div>
                            </div>
                        @endforeach
            
                    </x-season-card>
                </div>
                <div x-show="selected === 'four'">
                    <x-season-card>

                        <x-slot name="season">
                            Season 4
                        </x-slot>
            
                        @foreach($podcastS4 as $podcast)
                            <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                                        md:flex-row md:justify-start md:pt-0 justify-center 
                                        lg:my-10 lg:mx-24 md:px-10"
                            >
                                <img 
                                    class="md:my-4 rounded-md w-36 md:w-64" 
                                    src="{{$podcast['Thumbnail']}}" 
                                    alt=""
                                >
                                <div class="md:pl-8">
                                    <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                                    <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                                </div>
                            </div>
                        @endforeach
            
                    </x-season-card>
                </div>
                <div x-show="selected === 'five'">
                    <x-season-card>

                        <x-slot name="season">
                            Season 5
                        </x-slot>
            
                        @foreach($podcastS5 as $podcast)
                            <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                                        md:flex-row md:justify-start md:pt-0 justify-center 
                                        lg:my-10 lg:mx-24 md:px-10"
                            >
                                <img 
                                    class="md:my-4 rounded-md w-36 md:w-64" 
                                    src="{{$podcast['Thumbnail']}}" 
                                    alt=""
                                >
                                <div class="md:pl-8">
                                    <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                                    <x-play-now-button type="videos/keyword/{{ $podcast['_id'] }}"/>
                                </div>
                            </div>
                        @endforeach
            
                    </x-season-card>
                </div>
            </div>
    </div>

</x-master>