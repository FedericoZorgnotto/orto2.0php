<section>
    <div id="passCard">
        <h1>{{ __('Your Password') }}</h1>
    </div>
    <p style="margin-bottom: 25px">{{ __('Ensure your account is using a long, random password to stay secure') }}</p>
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div class="user-interactions-wLabel">
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input id="update_password_current_password" name="current_password" type="password" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('current_password')" whereError="#"/>
        </div>
        <div class="user-interactions-wLabel">
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input id="update_password_password" name="password" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" whereError="#"/>
        </div>
        <div class="user-interactions-wLabel">
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" whereError="#"/>
        </div>
        <div id="validation-Button-pass">
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                >{{ __('All Saved ;)') }}</p>
            @endif
            <x-primary-button id="enter-Account">
                {{ __('SAVE') }}
            </x-primary-button>
        </div>
    </form>
</section>
