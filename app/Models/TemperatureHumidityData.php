<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemperatureHumidityData extends Model
{
    protected $fillable = ['temperature', 'humidity', 'token', 'recorded_at'];

    public static function getTemperatureHumidityData($token)
    {
        return self::where('token', $token)->orderBy('recorded_at', 'desc')->get();
    }

    public static function getTemperatureHumidityDataByDate($token, $date)
    {
        return self::where('token', $token)->whereDate('recorded_at', $date)->orderBy('recorded_at', 'desc')->get();
    }
}
