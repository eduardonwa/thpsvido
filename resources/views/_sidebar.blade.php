<ul 
    x-show="show"
    x-transition:enter="transition ease-out duration-500"
    x-transition:enter-start="transform opacity-0"
    x-transition:enter-end="transform opacity-100"
    x-transition:leave="transition ease-in duration-250"
    x-transition:leave-start="transform opacity-100"
    x-transition:leave-end="transform opacity-0"
    class="absolute flex items-center justify-center flex-col bg-gray-900 shadow-boldxl left-0 top-0 w-40 md:w-44 h-screen"
>
    <div class="mt-14">
        <li class="mb-10">
            <a href="/login" class="flex transition ease-in-out hover:text-green-500">
                @auth
                    <svg 
                        xmlns="http://www.w3.org/2000/svg"
                        height="22"
                        width="22"
                        viewBox="0 0 20 20"
                    >
                        <g class="fill-current" id="Page-1" stroke="none" stroke-width="1" fill="#6b7280" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M11.9321237,9.48208981 C12.110309,10.1493234 11.9376722,10.8907549 11.4142136,11.4142136 C10.633165,12.1952621 9.36683502,12.1952621 8.58578644,11.4142136 C7.80473785,10.633165 7.80473785,9.36683502 8.58578644,8.58578644 C9.10924511,8.06232776 9.8506766,7.88969103 10.5179102,8.06787625 L13.5355339,5.05025253 L14.9497475,6.46446609 L11.9321237,9.48208981 Z M15.5995658,15.7135719 C17.0809102,14.261603 18,12.238134 18,10 C18,5.581722 14.418278,2 10,2 C5.581722,2 2,5.581722 2,10 C2,12.238134 2.91908983,14.261603 4.40043425,15.7135719 C5.99810554,14.63183 7.92526686,14 10,14 C12.0747331,14 14.0018945,14.63183 15.5995658,15.7135719 Z M10,20 C15.5228475,20 20,15.5228475 20,10 C20,4.4771525 15.5228475,0 10,0 C4.4771525,0 0,4.4771525 0,10 C0,15.5228475 4.4771525,20 10,20 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="pl-2">Dashboard</span>
                @endauth
                @guest
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        height="20"
                        width="20"
                        viewBox="0 0 20 20"
                    >
                        <g class="fill-current" id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M4.99999861,5.00218626 C4.99999861,2.23955507 7.24419318,0 9.99999722,0 C12.7614202,0 14.9999958,2.22898489 14.9999958,5.00218626 L14.9999958,6.99781374 C14.9999958,9.76044493 12.7558013,12 9.99999722,12 C7.23857424,12 4.99999861,9.77101511 4.99999861,6.99781374 L4.99999861,5.00218626 Z M1.11022272e-16,16.6756439 C2.94172855,14.9739441 6.3571245,14 9.99999722,14 C13.6428699,14 17.0582659,14.9739441 20,16.6756471 L19.9999944,20 L0,20 L1.11022272e-16,16.6756439 Z" id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <span class="pl-2">Login</span>
                @endguest
            </a>
        </li>

        <li class="mb-10">
            <a  
                href="#search"
                class="flex transition ease-in-out hover:text-green-500">
                <svg
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" 
                    height="24" 
                    viewBox="0 0 24 24" 
                    width="24"
                >
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M15.5 14h-.79l-.28-.27c1.2-1.4 1.82-3.31 1.48-5.34-.47-2.78-2.79-5-5.59-5.34-4.23-.52-7.79 3.04-7.27 7.27.34 2.8 2.56 5.12 5.34 5.59 2.03.34 3.94-.28 5.34-1.48l.27.28v.79l4.25 4.25c.41.41 1.08.41 1.49 0 .41-.41.41-1.08 0-1.49L15.5 14zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                </svg>
                <span class="pl-2">Search</span>
            </a>
        </li>

        <li class="mb-10">
            <a href="#" class="flex transition ease-in-out hover:text-green-500">
                <svg 
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" 
                    height="24" 
                    viewBox="0 0 24 24"
                    width="24"
                >
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z"></path>
                </svg>
                <span class="pl-2">Home</span>
            </a>
        </li>

        <li class="mb-10">
            <a href="#" class="flex transition ease-in-out hover:text-green-500">
                <svg 
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" 
                    height="24" 
                    viewBox="0 0 24 24" 
                    width="24"
                >
                    <path d="M0 0h24v24H0V0z" fill="none"></path>
                    <path d="M4 6H2v16h16v-2H4V6zm18-4H6v16h16V2zM12 14.5v-9l6 4.5-6 4.5z"></path>
                </svg>
                <span class="pl-2">Videos</span>
            </a>
        </li>

        <li class="mb-10">
            <a href="#" class="flex transition ease-in-out hover:text-green-500">
                <svg 
                    fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg" 
                    enable-background="new 0 0 24 24" 
                    height="24" 
                    viewBox="0 0 24 24" 
                    width="24"
                >
                    <g>
                        <path d="M0,0h24v24H0V0z" fill="none"></path>
                        <path d="M19.14,12.94c0.04-0.3,0.06-0.61,0.06-0.94c0-0.32-0.02-0.64-0.07-0.94l2.03-1.58c0.18-0.14,0.23-0.41,0.12-0.61 l-1.92-3.32c-0.12-0.22-0.37-0.29-0.59-0.22l-2.39,0.96c-0.5-0.38-1.03-0.7-1.62-0.94L14.4,2.81c-0.04-0.24-0.24-0.41-0.48-0.41 h-3.84c-0.24,0-0.43,0.17-0.47,0.41L9.25,5.35C8.66,5.59,8.12,5.92,7.63,6.29L5.24,5.33c-0.22-0.08-0.47,0-0.59,0.22L2.74,8.87 C2.62,9.08,2.66,9.34,2.86,9.48l2.03,1.58C4.84,11.36,4.8,11.69,4.8,12s0.02,0.64,0.07,0.94l-2.03,1.58 c-0.18,0.14-0.23,0.41-0.12,0.61l1.92,3.32c0.12,0.22,0.37,0.29,0.59,0.22l2.39-0.96c0.5,0.38,1.03,0.7,1.62,0.94l0.36,2.54 c0.05,0.24,0.24,0.41,0.48,0.41h3.84c0.24,0,0.44-0.17,0.47-0.41l0.36-2.54c0.59-0.24,1.13-0.56,1.62-0.94l2.39,0.96 c0.22,0.08,0.47,0,0.59-0.22l1.92-3.32c0.12-0.22,0.07-0.47-0.12-0.61L19.14,12.94z M12,15.6c-1.98,0-3.6-1.62-3.6-3.6 s1.62-3.6,3.6-3.6s3.6,1.62,3.6,3.6S13.98,15.6,12,15.6z"></path>
                    </g>
                </svg>
                <span class="pl-2">Settings</span>
            </a>
        </li>

        @guest
            <a href="/register">
                <span class="pl-2 text-white hover:text-green-500">Register</span>
            </a>
        @endguest
    </div>
</ul>
