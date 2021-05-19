<form 
    action="old-school"
    method="POST"
    class="flex items-center justify-center space-y-4 flex-col w-full mx-auto"
    enctype="multipart/form-data"
>   @csrf

    <label 
        for="game" 
        class="text-white text-sm font-bold"
    >
        Game
    </label>

    <select 
        type="text"
        id="game"
        name="game"
        required
        class="h-10 w-auto shadow-lg border-b-2 text-black"
    >
        <option value="THPS">THPS</option>
        <option value="THPS2">THPS2</option>
        <option value="THPS3">THPS3</option>
        <option value="THPS4">THPS4</option>
        <option value="THUG">THUG</option>
        <option value="THUG2">THUG2</option>
        <option value="THAW">THAW</option>
        
    </select>

    @error('game')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label 
        for="title" 
        class="text-white text-sm font-bold"
    >
        Video Title
    </label>

    <input 
        type="text"
        id="title"
        name="title"
        required
        class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
    >

    @error('title')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label for="category" class="text-white text-sm font-bold">
        Category
    </label>

    <select 
        type="text"
        id="category"
        name="category"
        required
        class="h-10 w-auto shadow-lg border-b-2 text-black"
    >
        <option value="improv">Improv</option>
        <option value="no_manual">No Manual</option>
        <option value="team_video">Team Video</option>
        <option value="misc">Misc</option>
        
    </select>

    @error('category')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label for="thumbnail" class="text-white text-sm font-bold">
        Thumbnail
    </label>

    <input 
        type="file"
        id="thumbnail"
        name="thumbnail"
        class="w-auto border hidden cursor-pointer"
        required
    >

    @error('thumbnail')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label 
        for="video_id" 
        class="flex flex-col text-center space-y-2 text-white text-sm"
    >
        <span 
            class="font-bold">
                Youtube ID
        </span>
        
        <span>  
            /watch?v=
            <span class="text-green-500 italic font-semibold">
                IHnI8YFGNqI
            </span> {{-- example ID--}}
        </span> {{-- example wrapper --}}
    </label>

    <input 
        type="text"
        id="video_id"
        name="video_id"
        required
        class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
    >

    @error('video_id')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <button
        type="submit"
        class="rounded-md p-2 text-sm text-black font-semibold hover:bg-green-800 transition ease-in-out bg-green-400"
    >
        Publish
    </button>

</form> 