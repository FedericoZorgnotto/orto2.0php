@vite(['resources/css/login.css'])

<x-app-layout theme="dark" currentPage="login" pageTitle="Login">
    <x-auth-session-status class="mb-4" :status="session('status')"/>
    <h3 class="floating-Text">
        Hi there, <span class="italic">log in</span><br>and start exploring :)
    </h3>
    <div id="card">
        <h1>My account</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="user-Account">
                <x-text-input id="userEmail" type="email" name="email" :value="old('email')" autofocus
                              autocomplete="email" placeholder="EMAIL"/>
                <x-input-error :messages="$errors->get('email')" whereError="email"/>
            </div>
            <div>
                <x-text-input id="userPassword" type="password" name="password" autofocus
                              placeholder="PASSWORD" autocomplete="current-password"/>
                <x-input-error :messages="$errors->get('password')" whereError="password"/>
            </div>
            <div class="google-btn-Space">
                <a href="{{ route('welcome') }}">
                    <button type="button" class="login-with-google-btn">
                        Continue with Google
                    </button>
                </a>
            </div>
            <div id="validation-Button">
                <x-primary-button id="enter-Account">
                    {{ __('JOIN') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
