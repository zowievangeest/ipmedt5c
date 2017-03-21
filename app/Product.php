<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $with = ['game', 'platform', 'user'];

    public function game()
    {
        return $this->hasOne('ipmedt5c\Game', 'id', 'game_id');
    }

    public function platform()
    {
        return $this->hasOne('ipmedt5c\Platform', 'id', 'platform_id');
    }

    public function user()
    {
        return $this->hasOne('ipmedt5c\User', 'id', 'user_id');
    }
}
