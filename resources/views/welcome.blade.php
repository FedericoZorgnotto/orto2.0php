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
        @auth()
            <div class="grid4">
                <a id="text4up" href="{{ route("profile.edit") }}" style="margin-left: 45px">PROFILE</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" id="text4down"
                                     onclick="event.preventDefault();
                                         this.closest('form').submit();"
                                     class="noMargin">
                        {{ __('LOGOUT') }}
                    </x-dropdown-link>
                </form>
            </div>
        @else
            <div class="grid4">
                <a id="text4up" href="{{ route("login") }}">LOGIN</a>
                <a id="text4down" href="{{ route("signup") }}">SIGNUP</a>
            </div>
        @endauth
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
