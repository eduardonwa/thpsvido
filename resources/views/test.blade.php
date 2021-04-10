<x-modal-layout>

    <a href="#search">Search Videos</a>

    <div class="grid grid-cols-12 p-4 bg-gray-500">
        <aside class="col-span-3 text-sm mr-6">
            <ul>
                <li>Link</li>
                <li>Link</li>
                <li>Link</li>
            </ul>
        </aside>

        <main class="text-sm col-span-9">
            <p class="mb-6">
                would you like to delete your account?
            </p>

            <form
                id="delete-user-form"
                method="POST"
                action="/"
                x-data="{ confirmed: false }"
                @submit.prevent="
                    if (!confirmed) location.hash = '#user-delete-modal';
                "
            >
                @csrf
            
                <p>
                    <button
                        href="#user-delete-modal" 
                        class="font-semibold uppercase bg-blue-500 p-2 text-sm rounded-md text-white"
                    >
                        Yes, delete
                    </button>
                </p>
            </form>
        </main>
    </div>

    <x-search-modal name="search">

        <x-slot name="title">
            Are you sure?
        </x-slot>

        <x-slot name="body">
            Body
        </x-slot>

        <x-slot name="footer">
            <a href="#" class="p-2 transition-all duration-200 hover:bg-red-500 rounded-md bg-gray-500">Cancel</a>
            <a href="#user-delete-modal" class="p-2 transition-all duration-200 bg-blue-600 hover:bg-blue-800 rounded-md bg-blue-500">Continue</a>
        </x-slot>

    </x-search-modal>

    <x-search-modal name="user-delete-modal">
        <x-slot name="title">
            Foo
        </x-slot>

        <x-slot name="body">
            Barr
        </x-slot>

        <x-slot name="footer">
            <a href="#" class="p-2 transition-all duration-200 hover:bg-red-500 rounded-md bg-gray-500">Cancel</a>
            <button 
                class="p-2 transition-all duration-200 bg-blue-600 hover:bg-blue-800 rounded-md bg-blue-500"
                x-on:click="document.querySelector('#delete-user-form').submit()"
            >
                Continue
            </button>
        </x-slot>
    </x-search-modal>

</x-modal-layout>