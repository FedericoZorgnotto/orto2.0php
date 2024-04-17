<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Ad;
use Illuminate\Http\Request;

class CheckAdOwnership
{
    public function handle(Request $request, Closure $next)
    {
        // Ottengo l'ID dell'annuncio dalla richiesta
        $adId = $request->route('ad');

        // Trovo l'annuncio
        $ad = Ad::getAd($adId);

        // Controlla se l'utente autenticato è il proprietario dell'annuncio
        if ($request->user()->id !== $ad->user_id) {
            // Se l'utente non è il proprietario lo reindirizziamo indietro con un messaggio di errore
            return redirect()->back()->with('error', 'Non hai i permessi per modificare questo annuncio.');
        }

        // Se l'utente è il proprietario, passo alla richiesta successiva
        return $next($request);
    }
}
