<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->unsignedInteger('identification')->unique('identificacion_UNIQUE');
            $table->string('name',60)->index();
            $table->string('email',130)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('state', ['Activo', 'Inactivo'])->default('Activo');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
