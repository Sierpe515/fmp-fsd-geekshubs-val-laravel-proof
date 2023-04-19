<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterImage extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->hasMany(Character::class);
    }


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'characters_images';
}
