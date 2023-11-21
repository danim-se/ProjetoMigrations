<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            $table->increments('id');
            $table->float('comprimento');
            $table->float('largura');
            $table->float('altura');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
