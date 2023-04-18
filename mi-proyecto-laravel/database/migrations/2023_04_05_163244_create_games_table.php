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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')
                ->references('id')->on('characters')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('select_game_id');
            $table->foreign('select_game_id')
                ->references('id')->on('select_games')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->enum('difficulty', ['easy','medium','hard']);
            $table->integer('madness')->default(0);
            $table->boolean('finished')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
