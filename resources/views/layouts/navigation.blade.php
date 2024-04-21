@props(['theme', 'currentPage'])


@auth()
    @if($theme == "light")
        @vite(['resources/css/navbar/navbarLight.css'])
    @elseif($theme == "dark")
        @vite(['resources/css/navbar/navbarDarkLogged.css'])
    @endif
@else
    @if($theme == "light")
        @vite(['resources/css/navbar/navbarLight.css'])
    @elseif($theme == "dark")
        @vite(['resources/css/navbar/navbarDark.css'])
    @endif
@endauth



<nav>
    <div class="header-left">
        <div class="selector">
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
                <div class="visible-Ball-Pointer homePointer"></div>
            @else
                <div class="ball-Pointer homePointer"></div>
            @endif
            <a id="home" href="{{ route("welcome") }}">HOME</a>
        </div>
        @auth
            <div class="account">
                <div class="selector">
                    @if($currentPage == "dashboard")
                        <div id="dashboard" class="visible-Ball-Pointer"></div>
                    @else
                        <div id="dashboard" class="ball-Pointer"></div>
                    @endif
                    <a id="dashboard" href="{{ route("dashboard") }}" class="noMargin">DASHBOARD</a>
                </div>
                <div id="slash" class="slashMarginFix">/</div>
                <div class="selector">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                         this.closest('form').submit();"
                                         class="noMargin">
                            {{ __('LOGOUT') }}
                        </x-dropdown-link>
                    </form>
                    <div class="ball-Pointer logoutPointer"></div>
                </div>
            </div>
        @else
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
                    <a class="noMargin" href="{{ route("login") }}">LOGIN</a>
                    @if($currentPage == "login")
                        <div class="visible-Ball-Pointer"></div>
                    @else
                        <div class="ball-Pointer"></div>
                    @endif
                </div>
            </div>
        @endauth
    </div>
</nav>
