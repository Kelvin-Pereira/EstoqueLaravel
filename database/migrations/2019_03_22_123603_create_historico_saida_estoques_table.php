<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoSaidaEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_saida_estoques', function (Blueprint $table) {
            $table->increments('id');
            $table->float('valor');
            $table->integer('quantidade');
            $table->integer('estoque_id')->unsigned(); 
            $table->foreign('estoque_id')->references('id')->on('estoques');
            $table->softDeletes();
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
        Schema::dropIfExists('historico_saida_estoques');
    }
}
