<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->string('codigo', 5)->unique('codigo_UNIQUE');
            $table->unsignedBigInteger('programmer_id')->index('fk_Partida_Cartas_idx');
            $table->unsignedBigInteger('modulo_id')->index('fk_Partida_Cartas1_idx');
            $table->unsignedBigInteger('type_error_id')->index('fk_Partida_Cartas2_idx');
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
        Schema::dropIfExists('games');
    }
}
