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
    <x-headers.navbar />
    <main class="h-screen w-full min-h-screen p-4 ">
        {{-- header--}}
        <div class="flex justify-between">
            <x-inputs.searchbar />
            <x-buttons.filter />
        </div>
        <div class="flex flex-row my-4">
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
            <div class="pl-4 h-max flex-grow w-1/5">
                <x-cards.swimlane-card :orders="$orders">
                    <x-cards.task-type-card />
                </x-cards.swimlane-card>
            </div>
        </div>
        </div>

    </main>
</body>

</html>