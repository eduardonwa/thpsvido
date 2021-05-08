<div x-data="{ tab: 'read' }">
    <div class="shadow-lg text-sm rounded-md bg-gray-600 p-2 text-white flex justify-evenly align-center">
        <button :class="{ 'text-yellow-500': tab === 'create' }" x-on:click="tab = 'create'">Create</button>
        <button :class="{ 'text-yellow-500': tab === 'read' }" x-on:click="tab = 'read'">Read</button>
        <button :class="{ 'text-yellow-500': tab === 'update' }" x-on:click="tab = 'update'">Update</button>
    </div>
        
        <div 
            x-show="tab === 'create'"
            class="rounded-md"
        >
            @include('admin.roles.create'/* , ['roles' => $role] */);
        </div>

        <div 
            x-show="tab === 'read'"
            class="rounded-md text-white"
        >
            <ol class="list-decimal mx-auto p-8">
                @foreach ($roles as $role)
                    <li>{{ $role->name }}</li>
                @endforeach
            </ol>
        </div>

        <div x-show="tab === 'update'">Update</div>
</div>