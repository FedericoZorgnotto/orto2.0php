<?php

namespace Database\Seeders;

use App\Http\Controllers\TemperatureHumidityDataController;
use App\Models\TemperatureHumidityData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TempHubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'temperature' => 25.5,
            'humidity' => 50.5,
            'token' => 'token1',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 54.5,
            'humidity' => 33.5,
            'token' => 'token1',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 32.5,
            'humidity' => 11.5,
            'token' => 'token1',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 44.5,
            'humidity' => 55.5,
            'token' => 'token1',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 22.5,
            'humidity' => 44.5,
            'token' => 'token1',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);




        $data = [
            'temperature' => 15.5,
            'humidity' => 80.5,
            'token' => 'token2',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 14.5,
            'humidity' => 73.5,
            'token' => 'token2',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 12.5,
            'humidity' => 61.5,
            'token' => 'token2',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 14.5,
            'humidity' => 55.5,
            'token' => 'token2',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 22.5,
            'humidity' => 44.5,
            'token' => 'token2',
        ];

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);

        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 24.5,
            'humidity' => 52.5,
            'token' => 'token2',
        ];
        $data['recorded_at'] = now();

        $dataEntry = TemperatureHumidityData::create($data);
        $data = [
            'temperature' => 23.5,
            'humidity' => 51.5,
            'token' => 'token2',
        ];

    }
}
