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
                    <h1 class="text-lg font-bold my-2">List of all users</h1>
                        <div class="bg-gray-800 shadow-xl rounded-md">
                            @foreach ($users as $user)

                                <div class="p-3 flex align-center justify-start lg:grid lg:grid-cols-2">
                                    <p class="w-2/4 lg:w-auto my-auto">{{ $user->name }}</p>
                                    <form 
                                        action="{{ route('assignRole', ['user' => $user->id]) }}"
                                        method="POST"
                                        class="flex align-center justify-center space-x-2"
                                    >   @csrf

                                        <select 
                                            name="role"
                                            id="role"
                                            class="w-3/4 lg:w-auto h-auto text-gray-50 bg-gray-900 rounded-sm"
                                        >
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        <button 
                                            type="submit"
                                            class="my-auto rounded-sm p-1 h-8 text-sm text-white font-semibold hover:bg-green-800 transition ease-in-out bg-green-600"
                                        >
                                            Assign
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