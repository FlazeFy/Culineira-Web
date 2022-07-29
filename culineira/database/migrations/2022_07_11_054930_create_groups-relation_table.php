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
        Schema::create('groups-rel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('groups_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('groups_role', 20);
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
};
