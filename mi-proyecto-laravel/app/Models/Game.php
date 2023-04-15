<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function select_games()
    {
        return $this->belongsTo(SelectGame::class, 'select_game_id');
    }

    public function stages()
    {
        return $this->belongsToMany(Stage::class);
    }

    public function game_stage()
    {
        return $this->hasMany(GameStage::class, 'game_stage');
    }

    public function badges()
    {
        return $this->belongsToMany(Badge::class);
    }
}