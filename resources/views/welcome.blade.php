@vite('resources/css/style.css')
@vite("resources/css/home.css")

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home</title>
</head>
<body>
<header>
    <img src="{{ URL("/images/logo.png") }}" alt="Orto">
</header>
<main>
    <div class="wrapper">
        <div class="grid1">
            <a id="text1" href="{{ route("about") }}">ABOUT</a>
        </div>
        <div class="grid2">
            <a id="text2" href="{{ route("learn") }}">LEARN</a>
        </div>
        <div class="grid3">
            <a id="text3" href="{{ route("ads.index") }}">BUY</a>
        </div>
        <div class="grid4">
            <a id="text4up" href="{{ route("login") }}">LOGIN</a>
            <a id="text4down" href="{{ route("signup") }}">SIGNUP</a>
        </div>
        <div class="grid5">
            <a id="text5" href="{{ route("ourproduct") }}">OUR PRODUCT</a>
        </div>
        <div class="grid6">
            <a id="text6" href="{{ route("ads.create") }}">SELL</a>
        </div>
    </div>
</main>
<footer>
    @include('layouts.footer', ['theme' => 'dark'])
</footer>
</body>
</html>
