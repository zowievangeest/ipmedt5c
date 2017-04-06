<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{

    public function statistics()
    {
        return $this->belongsTo('Statistics', 'statistic_id');
    }
}
