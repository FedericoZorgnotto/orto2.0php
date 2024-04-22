@vite('resources/css/ourproduct.css')

<x-app-layout theme="dark" currentPage="purchase" pageTitle="Our product">
    <div id="container">
        <div class="card">
            <img src="{{ URL("/videos/showcase1.gif") }}" alt="Orto">
        </div>
        <div id="middle">
            <div id="productName">
                <h1>Orto</h1>
                <h1>Thing.</h1>
            </div>
            <h3 id="phrase">"Monitor the health of your plants and vegetables with <span class="italic">ease</span>"</h3>
            <div id="validation-Button">
                <x-primary-button id="enter-Account" onclick="location.href='{{route('503')}}'">
                    {{ __('BUY') }}
                </x-primary-button>
            </div>
        </div>
        <div class="card">
            <img src="{{ URL("/videos/showcase2.gif") }}" alt="Orto">
        </div>
    </div>
</x-app-layout>
