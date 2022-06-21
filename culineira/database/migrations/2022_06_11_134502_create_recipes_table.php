<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('recipe_name', 30);
            $table->integer('recipe_calorie');
            $table->longText('recipe_desc');
            $table->string('recipe_country', 20);
            $table->string('recipe_type', 20);
            $table->integer('recipe_time_spend');
            $table->string('recipe_main_ing', 30);
            $table->string('recipe_level', 20);
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
        Schema::dropIfExists('recipes');
    }
};
