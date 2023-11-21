<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('fornecedores', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nome');
        $table->string('site');
        $table->string('uf');
        $table->string('email');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('fornecedores');
}
};
