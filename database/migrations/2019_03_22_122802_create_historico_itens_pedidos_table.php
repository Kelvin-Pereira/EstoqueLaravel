<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoItensPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_itens_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('produto_id')->unsigned(); 
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->integer('pedido_id')->unsigned(); 
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->integer('statu_id')->unsigned(); 
            $table->foreign('statu_id')->references('id')->on('status');
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
        Schema::dropIfExists('historico_itens_pedidos');
    }
}
