<?php

namespace App\Http\Controllers;

use App\Models\MeasurementArea;
use App\Models\PriceOn;
use App\Models\Property;
use App\Models\Purpose;
use App\Models\RoadType;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        //$properties=Property::all();
        $purposes=Purpose::all();
        $prices = PriceOn::all();
        $measurements = MeasurementArea::all();
        $roadTypes = RoadType::all();
        //$properties=Property::with('purpose', 'type', 'district')
            $query = Property::query();

/*if(request()->has('id')) {
    $query->where('purpose', 'like', request('id'));
}
if(request()->has('district_id')) {
            $query->where('name', 'like', request('id'));
        }
if(request()->has('type_id')) {
    $query->where('type', 'like', request('id'));
}*/
        //$query->with('purpose', 'district', 'type')->get();
        $properties = Property::where(function ($query) {
            $query->select('type')
                ->from('types')
                ->whereColumn('id', 'property.type_id')
                ->get();
        });
        return view('lander.properties.location',compact('$query','purposes','prices','measurements','roadTypes'));

    }

}
