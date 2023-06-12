<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //Se usa este tipo de dato para las relaciones y es auto generado
            $table->unsignedBigInteger('user_id'); //Relacion con tabla user
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            //Establecer reñlacion con la tabla users
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
