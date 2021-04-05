<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\District;
use App\Models\Furnishing;
use App\Models\MeasurementArea;
use App\Models\Month;
use App\Models\OwnershipType;
use App\Models\PriceOn;
use App\Models\Property;
use App\Models\PropertyFacing;
use App\Models\Purpose;
use App\Models\RoadType;
use App\Models\State;
use App\Models\Type;

class PropertyController extends Controller
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
        return view('lander.properties.index', compact('properties', 'types', 'districts', 'purposes', 'prices', 'measurements', 'roadTypes'));
    }

    public function show($slug)
    {
        $property = Property::with('propertyImages', 'purpose', 'amenities')->where('slug', $slug)->first();


        $purposes = Purpose::all();
        $types = Type::all();
        $categories = Category::all();
        $states = State::all();
        $districts = District::all();
        $measurements = MeasurementArea::all();
        $facings = PropertyFacing::all();
        $roadTypes = RoadType::all();
        $months = Month::all();
        $furnishings = Furnishing::all();
        $amenities = Amenity::all();
        $ownershipTypes = OwnershipType::all();
        $prices = PriceOn::all();

        return view('lander.properties.show', compact('property', 'purposes', 'types', 'categories', 'states', 'districts', 'measurements', 'facings', 'roadTypes', 'months', 'furnishings', 'amenities', 'ownershipTypes', 'prices'));
    }

    public function create()
    {
        $purposes = Purpose::all();
        $types = Type::all();
        $categories = Category::all();
        $states = State::all();
        $districts = District::all();
        $measurements = MeasurementArea::all();
        $facings = PropertyFacing::all();
        $roadTypes = RoadType::all();
        $months = Month::all();
        $furnishings = Furnishing::all();
        $amenities = Amenity::all();
        $ownershipTypes = OwnershipType::all();
        $prices = PriceOn::all();
        return view('lander.properties.create', compact('purposes', 'types', 'categories', 'states', 'districts', 'measurements', 'facings', 'roadTypes', 'months', 'furnishings', 'amenities', 'ownershipTypes', 'prices'));
    }

    public function detail($slug)
    {

    }
}
