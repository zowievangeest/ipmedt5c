<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $fillable = ['tag_id', 'statistic_id', 'game_id', 'platform_id', 'user_id'];

    // Aangeven welke modellen allemaal gelinkt is
    protected $with = ['statistics', 'game', 'platform', 'user'];


    // One to one relation met statistic
    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }

    // One to one relation met game
    public function game()
    {
        return $this->hasOne('ipmedt5c\Game', 'id', 'game_id');
    }

    // One to one relation met platform
    public function platform()
    {
        return $this->hasOne('ipmedt5c\Platform', 'id', 'platform_id');
    }

    // One to one relation met user
    public function user()
    {
        return $this->hasOne('ipmedt5c\User', 'id', 'user_id');
    }
}
