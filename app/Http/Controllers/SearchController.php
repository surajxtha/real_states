<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Property;
use App\Models\Purpose;
use App\Models\Type;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::with('purpose', 'state', 'district', 'priceOn', 'roadType', 'measurementArea')->where('purpose_id', $request['purpose_id']);

        if ($request['district_id']) {
            $properties = $properties->where('district_id', $request['district_id']);
        }

        if ($request['type_id']) {
            $properties = $properties->where('type_id', $request['type_id']);
        }

        $properties = $properties->orderBy('id', 'desc')->get();

        // For Search Feature
        $purposes = Purpose::select(['id', 'purpose'])->get();
        $districts = District::select(['id','name'])->get();
        $types = Type::all();

        return view('lander.properties.search', compact('properties', 'purposes', 'districts', 'types'));
    }
}
