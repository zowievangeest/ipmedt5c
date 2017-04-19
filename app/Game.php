<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Aangeven welke modellen allemaal gelinkt is
    protected $with = ['statistics', 'publisher', 'video', 'age_range', 'genres'];

    // One to one relation met statistic
    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }

//    One to one relation met publisher
    public function publisher()
    {
        return $this->hasOne('ipmedt5c\Publisher', 'id', 'publisher_id');
    }

    // One to one relation met video
    public function video()
    {
        return $this->hasOne('ipmedt5c\Video', 'id', 'video_id');
    }

    // One to one relation met age_range
    public function age_range()
    {
        return $this->hasOne('ipmedt5c\Age_range', 'id', 'age_range_id');
    }

    // One to many relation met Genre dmv een pivot table games_genres
    public function genres()
    {
        return $this->belongsToMany('ipmedt5c\Genre', 'games_genres', 'game_id', 'genre_id');
    }

}
