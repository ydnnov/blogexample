<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @livewireScripts
    @stack('scripts')
</head>
<body class="flex flex-col min-h-screen">
<livewire:app-layout.header />
<main class="flex-grow bg-gray-200">
    @yield('content')
</main>
<livewire:app-layout.footer />
</body>
</html>
