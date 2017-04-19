<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    // Aangeven welke velden ingevuld kunnen worden
    public $fillable = ['date'];

    // Relatie naar statistics aanmaken
    public function statistics()
    {
        return $this->belongsToMany('ipmedt5c\Statistic', 'statistics_views', 'view_id', 'statistic_id');
    }
}
