<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TemperatureHumidityData;

class TemperatureHumidityDataController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'temperature' => 'required|numeric',
            'humidity' => 'required|numeric',
            'token' => 'required|string',
        ]);

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);

        return response()->json(['message' => 'Data saved successfully'], 201);
    }
    public function show($token)
    {
        $data = TemperatureHumidityData::getTemperatureHumidityData($token);

        return response()->json($data);
    }
    public function showByDate($token, $date)
    {
        $data = TemperatureHumidityData::getTemperatureHumidityDataByDate($token, $date);

        return response()->json($data);
    }

}
