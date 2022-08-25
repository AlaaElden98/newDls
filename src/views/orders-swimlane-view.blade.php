<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Storybook') }}</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="h-full font-sans antialiased">
    <x-popup.filter-popup />
    <x-headers.navbar />
    <main class="h-screen w-full min-h-screen p-4">

        {{-- header--}}
        <div class="flex justify-between px-4">
            <div class="flex">
                <x-inputs.searchbar />
                <x-buttons.filter />
            </div>
            <div class="flex">
                <x-buttons.swimlane-view />
                <x-buttons.list-view />
            </div>
        </div>
        <div class="flex flex-row my-4 pr-4">
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="blue" opacity="400" orders_count="23">New</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="yellow" opacity="600" orders_count="14">In Progress</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="red" opacity="600" orders_count="4">Pending Approval</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="blue" opacity="900" orders_count="2">Read to Route</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="yellow" opacity="300" orders_count="5">Rebound</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-tags.swimlane-tag color="green" opacity="500" orders_count="10">Routed</x-tags.swimlane-tag>
                <x-cards.swimlane-card :orders="$orders" />
            </div>
        </div>
        </div>

    </main>
</body>

</html>