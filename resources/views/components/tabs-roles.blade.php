<div x-data="{ tab: 'read' }">
    <div class="shadow-lg text-sm rounded-md bg-gray-600 p-2 text-white flex justify-evenly align-center">
        <button :class="{ 'text-yellow-500': tab === 'create' }" x-on:click="tab = 'create'">Create</button>
        <button :class="{ 'text-yellow-500': tab === 'read' }" x-on:click="tab = 'read'">Read</button>
        <button :class="{ 'text-yellow-500': tab === 'abilities' }" x-on:click="tab = 'abilities'">Assign Abilities</button>
    </div>
        
        <div 
            x-show="tab === 'create'"
            class="rounded-md"
        >
            @include('admin.roles.create');
        </div> {{-- Create --}}

        <div 
            x-show="tab === 'read'"
            class="rounded-md text-white"
        >
            <ol class="list-decimal mt-4 flex align-center justify-center flex-col p-4 space-y-5">
                @foreach ($roles as $role)
                    <li class="grid grid-cols-2 align-center justify-between">
                        <div 
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
                                class="border bg-black text-white text-sm absolute left-20 p-1 rounded-sm"
                                x-show="toolTip"
                            >
                                @forelse ($role->abilities as $name)
                                    <p>{{ $name->name }}</p>
                                    @empty
                                        <p>Nothing assigned</p>
                                @endforelse
                            </span>

                        </div>

                        <form 
                            method="POST"
                            action="{{ route('roles.destroy', ['role' => $role->id]) }}"
                            class="flex justify-center"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="rounded-sm p-1 text-sm text-white font-semibold hover:bg-red-800 transition ease-in-out bg-red-600"
                                onclick="return confirm('Are you sure you want to delete this role?')"
                            >
                                Delete
                            </button>
                        </form>
                    </li>
                @endforeach
            </ol>

        </div> {{-- Read --}}

        <div x-show="tab === 'abilities'">
            <div class="mt-4 flex align-center justify-center flex-col p-4 text-white space-y-5">
                @foreach ($roles as $role)
                    <div class="grid grid-cols-2 align-center">

                        <p class="pr-2 my-auto">{{ $role->name }}</p>
                        
                        <form 
                            action="role/{{$role->id}}/assignAbility"
                            method="POST"
                            class="flex align-center justify-center space-x-2"
                        >   @csrf

                            <select 
                                name="abilities[]"
                                id="abilities"
                                multiple
                                class="h-auto text-gray-50 bg-gray-900 rounded-sm"
                            >
                                @foreach ($abilities as $ability)
                                    <option value="{{ $ability->id }}">
                                        {{ $ability->name }}
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
        </div> {{-- Assign abilities --}}
</div>