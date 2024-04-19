<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemperatureHumidityDataController;

Route::post('/hubData', [TemperatureHumidityDataController::class, 'store']);
Route::get('/hubData/{token}', [TemperatureHumidityDataController::class, 'show']);
Route::get('/hubData/{token}/{date}', [TemperatureHumidityDataController::class, 'showByDate']);
