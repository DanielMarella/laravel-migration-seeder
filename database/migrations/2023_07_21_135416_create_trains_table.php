<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',60);
            $table->string('stazione_di_partenza', 100);
            $table->string('stazione_di_arrivo',100);
            $table->time('orario_di_partenza', $precision = 0);
            $table->time('orario_di_arrivo', $precision = 0);
            $table->mediumInteger('codice_treno')->unsigned();
            $table->mediumInteger('numero_carrozze')->unsigned();
            $table->boolean('in_orario');
            $table->boolean('cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
