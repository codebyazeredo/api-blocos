<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer('andares')->unsigned();
            $table->string('cor1');
            $table->string('cor2');
            $table->string('cor3');
            $table->string('desenho1');
            $table->string('desenho2');
            $table->string('desenho3');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
