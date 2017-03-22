<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    protected $with = ['publisher', 'video', 'age_range'];

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

}
