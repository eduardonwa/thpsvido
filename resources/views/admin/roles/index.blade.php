<x-app-layout>

    <x-slot name="header">
        
        <div class="flex space-x-2">
            @can('view_users')
                <x-nav-users-link :href="route('users')" :active="request()->routeIs('users')">
                    {{ __('Users') }}
                </x-nav-users-link>
                
                <x-nav-users-link :href="route('roles')" :active="request()->routeIs('roles')">
                    {{ __('Roles') }}
                </x-nav-users-link>
            
                <x-nav-users-link :href="route('abilities')" :active="request()->routeIs('abilities')">
                    {{ __('Abilities') }}
                </x-nav-users-link>
            @endcan
        </div>

        <div class="py-2">
            <a href="#role-settings" class="text-gray-200 text-sm hover:text-green-500">Settings</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 
                <div class="p-6 bg-gray-500 text-gray-100">
                    <h1 class="text-lg font-bold my-2">List of users with roles</h1>
                    
                    <ul class="bg-gray-800 shadow-xl rounded-md">
                        @foreach ($users as $user)
                            @foreach ($user->roles as $role)
                                <li class="p-3 flex align-center justify-between lg:grid lg:grid-cols-2">
                                    <div 
                                        x-data="{toolTip: false}"
                                        x-on:click="toolTip = ! toolTip"
                                        class="font-semibold cursor-pointer"
                                    >

                                        <p 
                                            x-on:click="toolTip"
                                            x-on:click.away="toolTip = false"
                                            class="hover:text-green-500 text-green-300 w-2/4 lg:w-auto my-auto"
                                        >
                                            {{ $role->name }}
                                        </p> {{-- toggle tooltip --}}
                                        
                                        <span 
                                            class="border bg-black text-white text-sm absolute left-20 p-1 rounded-sm"
                                            x-show="toolTip"
                                        >
                                            @foreach ($role->abilities as $name)
                                                <p>{{ $name->name }}</p>
                                            @endforeach
                                        </span> {{-- tooltip  --}}

                                    </div> {{-- span wrapper --}}
                                    
                                    <div class="flex align-items justify-between">
                                        <p class="w-2/4 lg:w-auto my-auto"></p>{{ $user->name }}
                                        <form 
                                            method="POST"
                                            action="{{ route('unassignRole', ['user' => $user->id]) }}"
                                            class="flex justify-center"
                                        >
                                            @csrf
                
                                            <button
                                                type="submit"
                                                class="rounded-sm p-1 text-sm text-white font-semibold hover:bg-red-800 transition ease-in-out bg-red-600"
                                                onclick="return confirm('Are you sure you want to unassign role?')"
                                            >
                                                Unassign
                                            </button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>

    <x-modal-roles name="role-settings">
    </x-modal-roles>

</x-app-layout>