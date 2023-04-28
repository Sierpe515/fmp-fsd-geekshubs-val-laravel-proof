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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stage_id');
            $table->foreign('stage_id')
                ->references('id')->on('stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('answer');
            $table->unsignedBigInteger('badge_id');
            $table->foreign('badge_id')
                ->references('id')->on('badges')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('success');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
