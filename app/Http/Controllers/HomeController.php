<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\MeasurementArea;
use App\Models\PriceOn;
use App\Models\Property;
use App\Models\Purpose;
use App\Models\RoadType;
use App\Models\Type;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{

    public function index()
    {
        $properties = Property::all()->sortByDesc('created_at');
        $purposes = Purpose::all();
        $types = Type::all();
        $prices = PriceOn::all();
        $measurements = MeasurementArea::all();
        $roadTypes = RoadType::all();
        $districts = District::all();

        return view('lander.home', compact('properties', 'types', 'districts', 'purposes', 'prices', 'measurements', 'roadTypes'));
    }

}
