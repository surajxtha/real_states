<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    protected $fillable = [
        'amenity',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
