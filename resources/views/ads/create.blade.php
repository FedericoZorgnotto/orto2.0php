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

            <div id="seller-Info">
                <input type="text" id="postTitle" placeholder="POST TITLE" name="title" value="{{ old('title') }}"/>
                <x-input-error :messages="$errors->get('title')" whereError="w"/>
                <div>
                    <input type="text" id="price" placeholder="PRICE" name="price" value="{{ old('price') }}"/>
                    <x-input-error :messages="$errors->get('price')" whereError="w"/>
                </div>
                <div>
                    <textarea id="postContent" rows="4" cols="50" placeholder="DESCRIPTION" name="description">{{ old('description') }}</textarea>
                    <x-input-error :messages="$errors->get('description')" whereError="w"/>
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
