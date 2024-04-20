@vite('resources/css/ads/trade.css')
@vite('resources/css/navbar/searchBarDark.css')

<x-app-layout theme="dark" currentPage="trade" pageTitle="Trade">
    <form action="{{ route('ads.index') }}" method="GET" class="mb-3">
        <input type="text" class="search-Bar" name="query" placeholder="Type here, we will find it for you">
    </form>
    <div class="user-Interactions">
        <h1>CLOSE TO YOU</h1>
    </div>
    <div id="container">
        @foreach ($ads as $ad)
            <div class="card">
                <div class="user-Info">
                    <img class="profile-Picture" alt="Profile Picture">
                    <div class="user-Score">
                        <h3>John Smith</h3>
                        <div class="stars">
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star"></div>
                            <div class="star gray"></div>
                        </div>
                    </div>
                </div>
                <div class="product-Info">
                    <h2>{{ $ad->title }}</h2>
                    <h3>Via Torino 40, Saluzzo, CN</h3>
                    <h3>Quantity: <span class="italic">5kg</span></h3>
                </div>
                <img class="product-Photo"  alt="Product Photo">
                <button class="contact-Seller"
                        >CONTACT
                </button>
            </div>















            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $ad->title }}</h5>
                    <p class="card-text">{{ $ad->description }}</p>
                    <p class="card-text">Prezzo: </p>
                    <!-- Altri dettagli dell'annuncio -->
                    <a href="{{ route('ads.show', $ad->id) }}" class="btn btn-primary">Visualizza</a>
                </div>
            </div>





        @endforeach
    </div>
</x-app-layout>
