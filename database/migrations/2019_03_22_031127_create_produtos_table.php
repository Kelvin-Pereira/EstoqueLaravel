<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',30);
            $table->float('preco');
            $table->string('codigo_barra',30)->nullable();
            $table->string('descricao',255)->nullable();
            $table->integer('categoria_produtos_id')->unsigned(); 
            $table->foreign('categoria_produtos_id')->references('id')->on('categoria_produtos');
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
        Schema::dropIfExists('produtos');
    }
}
