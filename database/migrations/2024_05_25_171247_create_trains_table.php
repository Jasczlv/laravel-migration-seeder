<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->string('azienda', 150);
            $table->string('stazione_di_partenza', 150);
            $table->string('stazione_di_arrivo', 150);
            $table->date('data_partenza', 15);
            $table->time('orario_di_partenza');
            $table->time('orario_di_arrivo');
            $table->string('codice_treno', 20);
            $table->tinyInteger('numero_carrozze');
            $table->boolean('in_orrario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
