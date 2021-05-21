<div x-data="{ tab: 'queue' }">
    <div class="shadow-lg text-sm rounded-md bg-gray-600 p-2 text-white flex justify-evenly align-center">
        <button :class="{ 'text-yellow-500': tab === 'queue' }" x-on:click="tab = 'queue'">Queue</button>
        <button :class="{ 'text-yellow-500': tab === 'publish' }" x-on:click="tab = 'publish'">Add</button>
    </div>

    <div 
        x-show="tab === 'queue'"
        class="m-4"
    >               
        @foreach ($banner as $banner)
            <ul class="h-auto rounded-md p-2 mt-4 mb-4">
                <li class="w-full h-auto flex items-center justify-between space-x-2 mb-4 text-white
                           border-b-2 rounded-sm border-gray-500 border-opacity-40"
                >
                    <img src="" alt="thumbnail vid" class="border w-32 pl-1 py-1 cursor-pointer transition ease-in-out opacity-1 lg:opacity-75 hover:opacity-100">
                    <div class="flex flex-col align-center">
                        <p class="font-bold">{{ $banner->video_title }}</p>
                        <p class="text-sm">{{$banner->proskaters}}</p>
                        
                        <div class="space-y-2 py-2">
                            <p class="text-sm">{{$banner->play_now_uri}}</p>
                            <p class="text-sm">{{$banner->youtube_url}}</p>
                        </div>

                        <div class="flex space-x-3 pb-3">
                            <a class="{{-- mx-auto text-center w-14 --}} my-auto h-7 rounded-sm p-1 text-sm text-white font-semibold hover:bg-black transition ease-in-out bg-blue-600" href="/{{ $banner->play_now_uri }}">Watch</a>
                            <form 
                                method="POST"
                                action="remove-banner/{{$banner->id}}"
                                class="p-1"
                            >
                                @csrf
                                @method('DELETE')
    
                                <button
                                    type="submit"
                                    class="rounded-sm p-1 text-sm text-white font-semibold hover:bg-black transition ease-in-out bg-red-600"
                                    onclick="return confirm('Are you sure you want to delete this?')"
                                >
                                    Remove
                                </button>
                            </form>
                        </div> {{-- watch & remove buttons --}}

                    </div>
                </li>
            </ul>
        @endforeach
    </div> {{-- queue --}}
            
    <div 
        x-show="tab === 'publish'"
        class="mt-4"
    >
        <form 
            action="publish-banner"
            method="POST"
            class="flex items-center justify-center space-y-4 flex-col w-2/4 mx-auto"
        >   @csrf

            <label for="video_title" class="text-white text-sm">
                Name
            </label>
        
            <input 
                type="text"
                id="video_title"
                name="video_title"
                required
                class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
            >

            @error('video_title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="proskaters" class="text-white text-sm">
                Proskater(s)
            </label>
        
            <input 
                type="text"
                id="proskaters"
                name="proskaters"
                required
                class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
            >

            @error('proskaters')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="youtube_url" class="text-white text-sm">
                Youtube URL
            </label>
        
            <input 
                type="text"
                id="youtube_url"
                name="youtube_url"
                required
                class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
            >

            @error('youtube_url')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="play_now_uri" class="text-white text-sm">
                Play Now URI
            </label>
        
            <input 
                type="text"
                id="play_now_uri"
                name="play_now_uri"
                required
                class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
            >

            @error('play_now_uri')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <button
                type="submit"
                class="rounded-md p-2 text-sm text-black font-semibold hover:bg-green-800 transition ease-in-out bg-green-400"
            >
                Publish
            </button>

        </form>
    </div> {{-- publish --}}

</div>