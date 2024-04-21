@vite('resources/css/ads/add.css')

<x-app-layout theme="light" currentPage="trade" pageTitle="Add">
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form action="{{ route('ads.store') }}" method="POST">
        <div id="wrapper">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div id="seller-Info">
                <input type="text" id="postTitle" placeholder="POST TITLE" name="title" value="{{ old('title') }}"/>
                <div>
                    <input type="text" id="address" placeholder="ADDRES"/>
                    <div class="negative-Feedback hide" id="addressError">
                        <div class="ball-Negative-Feedback"></div>
                        Add an address
                    </div>
                </div>
                <div>
                    <input type="text" id="quantity" placeholder="QUANTITY"/>
                    <div class="negative-Feedback hide" id="quantityError">
                        <div class="ball-Negative-Feedback"></div>
                        Add a quantity
                    </div>
                </div>
                <div>
                    <input type="text" id="price" placeholder="PRICE" name="price" value="{{ old('price') }}"/>
                    <div class="negative-Feedback hide" id="priceError">
                        <div class="ball-Negative-Feedback"></div>
                        Add a price
                    </div>
                </div>
                <div>
                    <textarea id="postContent" rows="4" cols="50" placeholder="DESCRIPTION" name="description">{{ old('description') }}</textarea>
                    <div class="negative-Feedback hide" id="postContentError">
                        <div class="ball-Negative-Feedback"></div>
                        Add a Description
                    </div>
                </div>
                <button id="create-Post" type="submit">POST</button>
            </div>
            <div class="card">
                <div id="container">
                    <h2>Add some pictures of your product</h2>
                    <input type="file" id="addImage">
                    <img src="" id="previewImage" class="invisible">
                    <button id="add-photos">ADD</button>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
