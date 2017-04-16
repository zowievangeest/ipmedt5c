<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $fillable = ['name'];

    public function games()
    {
        return $this->belongsToMany('ipmedt5c\Game', 'games_genres', 'genre_id', 'game_id');
    }
}
