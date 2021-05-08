<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>THPS Vido</title>
        <link rel="icon" type="image/svg+xml" href="/img/32-vido-icon.svg" sizes="32x32"/>
        <link rel="icon" type="image/svg+xml" href="/img/152-vido-icon.svg" sizes="152x152"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <!-- videojs -->
        <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
        <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
        <script src="{{ asset ('/js/Youtube.min.js') }}"></script>
        
        <style>
            /* Scrollbar modal */
            .scroll-hide {
                scrollbar-width: none;
            }
            /* Thumbnails */
            .box {
                width: 200px;
                height: 200px;
            }
            .box:hover {
                width: 237px;
                height: 237px;
                z-index: 20;
            }
            .video-info {
                opacity: 0;
            }
            .box:hover > .video-info {
                opacity: 1;
            }
            .box:hover + .video-info {
                opacity: 0;
            }
            /* Search Modal */
            .img-modal-search {
                z-index: 10;
            }
            .play-thumb-icon {
                opacity: 0;
            }
            .img-modal-search:hover + .play-thumb-icon {
                opacity: 1;
            }
            /* Flickity */
            .flickity-button:hover {
                background: none;
            }
            .flickity-button-icon {
                fill: white;
            }
            .flickity-prev-next-button.previous {
                left: -50px;
                top: 45px;
            }
            .flickity-prev-next-button.next {
                right: -50px;
                top: 45px;
            }
            .flickity-button {
                background: transparent;
            }
            /* VideoJS */
            .video-js {
                overflow: hidden;
            }
            .video-js .vjs-big-play-button {
                display: none;
            }
            .vjs-waiting .vjs-loading-spinner {
                display: none;
            }
            /* Navbar */
            #navbar {
                background-image: linear-gradient(to bottom, rgb(0, 0, 0), rgb(0, 0, 0)); 
            }
        </style>
        @livewireStyles
    </head>
    <body class="bg-gray-900">
        <x-navbar/>

        <div class="flex text-white min-h-screen">
            
            <div
                x-data="{ show: false }"
                class="z-30 w-24 fixed flex text-gray-500 bg-transparent justify-center items-center"
            >   

                @include('_sidebar')

                <button
                    x-on:click="show = ! show"
                    class="hover:bg-gray-500 p-2 text-white rounded-full absolute top-0 mt-3 transition ease-in-out hover:text-white"
                >
                    <svg
                        fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg" 
                        height="24" 
                        viewBox="0 0 24 24" 
                        width="24"
                    >
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z"></path>
                    </svg>
                </button>
            </div> <!-- sidebar -->

            <div class="w-full">
                <div class="mx-auto">
                    {{ $slot }}
                </div>
            </div> <!-- welcome layout -->

        </div>

        <x-search-modal name="search">   
        </x-search-modal>
        
        <!-- flickity -->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
        @livewireScripts
        <script>

            var win = window,
                docEl = document.documentElement,
                $navbar = document.querySelector('#navbar');

            win.onscroll = function(){
                var sTop = (this.pageYOffset || docEl.scrollTop)  - (docEl.clientTop || 0);
                $navbar.style.backgroundImage =  sTop > 100 ? "linear-gradient(to bottom, rgba(0,0,0,1), rgba(255,0,0,0))":"";
            };

        </script>
    </body>
</html>