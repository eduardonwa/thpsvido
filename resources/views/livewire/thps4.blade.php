<div 
    x-data="{ flkty: null }"
    wire:init="loadTHPS4"
    x-init="
        flkty = new Flickity($refs.carousel, { imagesLoaded: true, cellAlign: 'left', contain: true, wrapAround: true, pageDots: false, groupCells: true });

        Livewire.hook('message.processed', (message, component) => {
        // Check to make sure received message is for this Livewire component and return if not
        if(component != @this.__instance) return

        // Need to delete this otherwise flickity thinks it is already initialised and won't reinitalise
        delete $refs.carousel.flickityGUID

        // Reinitalise flickity
        flkty = new Flickity($refs.carousel, { imagesLoaded: true, cellAlign: 'left', contain: true, wrapAround: true, pageDots: false, groupCells: true })
        })
    "
    class="mb-8 py-2" 
>
    <div 
        x-ref="carousel"
        class="m-4 h-40"
    >

        @forelse ($thps4Results as $key => $thps4)
            <div 
                class="box w-full h-full relative pb-44 px-1 opacity-60 hover:opacity-100"
                x-data="{show: false}"
                x-on:mouseenter="show = true"
                x-on:mouseleave="show = false"
                wire:key="results-{{ $thps4['_id'] }}"
            >
                <img 
                    class="carousel-cell hover:rounded-md rounded-sm object-contain"
                    src="{{ $thps4['Thumbnail'] }}"
                    alt=""
                >
                    <div
                        class="video-info relative bottom-0 w-full h-full p-1 flex items-center justify-center rounded-md rounded-t-none bg-green-700"
                        x-show="show"
                        x-transition:enter="transition ease-out duration-500"
                        x-transition:enter-start="opacity-0 transform scale-90"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-90"
                    >
                        <a class="relative bottom-4" href="play/thps4/{{ $key }}">
                            <svg
                                fill="currentColor"
                                class="absolute left-2 w-8 h-8 cursor-pointer hover:bg-red-700 rounded-full"
                                viewBox="0 0 20 20" 
                                version="1.1" 
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                                <g id="Page-1" stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
                                    <g id="icon-shape">
                                        <path d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 L2.92893219,17.0710678 Z M15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 Z M7,6 L15,10 L7,14 L7,6 Z" id="Combined-Shape"
                                        ></path>
                                    </g>
                                </g>
                            </svg>
                        </a>

                        <p class="text-sm font-semibold ml-14">
                            {{ $thps4['Title'] }}
                        </p>
                    </div>
            </div>
        @empty
            @foreach (range(1,6) as $thumbnail)
                <div class="animate-pulse mx-auto w-full h-full" wire:key="empty-{{ $thumbnail }}">
                    <p class="flex bg-gray-700 rounded-sm mb-2 mr-2 w-full h-full"></p>
                </div>
            @endforeach
        @endforelse
    </div>
</div>