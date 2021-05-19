<div x-data="{ tab: '' }">
    <div class="shadow-2xl rounded-md p-2 flex justify-evenly align-center">
        <button :class="{ 'bg-green-600 rounded-md': tab === 'oldschool' }" x-on:click="tab = 'oldschool'">            
            <img
                class="cursor-pointer w-44 rounded-md p-4 hover:bg-green-500 hover:bg-opacity-70"
                src="{{asset('/img/categories/oldschool.svg')}}"
                alt="Old School THPS gameplay"
            >
        </button>
        <button :class="{ 'bg-green-600 rounded-md': tab === 'nerds' }" x-on:click="tab = 'nerds'">
            <img
                class="cursor-pointer w-44 rounded-md p-4 hover:bg-green-500 hover:bg-opacity-70"
                src="{{asset('/img/categories/thps-nerds.svg')}}"
                alt="Old School THPS gameplay"
            >
        </button>
    </div>

    <div 
        x-show="tab === 'nerds'"
        class="m-4"
    >               
        @include('admin.uploads.oldschool.index')
    </div> {{-- index --}}
            
    <div 
        x-show="tab === 'oldschool'"
        class="mt-4"
    >
        @include('admin.uploads.oldschool.create')
    </div> {{-- new videos form --}}

</div>