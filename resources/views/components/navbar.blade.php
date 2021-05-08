<div
    id="navbar"
    class="text-white sm:bg-transparent p-1 flex align-center justify-between px-20 py-4 fixed w-full z-20"
>

<a href="/">
    <img 
        class="opacity-0 md:opacity-100 h-8 hover:fill-current hover:text-gray-100 transition ease-in-out" 
        src="/img/thpsvido-logo-sm.svg" 
        alt="thpsvido-small">
</a> {{-- THPS Vido logo small --}}


<div class="rounded-md relative left-10 space-x-2 flex">
    <a href="/login" class="flex transition ease-in-out text-gray-300 hover:text-green-500">
        @auth
            <svg 
                fill="currentColor"
                xmlns="http://www.w3.org/2000/svg"
                height="24"
                viewBox="0 0 20 20"
                width="24"
            >
                <g class="fill-current" id="Page-1" stroke="none" stroke-width="1" fill="#6b7280" fill-rule="evenodd">
                    <g id="icon-shape">
                        <path d="M11.9321237,9.48208981 C12.110309,10.1493234 11.9376722,10.8907549 11.4142136,11.4142136 C10.633165,12.1952621 9.36683502,12.1952621 8.58578644,11.4142136 C7.80473785,10.633165 7.80473785,9.36683502 8.58578644,8.58578644 C9.10924511,8.06232776 9.8506766,7.88969103 10.5179102,8.06787625 L13.5355339,5.05025253 L14.9497475,6.46446609 L11.9321237,9.48208981 Z M15.5995658,15.7135719 C17.0809102,14.261603 18,12.238134 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 C2,12.238134 2.91908983,14.261603 4.40043425,15.7135719 C5.99810554,14.63183 7.92526686,14 10,14 C12.0747331,14 14.0018945,14.63183 15.5995658,15.7135719 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z" id="Combined-Shape"></path>
                    </g>
                </g>
            </svg>
        @endauth
        @guest
            <span class="pl-2">Login</span>
        @endguest
    </a>

    <a href="#search">
        <svg
            class="ml-1 text-gray-300 cursor-pointer hover:fill-current hover:text-green-500 transition ease-in-out"
            xmlns="http://www.w3.org/2000/svg" 
            height="28" 
            viewBox="0 0 24 24" 
            width="28"
        >
            <path
                fill="currentColor"
                d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"
                >
            </path>
        </svg> 
    </a>
</div> {{-- link to search modal --}}

</div> {{-- top bar --}}