<section>
    <div id="passCard">
        <h1>{{ __('Delete Account') }}</h1>
    </div>
    <p>{{ __('Once your account is deleted, all of its resources and data will be permanently deleted') }}</p>
    <div id="validation-Button-Delete">
        <div id="logout-Option">
            <p style="width: 60%">{{ __('Or you can simply log out and your account data won\'t be deleted') }}</p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                                 onclick="event.preventDefault();
                                         this.closest('form').submit();"
                                 id="logout-Btn">
                    {{ __('LOGOUT') }}
                </x-dropdown-link>
            </form>
        </div>
        <form method="post" action="{{ route('profile.destroy') }}" style="margin-top: 60px">
            @csrf
            @method('delete')
            <div class="user-interactions-delete">
                <x-input-label for="password" :value="__('Current Password')" />
                <x-text-input id="password" name="password" type="password" placeholder="PASSWORD" />
                <x-input-error :messages="$errors->userDeletion->get('password')" where-error="#"/>
            </div>
            <div style="display: flex; justify-content: flex-end">
                <x-danger-button id="delete-account"
                                 x-data=""
                                 x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
                >{{ __('DELETE') }}</x-danger-button>
            </div>

        </form>
    </div>
</section>
