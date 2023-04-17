<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'genre', 'developer', 'likes', 'game_image', 'publisher_id'];

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
}