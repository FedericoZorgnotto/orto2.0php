<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Token;
use Exception;
use Illuminate\Http\Request;

class TokenController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $tokens = $user->tokens;
        return view('tokens.index',compact("tokens"));
    }

    public function store()
    {
        $user = auth()->user();

        try {
            $token = new Token();
            $token->user_id = auth()->id();
            $token->token = $user->createToken('api-token')->plainTextToken;
            $token->save();

            return redirect()->route('token.index')->with('success', 'Annuncio creato con successo');
        } catch (Exception $e) {

            return redirect()->back()->withInput()->withErrors([$e->getMessage()]);
        }

    }

    public function destroy($tokenId)
    {
        $user = auth()->user();

        $user->tokens()->where('id', $tokenId)->delete();

        return redirect()->route('tokens.index')->with('success', 'Token eliminato con successo');
    }

}
