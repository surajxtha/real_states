<?php

namespace App;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;

class PropertyImage extends Model
{
    protected $fillable = [
        'image',
        'property_id'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
