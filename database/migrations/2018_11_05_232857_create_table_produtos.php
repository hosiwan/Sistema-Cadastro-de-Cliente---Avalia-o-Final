<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProdutos extends Migration
{
    public function up()
    {
        Schema::create('produtos', function($table) {
            $table->increments('id');
            $table->string('nome', 75);
            $table->string('descricao', 100)->nullable();
            $table->float('preco', 8, 2);
            $table->integer('quantidade');
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
        Schema::drop('produtos');
    }
}
