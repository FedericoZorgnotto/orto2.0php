@props(['theme', 'currentPage'])

@if($theme == "light")
    @vite(['resources/css/navbar/navbarLight.css'])
@elseif($theme == "dark")
    @vite(['resources/css/navbar/navbarDark.css'])
@endif
<nav>
    <div class="header-left">
        <div class="selector">
            {{-- TODO: trasformare if in component --}}
            @if($currentPage == "trade")
                <div class="visible-Ball-Pointer"></div>
            @else
                <div class="ball-Pointer"></div>
            @endif
            <a href="{{ route("ads.index") }}">TRADE</a>
        </div>
        <div class="selector">
            @if($currentPage == "purchase")
                <div class="visible-Ball-Pointer"></div>
            @else
                <div class="ball-Pointer"></div>
            @endif
            <a href="{{ route("welcome") }}">PURCHASE</a>
        </div>
        <div class="selector">
            @if($currentPage == "learn")
                <div class="visible-Ball-Pointer"></div>
            @else
                <div class="ball-Pointer"></div>
            @endif
            <a href="{{ route("login") }}">LEARN</a>
        </div>
    </div>
    <div class="header-right">
        <div class="selector">
            @if($currentPage == "home")
                <div class="visible-Ball-Pointer"></div>
            @else
                <div class="ball-Pointer"></div>
            @endif
            <a id="home" href="{{ route("welcome") }}">HOME</a>
        </div>
        <div class="account">
            <div class="selector">
                @if($currentPage == "signup")
                    <div class="visible-Ball-Pointer"></div>
                @else
                    <div class="ball-Pointer"></div>
                @endif
                <a class="noMargin" href="{{ route("signup") }}">SIGNUP</a>
            </div>
            <div id="slash">/</div>
            <div class="selector">
                <a class="noMargin" href="{{ route("login") }}" onclick="">LOGIN</a>
                @if($currentPage == "login")
                    <div class="visible-Ball-Pointer"></div>
                @else
                    <div class="ball-Pointer"></div>
                @endif
            </div>
        </div>
    </div>
</nav>
