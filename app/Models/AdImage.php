<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
    protected $fillable = [
        'ad_id', 'base64_image'
    ];

    // Relazione con l'annuncio
    public function ad(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Ad::class);
    }

    // Metodo per creare un'immagine associata all'annuncio
    public static function createAdImage($data)
    {
        return AdImage::create($data);
    }
    // Metodo per rimuovere un'immagine associata all'annuncio
    public static function deleteAdImage($id)
    {
        return AdImage::where('id', $id)->delete();
    }
}
