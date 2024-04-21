@vite('resources/css/contact.css')

<x-app-layout theme="light" currentPage="contact" pageTitle="Contact">
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <h3 id="floating-Text">
        Any question<br>just ask the seller
    </h3>
    <div id="wrapper">
        <div id="seller-Info">
            <div class="user-Info">
                    <div class="user-Score">
                        <h3>{{$ad->user->name}}</h3>
                        <div class="stars">
                            @php
                                $stars = rand(1, 5);
                            @endphp
                            @for ($i = 0; $i < $stars; $i++)
                                <div class="star"></div>
                            @endfor
                            @for($i=$stars; $i<5; $i++)
                                <div class="star gray"></div>
                            @endfor
                        </div>
                </div>
            </div>
            <div class="product-Info">
                <h2 id="title">{{ $ad->title }}</h2>
                <h3>Quantity: <span class="italic" id="quantity">{{$ad->price}}</span></h3>
                <h1 id="bio">Description:</h1>
                <h3>{{$ad->description}}</h3>
            </div>
        </div>
        <div class="card">
            <div id="container">
                <h2>Chat with the seller</h2>
                <div id="chat"></div>
                <div id="interface">
                    <input id="messageContent"></input>
                    <button id="create-Post">SEND</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
