@forelse ($oldSchool as $video)
    <ol class="h-auto rounded-md p-2 mt-4 mb-4 list-decimal">
        <li class="w-full h-auto flex items-center justify-between space-x-2 mb-4 text-white
                border-b-2 rounded-sm border-gray-500 border-opacity-40
                hover:bg-green-500 transition ease-in-out hover:bg-opacity-70"
        >
            <a href="/videos/old-school/{{ $video->id }}">
                <img 
                    src="{{ $video->thumbnail }}" 
                    alt="thumbnail vid" 
                    class="w-32 h-auto pl-1 py-1 cursor-pointer transition ease-in-out opacity-1 lg:opacity-75 hover:opacity-100"
                >
            </a>

            <div class="flex flex-col text-center m-4">
                <p class="font-bold">{{ $video->game }}</p>
                <p>{{ $video->title }}</p>
                <p>{{ $video->category }}</p>
            </div>

            <form 
                method="POST"
                action="/admin/removeOldSchool/{{ $video->id }}"
                class="p-1"
            >
                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="rounded-sm p-1 text-sm text-white font-semibold hover:bg-black transition ease-in-out bg-red-600"
                    onclick="return confirm('Are you sure you want to delete this?')"
                >
                    Delete
                </button>
            </form>
        </li>
    </ol>
    @empty
    <div class="text-gray-400 text-center mb-4">
        <p>
            <span>Nothing found for</span>
            <span class="font-bold text-white">Oldschool</span>
            <a class="text-underline transition ease-in-out hover:text-white" href="{{ route('create.oldschool') }}">upload something!</a>
        </p>
    </div>
@endforelse