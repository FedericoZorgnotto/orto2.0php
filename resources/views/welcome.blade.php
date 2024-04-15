<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orto 2.0 | Home</title>

    @vite(["resources/css/home.css"])

</head>
<body>
<header>

</header>

<main class="mt-6">
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
        <img src="{{ URL("/images/logo.png") }}" alt="Orto">
        <div id="centro">
            <div class="wrapper">
                <div class="grid1">
                    <a id="text1" href="{{ route("login") }}">ABOUT</a>
                </div>
                <div class="grid2">
                    <a id="text2" href="{{ route("login") }}">LEARN</a>
                </div>
                <div class="grid3">
                    <a id="text3" href="{{ route("login") }}">BUY</a>
                </div>
                <div class="grid4">
                    <a id="text4up" href="{{ route("login") }}">LOGIN</a>
                    <a id="text4down" href="{{ route("register") }}">SIGNUP</a>
                </div>
                <div class="grid5">
                    <a id="text5" href="{{ route("login") }}">OUR APP</a>
                </div>
                <div class="grid6">
                    <a id="text6" href="{{ route("login") }}">SELL</a>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <h3 id="credits">ORTO 2.0 ©2024</h3>
</footer>
</body>
</html>
