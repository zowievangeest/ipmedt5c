<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public $fillable = ['type'];
    protected $with = ['views'];

    // One to many relation met view dmv een pivot table
    public function views()
    {
        return $this->belongsToMany('ipmedt5c\View', 'statistics_views', 'statistic_id', 'view_id');
    }
}
