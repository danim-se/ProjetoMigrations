<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produtos_filiais', function (Blueprint $table) {
            $table->unsignedInteger('filial_id');
            $table->unsignedInteger('produto_id');
            $table->float('preco_venda');
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->timestamps();
        });
        
    }
    
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
};
