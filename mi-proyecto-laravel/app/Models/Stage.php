<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function game_stage()
    {
        return $this->hasMany(GameStage::class, 'game_stage');
    }
}
