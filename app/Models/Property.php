<?php

namespace App\Models;

use App\PropertyImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'purpose_id',
        'type_id',
        'status',
        'state_id',
        'district_id',
        'city_id',
        'iframe',
        'total_area',
        'measurement_area_id',
        'built_up_area',
        'road_access_id',
        'built_year',
        'calender_type',
        'month_id',
        'furnishing_id',
        'kitchen_count',
        'dining_room_count',
        'bed_room_count',
        'bath_room_count',
        'hall_count',
        'total_floor_count',
        'parking',
        'amenity_id',
        'ownership_type_id',
        'image',
        'price',
        'price_on_id',
    ];

    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }
}
