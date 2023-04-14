<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameBadge extends Model
{
    use HasFactory;
    
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function badge()
    {
        return $this->belongsTo(Badge::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games_badges';
}
