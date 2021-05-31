@extends('layouts.form')

@section('form-title')
    Upload - ThpsNerds
@endsection

@section('form-header')
    <div class="flex m-4 text-gray-200 text-lg tracking-wide">
        <a class="underline lg:no-underline hover:text-green-500 transition ease-in-out" href="/admin/uploads">Uploads</a> /
    </div>

    <div class="w-full flex justify-center">
        <img class="w-48 lg:w-80 m-4" src="{{ asset('/img/categories/thps-nerds.svg') }}" alt="">
    </div>
@endsection

@section('form')

    <form
        action="/admin/thpsnerds"
        method="POST"
        class="flex items-center justify-center space-y-4 flex-col w-full mx-auto my-5"
        enctype="multipart/form-data"
    >   @csrf

        <div class="w-2/4 lg:grid lg:grid-cols-2 lg:gap-5 flex flex-col text-center space-y-4 lg:space-y-0">

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

            <div>
                <div>
                    <label 
                        for="thumbnail"
                        class="text-white font-bold cursor-pointer rounded-md bg-yellow-900 hover:bg-yellow-500 transition ease-in-out hover:underline p-2"
                    >
                    <input 
                        type="file"
                        id="thumbnail"
                        name="thumbnail"
                        class="w-auto border hidden"
                        required
                        onchange="previewFile()"
                    >
                        Upload thumbnail
                    </label>
                </div>
            </div>

            <div class="shadow-xl bg-gray-800 rounded-md">
                <img 
                    id="thumbnailPreview" 
                    class="mx-auto p-2 shadow-xl h-48 bg-gray-800 rounded-md text-white text-sm font-semibold" 
                    src="" 
                    alt="Preview"
                >
            </div>

            @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <div>
                <label 
                    for="video_id" 
                    class="flex flex-col text-center text-white font-bold"
                >
                    Youtube ID
                </label>
    
                @error('video_id')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <label for="">
                <input 
                    type="text"
                    id="video_id"
                    name="video_id"
                    required
                    class="h-10 w-full shadow-lg bg-transparent border-b-2 text-gray-100"
                >
                <span class="text-white">  
                    /watch?v=
                    <span class="text-green-500 italic text-sm font-semibold">
                    IHnI8YFGNqI
                    </span> {{-- example ID--}}
                </span> {{-- example wrapper --}}
            </label>

        </div>

        <div class="py-8">
            <button
                type="submit"
                class="rounded-md w-44 p-2 text-sm text-black font-semibold hover:bg-green-800 transition ease-in-out bg-green-400"
            >
                Publish
            </button>
        </div>

    </form>
@endsection

@section('script')
    <script>
        function previewFile() {
            const preview = document.querySelector('#thumbnailPreview');
            const file = document.querySelector('input[type=file]').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;   
            }, false);
            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection