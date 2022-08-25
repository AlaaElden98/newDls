@props([
'href' => '',
'icon' => false,
'disabled' => false,
'classes' => 'mx-1 flex inline-flex px-6 py-2 items-center justify-center border border-transparent text-sm font-extrabold rounded-xl',
'variations' => [
'primary' => 'text-white bg-blue-500',
'secondary' => 'text-white bg-orange-400',
'alert' => 'text-red-500 bg-red-100',
'disabled' => 'text-white bg-gray-200'
],
'variation' => 'primary',
])

<div>
    @if (isset($href) && !empty($href))
    <a href="{{ $href }}" class="{{ $classes }} {{$variations[$variation]}}">
        @if (isset($icon) && !empty($icon))
        @include('components.icons.' . $icon)
        @endif
        <span> {{ $slot }} </span>
    </a>
    @else
    <button class="{{ $classes }} {{$variations[$variation]}}">
        @if (isset($icon) && !empty($icon))
        @include('components.icons.' . $icon)
        @endif
        <span> {{ $slot }} </span>
    </button>
    @endif
</div>