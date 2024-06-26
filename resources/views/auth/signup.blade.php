@vite('resources/css/signup.css')

<x-app-layout theme="dark" currentPage="signup" pageTitle="Signup">
    <h3 class="floating-Text">
        Hi there, <span class="italic">sign up</span><br>and start exploring :)
    </h3>
    <div id="card">
        <h1>New account</h1>
        <form method="POST" action="{{ route('signup') }}">
            @csrf
            <div class="user-Account">
                <x-text-input id="userName" type="text" name="name" :value="old('name')"  autofocus
                              autocomplete="name" placeholder="NAME & SURNAME"/>
                <x-input-error :messages="$errors->get('name')" whereError="name"/>
            </div>
            <div class="user-Account user-Account-Margin">
                <x-text-input id="userEmail" type="email" name="email" :value="old('email')"  autofocus
                              autocomplete="email" placeholder="EMAIL"/>
                <x-input-error :messages="$errors->get('email')" whereError="mailSingup"/>
            </div>
            <div class="user-Account-password">
                <x-text-input id="userPassword" type="password" name="password"  autofocus
                              placeholder="PASSWORD" autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password')" whereError="passwordSingup"/>
            </div>
            <div class="pass-confirm">
                <x-text-input id="userPassword" type="password" name="password_confirmation"  autocomplete="new-password" placeholder="PASSWORD CONFIRMATION"/>
                <x-input-error :messages="$errors->get('password_confirmation')" whereError="passwordSingupConfirm"/>
            </div>
            <div id="validation-Buttons">
                <a href="{{ route('welcome') }}">
                    <button type="button" class="login-with-google-btn">
                        Continue with Google
                    </button>
                </a>
                <x-primary-button id="create-Account">
                    {{ __('CREATE') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
