<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemperatureHumidityDataTable extends Migration
{
    public function up(): void
    {
        Schema::create('temperature_humidity_data', function (Blueprint $table) {
            $table->id();
            $table->decimal('temperature', 5, 2);
            $table->decimal('humidity', 5, 2);
            $table->string('token');
            $table->dateTime('recorded_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('temperature_humidity_data');
    }
}
