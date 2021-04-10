<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 space-y-2">
                    
                    <form 
                        action="/payments"
                        method="POST"
                    >
                        @csrf

                    <button 
                        type="submit"
                        class="bg-green-500 rounded-md p-4 text-white font-semibold">
                        Make Payment
                    </button>

                    </form>

                    @if(Session::has('success'))
                        <script type="text/javascript">
                            swal({
                                title:'Success!',
                                text:"{{Session::get('success')}}",
                                type:'success'
                            }).then((value) => {
                                //location.reload();
                            }).catch(swal.noop);
                        </script>
                   @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>