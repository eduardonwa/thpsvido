<div 
    x-data="{ notifications: false }"
    @keydown.escape.window="notifications = false" 
    @click.away="notifications = false"
>
    <svg
        x-on:click="notifications = ! notifications"
        class="w-5 h-5 cursor-pointer"
        viewBox="0 0 20 20" 
        xmlns="http://www.w3.org/2000/svg"
    >
        <g id="Page-1" stroke="none" stroke-width="1" fill="gray" fill-rule="evenodd">
            <g id="icon-shape">
                &lt;<path d="M14,8 C14,5.790861 12.209139,4 10,4 C7.790861,4 6,5.790861 6,8 L6,15 L14,15 L14,8 Z M8.02739671,2.33180314 C5.68271203,3.14769073 4,5.37733614 4,8 L4,14 L1,16 L1,17 L19,17 L19,16 L16,14 L16,8 C16,5.37733614 14.317288,3.14769073 11.9726033,2.33180314 C11.9906226,2.22388264 12,2.11303643 12,2 C12,0.8954305 11.1045695,0 10,0 C8.8954305,0 8,0.8954305 8,2 C8,2.11303643 8.0093774,2.22388264 8.02739671,2.33180314 L8.02739671,2.33180314 Z M12,18 C12,19.1045695 11.1045695,20 10,20 C8.8954305,20 8,19.1045695 8,18 L12,18 L12,18 Z" id="Combined-Shape"></path>
            </g>
        </g>
    </svg>

    <div
        class="relative"
        x-show="notifications"
        x-transition:enter="transition ease-out duration-100"
        x-transition:enter-start="opacity-0 transform scale-90"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-100"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-90"   
    >

        <ul class="rounded-sm bg-white absolute border w-96 h-auto right-0 top-2">
            @forelse ($notifications as $notification)
                <li class="p-2">
                    @if ($notification->type === 'App\Notifications\PaymentReceived')
                        <p>We have received a payment of ${{ $notification->data['amount'] / 100 }} from you.</p>
                    @endif
                </li>
            @empty
                <li class="p-2">You have no unread notifications at this time.</li>
            @endforelse
        </ul>
        
    </div>
</div>