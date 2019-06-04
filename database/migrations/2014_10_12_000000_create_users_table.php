<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email',128)->unique();
            $table->string('password');

            $table->string('nombre_comercial')->nullable();
            $table->string('tipo_indetif');
            $table->string('num_identif');           
            $table->string('provincia')->nullable();
            $table->string('canton')->nullable();
            $table->string('distrito')->nullable();
            $table->string('barrio')->nullable();
            $table->string('otras_senas')->nullable();
            $table->integer('cod_pais_tel')->nullable();
            $table->integer('tel')->nullable();
            $table->integer('cod_pais_fax')->nullable();
            $table->integer('fax')->nullable();           
            $table->boolean('admin')->default(0);

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
