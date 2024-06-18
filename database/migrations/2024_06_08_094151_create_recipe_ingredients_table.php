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
        Schema::create('recipes_ingredients', function (Blueprint $table) {
            $table->bigInteger('recipes_id')->unsigned();
            $table->bigInteger('ingredients_id')->unsigned();
            $table->string('quantity', 255)->nullable();
            $table->string('unity', 255)->nullable();
            $table->timestamps();

            $table->foreign('recipes_id')->references('id')->on('recipes')->onDelete('cascade');
            $table->foreign('ingredients_id')->references('id')->on('ingredients')->onDelete('cascade');
        
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes_ingredients');
    }
};
