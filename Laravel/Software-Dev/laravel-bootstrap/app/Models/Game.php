<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['game_title', 'description', 'category', 'edition', 'creator', 'release_date', 'game_image', 'platform'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}