<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Property extends Model
{
    use Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'purpose_id',
        'type_id',
        'status',
        'state_id',
        'district_id',
        'city',
        'iframe',
        'total_area',
        'measurement_area_id',
        'built_up_area',
        'road_access_id',
        'built_year',
        'month_id',
        'furnishing_id',
        'kitchen_count',
        'dining_room_count',
        'bed_room_count',
        'bath_room_count',
        'hall_count',
        'road_type_id',
        'total_floor_count',
        'parking',
        'amenity_id',
        'ownership_type_id',
        'image',
        'price',
        'price_on_id',
    ];

    public function propertyImages() : HasMany
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function purpose() : HasOne
    {
        return $this->hasOne(Purpose::class);
    }

    public function type() : HasOne
    {
        return $this->hasOne(Type::class);
    }

    public function category() : HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function state() : HasOne
    {
        return $this->hasOne(State::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
