<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\SitePropertyRequest;
use App\Models\Amenity;
use App\Models\Category;
use App\Models\District;
use App\Models\Furnishing;
use App\Models\MeasurementArea;
use App\Models\Month;
use App\Models\OwnershipType;
use App\Models\PriceOn;
use App\Models\Property;
use App\Models\PropertyAmenity;
use App\Models\PropertyFacing;
use App\Models\PropertyImage;
use App\Models\Purpose;
use App\Models\RoadType;
use App\Models\State;
use App\Models\Type;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    use UploadImage;

    public function index()
    {
        $properties = Property::with('priceOn', 'purpose', 'state', 'district', 'roadType', 'measurementArea')->orderByDesc('created_at')->paginate(3);
        $purposes = Purpose::all();
        $types = Type::all();
        $prices = PriceOn::all();
        $measurements = MeasurementArea::all();
        $roadTypes = RoadType::all();
        $districts = District::all();
        return view('lander.properties.index', compact('properties', 'types', 'districts', 'purposes', 'prices', 'measurements', 'roadTypes'));
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

    public function store(SitePropertyRequest $request)
    {
        $collection = collect($request->except('_token'));

        $image = $this->uploadOne($request->file('image'), 'properties/', 1200, 700);
        $user_id = auth()->id();

        $merge = $collection->merge(compact('image', 'user_id'));

        $property = Property::create($merge->all());

        foreach ($request['amenities'] as $amenity) {
            PropertyAmenity::create([
                'amenity' => $amenity,
                'property_id' => $property->id
            ]);
        }

        foreach ($request['images'] as $propertyImage) {
            $filename = $this->uploadOne($propertyImage, 'properties/' . $property->id . '/');
            PropertyImage::create([
                'image' => $filename,
                'property_id' => $property->id
            ]);
        }

        return back()->with('success', ' stored Successfully');
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

    public function edit(Property $property)
    {
        if (auth()->id() != $property->user_id) {
            abort(403);
        }

        $title = "Property";
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
        $ownershipTypes = OwnershipType::all();
        $prices = PriceOn::all();
        $amenities = Amenity::all();

        $propertyAmenityId = [];
        foreach ($property->amenities as $amenity) {
            $propertyAmenityId[] = $amenity->id;
        }

        return view('lander.properties.edit', compact('title', 'propertyAmenityId', 'amenities', 'purposes', 'types', 'categories', 'states', 'districts', 'measurements', 'facings', 'roadTypes', 'months', 'furnishings', 'ownershipTypes', 'prices', 'property'));

    }

    public function update(SitePropertyRequest $request, Property $property)
    {
        $collection = collect($request->except('_token'));

        if ($request->hasFile('image')) {
            $this->deleteOne($property->image);
            $image = $this->uploadOne($request->file('image'), 'properties/', 1200, 700);
        }

        $merge = $collection->merge(compact('image'));

        $property->update($merge->all());

        return back()->with('success', 'Updated Successfully');
    }

    public function storeAmenities(Request $request)
    {
        foreach ($request['amenities'] as $amenity) {
            PropertyAmenity::create([
                'amenity' => $amenity,
                'property_id' => $request['property_id']
            ]);
        }

    }

    public function storeImages(Request $request)
    {

        foreach ($request['images'] as $propertyImage) {
            $filename = $this->uploadOne($propertyImage, 'properties/' . $request['property_id'] . '/');
            PropertyImage::create([
                'image' => $filename,
                'property_id' => $request['property_id']
            ]);
        }

        return redirect()->back();
    }

    public function delete(Property $property)
    {
        // Main Image Delete
        if ($property->image) {
            $this->deleteOne($property->image);
        }

        foreach ($property->propertyImages as $image) {
            $this->deleteOne($image->image);
        }

        $property->delete();

        return back()->with('success', 'Deleted Successfully');
    }

    public function deleteImage($id)
    {
        $image = PropertyImage::find($id);

        if ($image->image) {
            $this->deleteOne($image->image);
        }

        $image->delete();

        return back()->with('success', 'Image Deleted successfully.');
    }

    public function display()
    {
        $properties = Property::with('priceOn', 'purpose', 'state', 'district', 'roadType', 'measurementArea')->get();
        $userId = Auth::user()->id;
        return view('lander.properties.list', compact('properties', 'userId'));
    }


}
