<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameStage extends Model
{
    use HasFactory;

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games_stages';
}
