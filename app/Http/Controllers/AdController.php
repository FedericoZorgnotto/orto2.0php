<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\Ad;

class AdController extends Controller
{
    // Metodo per visualizzare tutti gli annunci o per cercare annunci
    public function index(Request $request)
    {
        if ($request->has('query')) {
            $ads = Ad::searchAd($request->query('query'));
        } else {
            $ads = Ad::all();
        }
        return view('ads.index', compact('ads'));
    }

    // Metodo per visualizzare un singolo annuncio
    public function show($id)
    {
        $ad = Ad::getAd($id);
        return view('ads.show', compact('ad'));
    }

    // Metodo per visualizzare il form di creazione di un annuncio
    public function create()
    {
        return view('ads.create');
    }

    // Metodo per salvare un nuovo annuncio nel database
    public function store(Request $request)
    {
        // Validazione dei dati
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',

        ]);

        // Se si arriva a questo punto, i dati sono validi

        try {
            $ad = new Ad();
            $ad->title = $request->title;
            $ad->description = $request->description;
            $ad->price = $request->price;
            $ad->user_id = auth()->id();
            $ad->save();

            // Ritorna una risposta di successo
            return redirect()->route('ads.index')->with('success', 'Annuncio creato con successo');
        } catch (Exception $e) {
            // Se si verifica un errore durante il salvataggio dell'annuncio,
            // restituisce l'utente alla pagina di creazione dell'annuncio con un messaggio di errore
            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }
    }

    // Metodo per visualizzare il form di modifica di un annuncio
    public function edit($id)
    {
        $ad = Ad::getAd($id);
        return view('ads.edit', compact('ad'));
    }

    // Metodo per aggiornare un annuncio nel database
    public function update(Request $request, $id)
    {
        $ad = Ad::getAd($id);
        $ad->update($request->all());
        return redirect()->route('ads.show', $ad->id);
    }

    // Metodo per eliminare un annuncio
    public function destroy($id)
    {
        $ad = Ad::getAd($id);
        $ad->delete();
        return redirect()->route('ads.index');
    }
}
