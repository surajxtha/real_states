<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SitePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title' => 'required|string|min:3|max:255',
            'description' => 'required',
            'purpose_id' => 'required',
            'type_id' => 'required',
            'state_id' => 'required',
            'district_id' => 'required',
            'city' => 'required',
            'road_access_width' => 'required',
            'property_facing_id' => 'required',
            'total_area' => 'required',
            'measurement_area_id' => 'required',
            'built_up_area' => 'required',
            'built_year' => 'required',
            'month_id' => 'required',
            'furnishing_id' => 'required',
            'kitchen_count' => 'required',
            'dining_room_count' => 'required',
            'bed_room_count' => 'required',
            'bath_room_count' => 'required',
            'hall_count' => 'required',
            'road_type_id' => 'required',
            'total_floor_count' => 'required',
            'parking' => 'required',
            'amenities' => 'required',
            'ownership_type_id' => 'required',
            'price' => 'required',
            'price_on_id' => 'required',
            'category_id' => 'required',
        ];

        if ($this->method() == 'POST') {
            $rules += ['image' => 'required|max:2024'];
        }

        if ($this->method() == 'PUT') {
            $rules += ['image' => 'max:2024'];
        }

        return $rules;
    }
}
