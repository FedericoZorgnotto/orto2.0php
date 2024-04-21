@vite('resources/css/ads/trade.css')
@vite('resources/css/navbar/searchBarDark.css')

<x-app-layout theme="dark" currentPage="trade" pageTitle="Trade">
    <form action="{{ route('ads.index') }}" method="GET" class="mb-3">
        <input type="text" class="search-Bar" name="query" placeholder="Type here, we will find it for you">
    </form>
    <div class="user-Interactions">
        <h1>CLOSE TO YOU</h1>
        <a href="{{ route('ads.create') }}" class="upload-Something">upload something</a>
    </div>
    <div id="container">
        @foreach ($ads as $ad)
            <div class="card">
                <div class="user-Info">
                    <img class="profile-Picture" alt="Profile Picture">
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
                    <h2>{{ $ad->title }}</h2>
                    <h3>{{$ad->description}}</h3>
                    <h3>Price: <span class="italic">{{$ad->price}}</span></h3>
                </div>
                <img class="product-Photo" alt="Product Photo" src="
                @if(isset($ad->images()->first()->base64_image))
                    {{$ad->images()->first()->base64_image}}
                @else
                    {{public_path('images/placeholder.png')}}
                @endif
                ">
                <button class="contact-Seller" href="{{route('ads.show', ['ad' => $ad->id])}}">CONTACT
                </button>
            </div>
        @endforeach
    </div>
</x-app-layout>


{{--

<div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $ad->title }}</h5>
                    <p class="card-text">{{ $ad->description }}</p>
                    <p class="card-text">Prezzo: </p>
                    <!-- Altri dettagli dell'annuncio -->
                    <a href="{{ route('ads.show', $ad->id) }}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>


--}}
