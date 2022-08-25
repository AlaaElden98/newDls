<div class="h-fit bg-gray-100 rounded-2xl w-full p-2">
    {{ $slot }}
    @foreach($orders as $order)
    <div class="w-full h-30 bg-white rounded-3xl p-3.5 mb-2 flex flex-col justify-center">
        <div class="flex flex-row justify-between">
            <h3 class="font-extrabold text-blue-900 text-sm">
                {{ $order['order_number'] }}
            </h3>
             <x-tags.timer-tag> {{ $order['time'] }} </x-tags.timer-tag>
         </div>
        <div class="flex flex-col">
            <p class="text-blue-900 text-sm pt-1">
                {{ $order['created_at'] }}
            </p>
            <p class="text-blue-900 text-sm pt-1">
                <span class="text-blue-900 text-sm"> {{ $order['user_name'] }} </span>
            </p>
        </div>
    </div>
    @endforeach
</div>