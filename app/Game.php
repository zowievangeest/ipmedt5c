<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public $fillable = ['name', 'short_description', 'description', 'release_date', 'image_url', 'statistic_id', 'price', 'publisher_id', 'video_id', 'age_range_id'];
    protected $with = ['statistics', 'publisher', 'video', 'age_range', 'genres'];

    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }

    public function publisher()
    {
        return $this->hasOne('ipmedt5c\Publisher', 'id', 'publisher_id');
    }

    public function video()
    {
        return $this->hasOne('ipmedt5c\Video', 'id', 'video_id');
    }

    public function age_range()
    {
        return $this->hasOne('ipmedt5c\Age_range', 'id', 'age_range_id');
    }

    public function genres()
    {
        return $this->belongsToMany('ipmedt5c\Genre', 'games_genres', 'game_id', 'genre_id');
    }

}
