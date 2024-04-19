@props(['theme', 'currentPage'])
@vite(['resources/css/style.css'])

@if($theme == "light")
    @vite(['resources/css/navbar/navbarLight.css'])
    <nav>
        <div class="header-left">
            <div class="selector">
                @if($currentPage == "trade")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("login") }}">TRADE</a>
            </div>
            <div class="selector">
                @if($currentPage == "purchase")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("login") }}">PURCHASE</a>
            </div>
            <div class="selector">
                @if($currentPage == "learn")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("login") }}">LEARN</a>
            </div>
        </div>
        <div class="header-right">
            <div class="selector">
                @if($currentPage == "home")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a id="home" href="{{route("welcome")}}">HOME</a>
            </div>
            <div class="account">
                <div class="selector">
                    @if($currentPage == "signup")
                        <div class="ball-Pointer"></div>
                    @else
                        <div class="visible-Ball-Pointer"></div>
                    @endif
                    <a class="noMargin" href="{{route("login")}}">SIGNUP</a>
                </div>
                <div id="slash">/</div>
                <div class="selector">
                    <a class="noMargin" href="{{route("login")}}" onclick="">LOGIN</a>
                    @if($currentPage == "login")
                        <div class="ball-Pointer"></div>
                    @else
                        <div class="visible-Ball-Pointer"></div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
@elseif($theme == "dark")
    @vite(['resources/css/navbar/navbarDark.css'])
    <nav>
        <div class="header-left">
            <div class="selector">
                @if($currentPage == "trade")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("#") }}">TRADE</a>
            </div>
            <div class="selector">
                @if($currentPage == "purchase")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("#") }}">PURCHASE</a>
            </div>
            <div class="selector">
                @if($currentPage == "learn")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a href="{{ route("#") }}">LEARN</a>
            </div>
        </div>
        <div class="header-right">
            <div class="selector">
                @if($currentPage == "home")
                    <div class="ball-Pointer"></div>
                @else
                    <div class="visible-Ball-Pointer"></div>
                @endif
                <a id="home" href="{{route("welcome")}}">HOME</a>
            </div>
            <div class="account">
                <div class="selector">
                    @if($currentPage == "signup")
                        <div class="ball-Pointer"></div>
                    @else
                        <div class="visible-Ball-Pointer"></div>
                    @endif
                    <a class="noMargin" href="{{route("login")}}">SIGNUP</a>
                </div>
                <div id="slash">/</div>
                <div class="selector">
                    <a class="noMargin" href="{{route("login")}}" onclick="">LOGIN</a>
                    @if($currentPage == "login")
                        <div class="ball-Pointer"></div>
                    @else
                        <div class="visible-Ball-Pointer"></div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
@endif
