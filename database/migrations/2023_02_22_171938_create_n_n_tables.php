<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNNTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_pizza', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pizza_id')->nullable();
            $table->unsignedBigInteger('ingredient_id')->nullable();

            $table->timestamps();

            $table->foreign('pizza_id', 'ingredient_pizza_to_pizzas_fk')
                ->references('id')
                ->on('pizzas')
                ->onDelete('cascade');
            $table->foreign('ingredient_id', 'ingredient_pizza_to_ingredients_fk')
                ->references('id')
                ->on('ingredients')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_pizza');
    }
}
