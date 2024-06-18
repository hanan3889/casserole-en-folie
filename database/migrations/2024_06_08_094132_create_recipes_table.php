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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->text('description', 255);
            $table->string('image_path', 255)->nullable();
            $table->integer('preparation_time')->nullable();
            $table->integer('cooking_time')->nullable();
            $table->integer('servings')->nullable();
            $table->bigInteger('categories_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->bigInteger('types_id')->unsigned();
            $table->timestamps(); 

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('types_id')->references('id')->on('types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
