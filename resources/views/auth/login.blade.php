<!-- TODO: sistemare grafica -->

@vite('resources/css/login.css')

<x-app-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <h3 class="floating-Text">
        Hi there, <span class="italic">log in</span><br>and start exploring :)
    </h3>

    <div id="card">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <h1>My account</h1>
            <div class="user-Account">
                <input type="email" id="userEmail" name="email" value="{{old('email')}}"
                       placeholder="EMAIL OR USERNAME"/>
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
            </div>
            <div class="user-Account">
                <input type="password" id="userPassword" value="{{__('Password')}}" placeholder="PASSWORD"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2"/>

                <div id="forgot-Btn">
                    <div class="negative-Feedback hide" id="passwordError">
                        <div class="ball-Negative-Feedback"></div>
                        <span id="passwordErrorSpan">Write something</span>
                    </div>
                    <a href="{{ route("login") }}">
                        <div id="forgot">Forgot?</div>
                    </a>
                </div>
            </div>
            <div class=" user-Account">
                <a href="{{ route("login") }}">
                    <button type="button" class="login-with-google-btn">
                        Continue with Google
                    </button>
                </a>
            </div>
            <div id="validation-Button">
                <button id="enter-Account">JOIN</button>
            </div>
        </form>
    </div>
</x-app-layout>
{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ms-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
