<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdImageController extends Controller
{
    public function store(Request $request, $adId)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Trovo l'annuncio associato
        $ad = Ad::getAd($adId);

        // Converto l'immagine in base64
        $imageBase64 = base64_encode(file_get_contents($request->file('image')));

        // Creo un'immagine associata all'annuncio
        $ad->images()->create(['base64_image' => $imageBase64]);

        return redirect()->route('ads.show', $ad->id)->with('success', 'Immagine aggiunta con successo all\'annuncio');
    }
}
