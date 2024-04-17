<!--TODO: cambiare le route con route reali -->

<nav>
    <div class="header-left">
        <div class="selector">
            <div class="ball-Pointer"></div>
            <a href="{{ route("login") }}">TRADE</a>
        </div>
        <div class="selector">
            <div class="ball-Pointer"></div>
            <a href="{{ route("login") }}">PURCHASE</a>
        </div>
        <div class="selector">
            <div class="ball-Pointer"></div>
            <a href="{{ route("login") }}">LEARN</a>
        </div>
    </div>
    <div class="header-right">
        <div class="selector">
            <div class="ball-Pointer"></div>
            <a id="home" href="{{route("login")}}">HOME</a>
        </div>
        <div class="account">
            <div class="selector">
                <div class="ball-Pointer"></div>
                <a class="noMargin" href="{{route("login")}}">SIGNUP</a>
            </div>
            <div id="slash">/</div>
            <div class="selector">
                <a class="noMargin" href="{{route("login")}}" onclick="">LOGIN</a>
                <div class="visible-Ball-Pointer"></div>
            </div>
        </div>
    </div>
</nav>
