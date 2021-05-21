@props(['name'])

<div
    x-data="{ show: false }"
    x-show="show"
    @hashchange.window="
        show = (location.hash === '#{{$name}}') 
    "
    @keydown.escape.window="show = false"
    style="display: none;"
>
    
    <div class="fixed inset-0 bg-black opacity-50"></div>

        <div class="bg-gray-800 shadow-xl max-w-xl sm:mx-auto md:mx-auto rounded-xl fixed scrollbar-hide lg:mt-4
                    inset-0 sm:h-full md:h-full lg:h-3/4 h-full z-50 overflow-hidden overflow-y-auto lg:shadow-boldxl"
        >

            <div class="bg-gray-800">
                <div class="p-2">
                    
                    <div class="flex items-center justify-between p-4">
                        <h3 class="font-semibold text-lg tracking-wide text-white">Upload</h3>
                        
                        <a 
                            href="#" 
                            class="z-10 p-2 transition-all duration-200 hover:bg-gray-700 rounded-md bg-gray-600"
                        >
                            <svg
                                fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" 
                                height="24" 
                                viewBox="0 0 24 24" 
                                width="24"
                            >
                                <path d="M0 0h24v24H0V0z" fill="none"></path>
                                <path d="M18.3 5.71c-.39-.39-1.02-.39-1.41 0L12 10.59 7.11 5.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41L10.59 12 5.7 16.89c-.39.39-.39 1.02 0 1.41.39.39 1.02.39 1.41 0L12 13.41l4.89 4.89c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L13.41 12l4.89-4.89c.38-.38.38-1.02 0-1.4z"></path>
                            </svg>
                        </a> <!-- close button -->
                    
                    </div>

                    <div class="w-full flex justify-center">
                        <img class="w-48" src="{{ asset('/img/categories/thps-nerds.svg') }}" alt="">
                    </div>
                
                    @include('admin.uploads.thpsnerds.create')

                </div>
            </div>

        </div>
</div>