<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['tag_id', 'statistic_id', 'game_id', 'platform_id', 'user_id'];

    protected $with = ['statistics', 'game', 'platform', 'user'];

    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }

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
