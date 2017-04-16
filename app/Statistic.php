<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class statistic extends Model
{
    public $fillable = ['type'];
    protected $with = ['views'];

    public function views()
    {
        return $this->belongsToMany('ipmedt5c\View', 'statistics_views', 'statistic_id', 'view_id');
    }
}
