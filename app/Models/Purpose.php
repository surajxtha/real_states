<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purpose extends Model
{
    public function property()
    {
        return $this->hasMany(Property::class);
    }
}
