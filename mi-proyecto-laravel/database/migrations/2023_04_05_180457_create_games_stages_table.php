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
        Schema::create('games_stages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')
                ->references('id')->on('games')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
                ->references('id')->on('stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('answer_id');
            $table->foreign('answer_id')
                ->references('id')->on('answers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games_stages');
    }
};
