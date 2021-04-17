<div>
    <input
        wire:model.debounce.300ms="search"
        id="search"
        type="search"
        autocomplete="off"
        placeholder="Type game title or THPS player"
        class="relative top-2 w-full text-white pl-8 p-2 text-sm bg-gray-600 rounded-lg placeholder-gray-400 placeholder-opacity-100"
    >
    <svg
        class="absolute ml-1 top-24 text-white"
        xmlns="http://www.w3.org/2000/svg" 
        height="24" 
        viewBox="0 0 24 24" 
        width="24"
    >
        <path d="M0 0h24v24H0V0z" fill="none"></path>
        <path d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
    </svg>

    <main class="text-white">
        @if (strlen($search) > 2)
            <ul class="h-auto rounded-md p-2 mt-4 mb-4">
                @forelse($searchResults as $key => $result)
                    <li class="w-full h-auto flex items-center space-x-2 mb-4 
                                border-b-2 rounded-sm border-gray-500 border-opacity-40
                                hover:border-opacity-0 hover:rounded-b-2xl hover:bg-green-500 hover:bg-opacity-70 
                                transition ease-in-out"
                    >
                        <div class="relative">
                            @switch($search)
                                @case($search === 'thps2')
                                <a href="videos/thps2/{{ $key }}">
                                    <x-modal-thumbnail :result="$result"/>
                                </a>
                                    @break

                                @case($search === 'thps3')
                                <a href="videos/thps3/{{ $key }}">
                                    <x-modal-thumbnail :result="$result"/>
                                </a>
                                    @break

                                @default
                                    Default case...
                            @endswitch
{{--                                 @if ($search === 'thps2')
                            <a href="videos/thps2/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thps3')
                            <a href="videos/thps3/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thps4')
                            <a href="videos/thps4/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thug')
                            <a href="videos/thug/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thug2')
                            <a href="videos/thug2/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thaw')
                            <a href="videos/thaw/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thp8')
                            <a href="videos/thp8/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thpg')
                            <a href="videos/thpg/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thps1plus2')
                            <a href="videos/thps1plus2/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @elseif ($search === 'thug pro')
                            <a href="videos/thugpro/{{ $key }}">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @else
                            <a href="">
                                <x-modal-thumbnail :result="$result"/>
                            </a>
                                @endif --}}
                        </div> 
                        <div class="flex flex-col">
                            <p class="flex-1 text-xs md:text-sm h-auto font-bold md:font-extrabold">
                                {{ Illuminate\Support\Str::limit($result['Title'], 40) }} {{-- make it show a fixed number of characters --}}
                            </p>
                            <p class="text-xs md:text-sm">{{ $result['newduration'] }}</p>
                        </div>
                    </li>
                @empty
                    <li class="flex px-4 py-4 text-gray-400 italic text-sm"> 
                        <p class="pl-1"> 
                            No results for 
                                <span class="text-white"> {{ $search }}, </span> 
                                examples: thps1plus2 or Guy2K
                        </p> 
                    </li>
                @endforelse
            </ul> <!-- results -->
        @endif

    </main>
</div>
