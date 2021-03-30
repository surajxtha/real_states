<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
