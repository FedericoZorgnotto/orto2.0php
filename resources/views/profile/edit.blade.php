@vite('resources/css/profile.css')

<x-app-layout theme="dark" currentPage="profile" pageTitle="Profile">
    <div id="container">
        <div class="card">
            @include('profile.partials.update-profile-information-form')
        </div>
        <div class="card">
            @include('profile.partials.update-password-form')

        </div>
        <div class="card">
            @include('profile.partials.delete-user-form')

        </div>
    </div>
</x-app-layout>
