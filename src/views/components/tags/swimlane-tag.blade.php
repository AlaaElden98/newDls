@props([
'color' => 'gray',
'opacity' => '500',
'orders_count' => '0'
])

<div class="w-full mb-5 border-b-4 rounded-sm pb-2 border-{{$color}}-{{$opacity}}">
    <div class="flex flex-row justify-between">
        <h3 class="font-extrabold text-blue-900 text-sm">
            {{ $slot }}
        </h3>
        <x-tags.orders-counter-tag>{{ $orders_count }}</x-tags.orders-counter-tag>
    </div>
</div>