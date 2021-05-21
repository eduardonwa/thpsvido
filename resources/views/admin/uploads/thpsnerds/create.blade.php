<form 
    action="thpsnerds"
    method="POST"
    class="flex items-center justify-center space-y-4 flex-col w-full mx-auto my-5"
    enctype="multipart/form-data"
>   @csrf

    <label 
        for="title" 
        class="text-white font-bold"
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

    <label for="category" class="text-white font-bold">
        Category
    </label>

    <select 
        type="text"
        id="category"
        name="category"
        required
        class="h-10 w-auto shadow-lg border-b-2 text-black"
    >
        <option value="Fun Facts">Fun Facts</option>
        <option value="Behind the Scenes">Behind The Scenes</option>
        <option value="Interview">Interview</option>
        <option value="Other">Other</option>
        <option value="Misc">Misc</option>
        
    </select>

    @error('category')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label 
        for="author" 
        class="text-white font-bold"
    >
        Author
    </label>

    <input 
        type="text"
        id="author"
        name="author"
        required
        class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
    >

    @error('author')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <label for="thumbnail" class="text-white font-bold">
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
        class="flex flex-col text-center space-y-2 text-white"
    >
        <span 
            class="font-bold">
                Youtube ID
        </span>
        
        <span>  
            /watch?v=
            <span class="text-green-500 text-sm italic font-semibold">
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