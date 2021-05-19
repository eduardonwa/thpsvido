<x-master>

    <x-category-banner>
        <img src="{{ asset('/img/categories/oldschool.svg') }}" alt="">
    </x-category-banner>

    <div class="px-16">

        <div class="p-2 mt-2">

            <div class="text-center md:text-right">
                <select 
                    class="bg-black rounded-md border border-gray-500 lg:w-1/4"
                >
                    <option value="7">THPS</option>
                    <option value="6">THPS2</option>
                    <option value="5">THPS3</option>
                    <option value="4">THPS4</option>
                    <option value="3">THUG</option>
                    <option value="2">THUG2</option>
                    <option value="1">THAW</option>
                </select>
            </div>
            @foreach ($oldSchool as $video)
                <h1>{{ $video->title }}</h1>
                <img src="https://thpsvido.s3-us-west-2.amazonaws.com/{{ $video->thumbnail }}" alt="">
            @endforeach
        </div>
            
    </div>

</x-master>