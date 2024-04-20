@props(['theme', 'currentPage', 'pageTitle'])

@vite('resources/css/style.css')

<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{$pageTitle}}</title>
</head>
<body>
    <header>
        @include('layouts.navigation', ['theme' => $theme, 'currentPage' => $currentPage])
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        @include('layouts.footer', ['theme' => $theme])
    </footer>
</body>
</html>
