<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // ID autoincremental
            $table->string('title'); // Título (requerido, no nullable)
            $table->string('card_image')->nullable(); // Imagen para tarjeta (opcional)
            $table->string('banner_image')->nullable(); // Imagen para banner (opcional)
            $table->text('description')->nullable(); // Descripción (opcional)
            $table->timestamps(); // created_at y updated_at automáticos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
