<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class statistic extends Model
{
    protected $with = ['view'];

    public function view()
    {
        return $this->hasMany('ipmedt5c\View', 'statistic_id', 'id');
    }
}
