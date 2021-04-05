<?php

namespace App\Http\Controllers;

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
use App\Models\PropertyImage;
use App\Models\Purpose;
use App\Models\RoadType;
use App\Models\State;
use App\Models\Type;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    use UploadImage;

    public function index()
    {
        $title = 'Property';
        $properties = Property::latest()->get();

        return view('cms.properties.index', compact('properties', 'title'));
    }

    public function create()
    {
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
        $amenities = Amenity::all();
        $ownershipTypes = OwnershipType::all();
        $prices = PriceOn::all();

        return view('cms.properties.create', compact('title','purposes', 'types', 'categories', 'states', 'districts', 'measurements', 'facings', 'roadTypes', 'months', 'furnishings', 'amenities', 'ownershipTypes', 'prices'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'max:2024'
        ]);

        $collection = collect($request->except('_token'));

        $image = $this->uploadOne($request->file('image'), 'properties/', 1200, 700);

        $merge = $collection->merge(compact('image'));

        $property = Property::create($merge->all());

        foreach ($request['images'] as $propertyImage) {
            $filename = $this->uploadOne($propertyImage, 'properties/' . $property->id . '/');
            PropertyImage::create([
                'image' => $filename,
                'property_id' => $property->id
            ]);
        }

        return redirect()->route('properties.index')->with('success', 'Data stored Successfully');
    }

    public function edit(Property $property)
    {
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
        $amenities = Amenity::all();
        $ownershipTypes = OwnershipType::all();
        $prices = PriceOn::all();
        $property->load('propertyImages');

        return view('cms.properties.edit', compact('title','purposes', 'types', 'categories', 'states', 'districts', 'measurements', 'facings', 'roadTypes', 'months', 'furnishings', 'amenities', 'ownershipTypes', 'prices', 'property'));

    }

    public function update(Request $request, Property $property)
    {
        $property->title = $request->input('title');
        $property->slug = Str::slug($request->title);
        $property->description = $request->input('description');
        $property->purpose_id = $request->input('purpose_id');
        $property->category_id = $request->input('category_id');
        $property->type_id = $request->input('type_id');
        $property->state_id = $request->input('state_id');
        $property->district_id = $request->input('district_id');
        $property->city = $request->input('city');
        $property->iframe = $request->input('iframe');
        $property->total_area = $request->input('total_area');
        $property->measurement_area_id = $request->input('measurement_area_id');
        $property->built_up_area = $request->input('built_up_area');
        $property->road_access_width = $request->input('road_access_width');
        $property->property_facing_id = $request->input('property_facing_id');
        $property->road_type_id = $request->input('road_type_id');
        $property->built_year = $request->input('built_year');
        $property->month_id = $request->input('month_id');
        $property->furnishing_id = $request->input('furnishing_id');
        $property->kitchen_count = $request->input('kitchen_count');
        $property->dining_room_count = $request->input('dining_room_count');
        $property->bed_room_count = $request->input('bed_room_count');
        $property->bath_room_count = $request->input('bath_room_count');
        $property->hall_count = $request->input('hall_count');
        $property->total_floor_count = $request->input('total_floor_count');
        $property->parking = $request->input('parking');
        $property->amenity_id = $request->input('amenity_id');
        $property->ownership_type_id = $request->input('ownership_type_id');

        if ($request->hasFile('image')) {
            $this->deleteOne($property->image);
            $property->image = $this->uploadOne($request->file('image'), 'properties/', 1200, 700);
        }
        $property->price = $request->input('price');
        $property->price_on_id = $request->input('price_on_id');
        $property->update();

        return redirect()->route('properties.index')->with('success', 'Updated Successfully');
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

        return redirect()->route('properties.index')->with('success', 'Deleted Successfully');
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


}
