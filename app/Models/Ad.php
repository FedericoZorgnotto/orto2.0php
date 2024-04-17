<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'user_id',
    ];
    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(AdImage::class);
    }

    public static function createAd($data)
    {
        return Ad::create($data);
    }
    public static function updateAd($data, $id)
    {
        return Ad::where('id', $id)->update($data);
    }
    public static function deleteAd($id)
    {
        return Ad::where('id', $id)->delete();
    }
    public static function getAd($id)
    {
        return Ad::where('id', $id)->first();
    }
    public static function searchAd($query)
    {
        return Ad::where('title', 'like', '%'.$query.'%')
            ->orWhere('description', 'like', '%'.$query.'%')
            ->get();
    }
    public static function userAds($user_id)
    {
        return Ad::where('user_id', $user_id)->get();
    }
    public static function userAdsCount($user_id)
    {
        return Ad::where('user_id', $user_id)->count();
    }
    public function daysSincePosted()
    {
        return $this->created_at->duffInDays(now());
    }

}
