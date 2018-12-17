<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function ($table) {
            $table->increments('id');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('estado_civil')->nullable();
            $table->string('telefone')->nullable();
            $table->string('endereco')->nullable();
            $table->text('usuario')->nullable();
            $table->string('senha')->nullable();
            $table->string('cpf')->unique();
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
        Schema::drop('clientes');
    }
}
