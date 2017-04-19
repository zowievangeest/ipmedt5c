<?php

namespace ipmedt5c;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    public $fillable = ['name', 'name_slug', 'brand', 'statistic_id'];
    protected $with = ['statistics'];

    // One to one relation met statistic
    public function statistics()
    {
        return $this->hasOne('ipmedt5c\Statistic', 'id', 'statistic_id');
    }
}
