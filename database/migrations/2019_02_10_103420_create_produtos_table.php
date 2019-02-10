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
            $table->string('nome');    // sem nada nao pode ser nulo
            $table->text('descricao')->nullable();  // nullable permite salvar nulo no banco 
            $table->float('preco')->default(2); // se nao digitar nada, vai salvar 2 no banco
            $table->timestamps();
            $table->softDeletes(); // toda vez que excluir, o produto nao aparece na lista, mas continua no banco de dados
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
