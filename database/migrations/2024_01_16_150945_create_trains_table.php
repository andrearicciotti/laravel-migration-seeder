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
            $table->string('Azienda');
            $table->date('Stazione_di_partenza');
            $table->date('Stazione_di_arrivo');
            $table->date('Orario_di_partenza');
            $table->date('Orario_di_arrivo');
            $table->tinyInteger('Codice_treno')->unsigned();
            $table->tinyInteger('numero_carrozze')->unsigned();
            $table->boolean('In_orario')->default(1);
            $table->boolean('Cancellato')->default(1);
            $table->timestamps();
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
