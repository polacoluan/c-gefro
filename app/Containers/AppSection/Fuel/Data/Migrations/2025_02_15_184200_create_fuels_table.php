<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('fuels', static function (Blueprint $table) {
            $table->id();
            $table->string('fuel');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fuels');
    }
};
