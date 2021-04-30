<div>
<div class="text-center md:text-right">
    <select 
        wire:model="page"
        class="bg-black rounded-md border border-gray-500 lg:w-1/4"
    >
        <option value="5">Season 1</option>
        <option value="4">Season 2</option>
        <option value="3">Season 3</option>
        <option value="2">Season 4</option>
        <option value="1">Season 5</option>
    </select>
</div>
<div>
    <x-season-card>        
        @forelse($episodes as $podcast)
            <div wire:key="podcast-{{ $podcast['_id'] }}">
                <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                            md:flex-row md:justify-start md:pt-0 justify-center 
                            lg:my-10 lg:mx-24 md:px-10"
                >
                    <img 
                        class="md:my-4 rounded-md w-36 md:w-64" 
                        src="{{ $podcast['Thumbnail'] }}"
                        alt="Thumbnail Image"
                    >
                    <div class="md:pl-8">
                        <p class="text-sm md:text-lg md:font-bold py-2">{{ $podcast['Title'] }}</p>
                        <x-play-now-button type="videos/keyword/{{$podcast['_id']}}"/>
                    </div>
                </div>
            </div>
        @empty
            @foreach(range(1, 10) as $loadingEpisodes)
                <div class="border-0 md:border-l-0 md:border-r-0 md:border md:rounded-md md:border-gray-500 flex flex-col items-center 
                            md:flex-row md:justify-start md:pt-0 justify-center lg:my-10 lg:mx-24 md:px-10"
                >
                    <div class="animate-pulse text-transparent h-24 md:h-44 md:96 md:my-4 rounded-md w-36 md:w-64 bg-gray-500">thumbnail</div>
                    <div class="md:pl-8 md:py-8 space-y-4">
                        <p class="w-44 md:w-80 mt-4 animate-pulse rounded-md bg-gray-700 text-transparent">title</p>
                        <p class="w-36 mx-auto md:m-0 rounded-md p-2 md:w-32 flex items-center justify-center mb-4
                                bg-gray-700 text-transparent animate-pulse border-gray-700">button</p>
                    </div>
                </div>
            @endforeach
        @endforelse
    </x-season-card>
</div>
</div>