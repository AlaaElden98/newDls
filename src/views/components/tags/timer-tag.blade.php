@props([
    'color' => 'green'
])
@if($slot < "3:00")
<span class="px-2 rounded-3xl bg-green-200 font-extrabold text-green-500 bg-opacity-60 text-sm">
    {{ $slot }}
</span>
@else 
<span class="px-2 rounded-3xl bg-red-200 font-extrabold text-red-500 bg-opacity-60 text-sm">
    {{ $slot }}
</span>
@endif