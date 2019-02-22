<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Recipe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('label');
            $table->string('image');
            $table->string('calories');
            $table->string('healthLabels');
            $table->string('ingredientLines');
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
        //
    }
}
