<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('vehicles', static function (Blueprint $table) {
            $table->id();
            $table->string('plate');
            $table->string('prefix');
            $table->boolean('tracker');
            $table->string('chassis');
            $table->string('engine_number');
            $table->string('renavam');
            $table->string('year');
            $table->string('capacity');
            $table->foreignId('color_id')->constrained('colors');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('fleet_id')->constrained('fleets');
            $table->foreignId('fuel_id')->constrained('fuels');
            $table->foreignId('mark_id')->constrained('marks');
            $table->foreignId('model_id')->constrained('models');
            $table->foreignId('origin_id')->constrained('origins');
            $table->foreignId('status_id')->constrained('status');
            $table->foreignId('sub_unity_id')->constrained('sub_unities');
            $table->foreignId('type_id')->constrained('types');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
