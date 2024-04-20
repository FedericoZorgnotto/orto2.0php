@vite('resources/css/signup.css')

<x-app-layout theme="dark" currentPage="signup" pageTitle="Signup">
    <h3 class="floating-Text">
        Hi there, <span class="italic">sign up</span><br>and start exploring :)
    </h3>
    <div id="card">
        <h1>New account</h1>
        <form method="POST" action="{{ route('welcome') }}">
            @csrf
            <div id="user-Info">
                <div>
                    <x-text-input id="userName" type="text" name="name" :value="old('name')" required autofocus
                                  autocomplete="name" placeholder="NAME"/>
                    <div class="negative-Feedback hide" id="nameError">
                        <div class="ball-Negative-Feedback"></div>
                        Add your name
                    </div>
                </div>
                <div>
                    <x-text-input id="userSurname" type="text" name="surname" :value="old('surname')" required autofocus
                                  autocomplete="surname" placeholder="SURNAME"/>
                    <div class="negative-Feedback hide" id="surnameError">
                        <div class="ball-Negative-Feedback"></div>
                        Add your surname
                    </div>
                </div>
            </div>
            <div class="user-Account" id="user-Account-Margin">
                <x-text-input id="userUsername" type="text" name="username" :value="old('username')" required autofocus
                              autocomplete="username" placeholder="USERNAME"/>
                <div class="negative-Feedback hide" id="usernameError">
                    <div class="ball-Negative-Feedback"></div>
                    <span id="usernameErrorSpan">Add your Username</span>
                </div>
            </div>
            <div class="user-Account">
                <x-text-input id="userEmail" type="email" name="email" :value="old('email')" required autofocus
                              autocomplete="email" placeholder="EMAIL"/>
                <a id="trylogin">
                    <div class="negative-Feedback hide" id="emailError">
                        <div class="ball-Negative-Feedback"></div>
                        <span id="emailErrorSpan">Add your Email</span>
                    </div>
                </a>
            </div>
            <div class="user-Account">
                <x-text-input id="userPassword" type="password" name="password" required autofocus
                              placeholder="PASSWORD"/>
                <div class="negative-Feedback hide" id="passwordError">
                    <div class="ball-Negative-Feedback"></div>
                    At least 8 characters, stay safe
                </div>
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


{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')"/>--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required--}}
{{--                          autofocus autocomplete="name"/>--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')"/>--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required--}}
{{--                          autocomplete="username"/>--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')"/>--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password"--}}
{{--                          required autocomplete="new-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')"/>--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                          type="password"--}}
{{--                          name="password_confirmation" required autocomplete="new-password"/>--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2"/>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"--}}
{{--               href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
