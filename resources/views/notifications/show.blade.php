<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <h1 class="font-bold my-2">No leídas</h1>

                    <ul>
                        @forelse ($notifications as $notification)
                            <li>
                                @if ($notification->type === 'App\Notifications\PaymentReceived')
                                    <p class="my-2">We have received a payment of ${{ $notification->data['amount'] / 100 }} from you.</p>
                                @endif
                            </li>
                        @empty
                            <li class="my-2">No tienes notificaciones</li>
                        @endforelse
                        
                        <li class="border-t-2">
                            <h1 class="font-bold my-2">Leídas</h1>
                            
                            <p>Mostrar notificaciones</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>