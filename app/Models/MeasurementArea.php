<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MeasurementArea extends Model
{
    public function properties(){
     return $this->hasMany(Property::class);
    }
}
