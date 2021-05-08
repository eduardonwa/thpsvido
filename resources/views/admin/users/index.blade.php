<x-app-layout>

    <x-slot name="header">
        <div class="flex space-x-2">
            <button class="text-gray-100 hover:text-yellow-500 font-bold">
                Roles
            </button>

            <button class="text-gray-100 hover:text-yellow-500 font-bold">
                Abilities
            </button>
        </div>

        <div class="py-2">
            <a href="#role-settings" class="text-gray-200 text-sm hover:text-green-500">Settings</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                 
                <div class="p-6 bg-gray-500 flex flex-col text-gray-100">
                    <h1 class="text-xl my-2">Roles</h1>
                    <ul>
                        @foreach ($users as $user)
                            @foreach ($user->roles as $role)
                                <li>
                                    <span 
                                        x-data="{toolTip: false}"
                                        x-on:click="toolTip = ! toolTip"
                                        class="font-semibold cursor-pointer"
                                    >

                                        <span 
                                            x-on:click="toolTip"
                                            x-on:click.away="toolTip = false"
                                            class="hover:text-green-500 text-green-300"
                                        >
                                            {{ $role->name }}
                                        </span> {{-- toggle tooltip--}}

                                        <span 
                                            class="bg-black text-white text-sm absolute p-1 rounded-sm"
                                            x-show="toolTip"
                                        >
                                            @foreach($roles as $role)
                                                @if ($role->name === 'owner')
                                                    @foreach ($role->abilities as $ability)
                                                        <p>{{$ability->name}}</p>
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </span> {{-- tooltip  --}}

                                    </span> {{-- span wrapper --}}
                                    {{ $user->name }}
                                </li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <x-roles-modal name="role-settings">
    </x-roles-modal>

</x-app-layout>