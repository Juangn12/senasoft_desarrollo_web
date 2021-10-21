<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedBigInteger('games_id')->index('fk_players_games1_idx');
            $table->unsignedBigInteger('users_id')->index('fk_players_users1_idx');
            $table->enum('order', ['1', '2', '3', '4']);
            $table->enum('role', ['Administrador', 'Invitado']);
            $table->enum('state', ['Activo', 'Inactivo']);
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
        Schema::dropIfExists('players');
    }
}
