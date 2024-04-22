<section>
    <div id="profileCard">
        <h1>{{ __('Profile Info') }}</h1>
        <p>{{ __("Update your account's profile information and email address") }}</p>
    </div>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <form method="post" action="{{ route('profile.update') }}">
        @csrf
        @method('patch')
        <div class="user-interactions">
            <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" autofocus
                          autocomplete="name" placeholder="{{__('Name')}}"/>
            <x-input-error :messages="$errors->get('name')" whereError="#"/>
        </div>
        <div class="user-interactions">
            <x-text-input id="email" name="email" type="email" :value="old('email', $user->email)" autofocus
                          autocomplete="username" placeholder="{{__('Email')}}"/>
            <x-input-error :messages="$errors->get('email')" whereError="#"/>
        </div>
        <div id="validation-Button">
            @if (session('status') === 'profile-updated')
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
