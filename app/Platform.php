<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $with = ['statistics'];

    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }
}
