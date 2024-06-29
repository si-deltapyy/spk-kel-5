<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WeightValue extends Model
{
    protected $fillable = [
        'criteria_1', 'criteria_2', 'weight_value',
    ];
}
