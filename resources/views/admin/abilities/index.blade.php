<x-app-layout>

    <x-slot name="header">
        <div class="flex space-x-2">
            <x-nav-users-link :href="route('users')" :active="request()->routeIs('users')">
                {{ __('Users') }}
            </x-nav-users-link>
            
            <x-nav-users-link :href="route('roles')" :active="request()->routeIs('roles')">
                {{ __('Roles') }}
            </x-nav-users-link>
        
            <x-nav-users-link :href="route('abilities')" :active="request()->routeIs('abilities')">
                {{ __('Abilities') }}
            </x-nav-users-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 
                <div class="p-6 bg-gray-500 flex flex-col text-gray-100">
                    <h1 class="text-lg font-bold my-2">List of all abilities</h1>

                    <form 
                        action="abilities"
                        method="POST" 
                        class="mb-4 w-full"
                    >
                        @csrf

                        <label for="name">Name</label>

                        <input 
                            type="text"
                            name="name"
                            id="name"
                            class="h-8 w-48 lg:w-auto bg-transparent border-l-0 border-t-0 border-r-0 border-b-2 border-gray-100 text-gray-100"
                        >
                        
                        <button
                            type="submit"
                            class="rounded-sm p-2 text-sm text-white font-semibold hover:bg-green-800 transition ease-in-out bg-green-600"
                        >
                            Create
                        </button>

                        @error('name')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </form>

                    <div class="lg:grid lg:grid-cols-2 mt-4 bg-gray-800 p-6 rounded-md shadow-2xl">
                        @foreach ($abilities as $ability)
                            <div class="border border-gray-600 m-2 rounded-sm w-44 lg:border-0 h-auto hover:bg-gray-400 transition ease-in-out hover:text-black hover:shadow-xl">
                                <p class="p-1">{{ $ability->name }}</p>
                                <form 
                                    method="POST"
                                    action="{{ route('abilities.destroy', ['ability' => $ability->id]) }}"
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
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>