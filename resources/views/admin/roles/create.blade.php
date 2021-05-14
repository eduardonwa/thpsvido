<form 
    action="roles" 
    method="POST"
    class="mt-4 flex items-center justify-center space-y-4 flex-col w-2/4 mx-auto"
>
    @csrf

    <label for="name" class="text-white text-sm">
        Name
    </label>

    <input 
        type="text"
        id="name"
        name="name"
        class="h-10 w-auto shadow-lg bg-transparent border-b-2 text-gray-100"
    >

    @error('name')
        <p class="text-red-500">{{ $message }}</p>
    @enderror

    <button
        type="submit"
        class="rounded-md p-2 text-sm text-black font-semibold hover:bg-green-800 transition ease-in-out bg-green-400"
    >
        Submit
    </button>
</form>