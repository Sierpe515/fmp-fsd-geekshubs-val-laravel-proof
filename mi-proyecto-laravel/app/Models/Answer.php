<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    public function stage()
    {
        return $this->belongsTo(Stage::class);
    }

    public function badge()
    {
        return $this->belongsTo(Badge::class);
    }

    public function games()
    {
        return $this->belongsToMany(Game::class);
    }
}
