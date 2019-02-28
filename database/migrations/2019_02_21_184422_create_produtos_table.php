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
    public function up() //Função que sobe os arquivos para a BASE DE DADOS.
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');//Não mudar o nome ID, pois é padrão LARAVEL.
            $table->string('descricao');
            $table->string('cor');
            $table->decimal('preco', 5,2);
            $table->string('peso');
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
