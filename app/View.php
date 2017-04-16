<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{

    public $fillable = ['date'];

    public function statistics()
    {
        return $this->belongsToMany('ipmedt5c\Statistic', 'statistics_views', 'view_id', 'statistic_id');
    }
}
