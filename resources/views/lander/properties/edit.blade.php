@include('lander._partials._header')
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
<!-- Inner Header -->
<section class="bg-dark py-5 user-header">
    <div class="container">
        <div class="row align-items-center mt-2 mb-5 pb-4">
            <div class="col">
                <!-- Heading -->
                <h1 class="text-white mb-2">
                    Add Property
                </h1>
            </div>
            <div class="col-auto">
                <!-- Button -->
                <button class="btn btn-sm btn-primary">
                    <a href="{{ route('logout') }}">Log Out</a>
                </button>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<!-- End Inner Header -->
<!-- Add Property -->
<section class="section-padding pt-5 user-pages-main">

    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-3">
                <!-- Collapse -->
                <div class="card padding-card tab-view user-pages-sidebar">
                    <div class="card-body">
                        <!-- Heading -->
                        <h6 class="text-uppercase mt-0 mb-3">
                            Account
                        </h6>
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="user-profile.html">User Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('site.properties.list')}}">My Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-success" href="">Add Property</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <form method="POST" action="{{route('site.properties.update',$property->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Property Description</h5>
                            <div class="form-group">
                                <label>Property Title <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{$property->title}}">
                            </div>
                            <div class="form-group">
                                <label>Property Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" id="description" placeholder="Description" name="description">{{$property->description}}</textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Purpose <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="purpose_id" name="purpose_id">
                                        @foreach($purposes as $purpose)
                                            <option value="{{$purpose->id}}"{{$purpose->id==$property->purpose_id ? 'selected' : ''}}>{{$purpose->purpose}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Type <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="type_id" name="type_id">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}"{{$type->id==$property->type_id ? 'selected' : ''}}>{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Property Category <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"{{$category->id==$property->category_id ? 'selected' : ''}}>{{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card property-features-add padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Address</h5>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>State <span class="text-danger">*</span></label>
                                    <select class="form-control select2 no-radius" id="state_id" name="state_id" required>
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}"{{$state->id==$property->state_id ? 'selected' : ''}}>{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>District <span class="text-danger">*</span></label>
                                    <select class="form-control select2 no-radius" id="district_id" name="district_id" required>
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}"{{$district->id==$property->district_id ? 'selected' : ''}}>{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>City Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City name" required value="{{$property->city}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Area<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location_area" placeholder="Your Area" name="location_area" required value="{{$property->location_area}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>House No./Landmark<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="landmark" placeholder="Landmark" name="landmark" required value="{{$property->landmark}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Iframe <span class="text-danger">optional</span></label>
                                    <textarea class="form-control" rows="5" id="iframe" placeholder="Google Map Iframe" name="iframe">{{$property->iframe}}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card property-features-add padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Area & Road</h5>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Total Area <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " id="total_area" placeholder="Total Area" name="total_area" value="{{$property->total_area}}">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select " id="measurement_area_id" name="measurement_area_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}"{{$measurement->id==$property->measurement_area_id ? 'selected' : ''}}>{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>BuildUp Area <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " id="built_up_area" value="{{$property->built_up_area}}" placeholder="" name="built_up_area">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select " id="measurement_area_id" name="measurement_area_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}"{{$measurement->id==$property->measurement_build_id ? 'selected' : ''}}>{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Road Access <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="road_access_width"value="{{$property->road_access_width}}" placeholder="in ft" name="road_access_width">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Property Facing <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="property_facing_id" name="property_facing_id">
                                        @foreach($facings as $facing)
                                            <option value="{{$facing->id}}"{{$facing->id==$property->property_facing_id ? 'selected' : ''}}>{{$facing->facing}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Road Type <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="road_type_id" name="road_type_id">
                                        @foreach($roadTypes as $roadType)
                                            <option value="{{$roadType->id}}"{{$roadType->id==$property->road_type_id ? 'selected' : ''}}>{{$roadType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card property-features-add padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Additional Details</h5>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Build Year <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="built_year" placeholder="in B.S" name="built_year" value="{{$property->built_year}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Month <span class="text-danger">*</span></label>
                                    <select id="month_id" class="form-control select2 no-radius" name="month_id">
                                        @foreach($months as $month)
                                            <option value="{{$month->id}}"{{$month->id==$property->month_id ? 'selected' : ''}}>{{$month->month}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Furnishing <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="furnishing_id" name="furnishing_id">
                                        @foreach($furnishings as $furnishing)
                                            <option value="{{$furnishing->id}}"{{$furnishing->id==$property->furnishing_id ? 'selected' : ''}}>{{$furnishing->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Kitchen <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="kitchen_count" name="kitchen_count" placeholder="" value="{{$property->kitchen_count}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Dining Rooms<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="dining_room_count" name="dining_room_count" placeholder="" value="{{$property->dining_room_count}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Hall <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="hall_count" name="hall_count" placeholder="" value="{{$property->hall_count}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Bed Rooms <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="bed_room_count" name="bed_room_count" placeholder="" value="{{$property->bed_room_count}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Bath Rooms<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="bath_room_count" name="bath_room_count" placeholder="" value="{{$property->bath_room_count}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Total Floors <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="total_floor_count" name="total_floor_count" placeholder="" value="{{$property->total_floor_count}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Parking <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="parking" name="parking" placeholder="parking for bike and car" value="{{$property->parking}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Amenities<span class="text-danger">*</span></label>
                                    <select class="form-control select2" id="amenity_id" data-plugin="customselect" multiple name="amenities[]">
                                        @foreach($amenities as $amenity)
                                            @if(in_array($amenity->id, $propertyAmenityId))
                                                <option value="{{ $amenity->amenity }}" selected="true">{{ $amenity->amenity}}</option>
                                            @else
                                                <option value="{{ $amenity->amenity }}">{{ $amenity->amenity }}</option>
                                            @endif
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Ownership Types<span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="ownership_type_id" name="ownership_type_id">
                                        @foreach($ownershipTypes as $ownershipType)
                                            <option value="{{$ownershipType->id}}"{{$ownershipType->id==$property->ownership_type_id ? 'selected' : ''}}>{{$ownershipType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Media</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fuzone">
                                        <label for="image">Main Image <code>(required)</code></label>
                                        <input type="file" name="image" id="image" class="dropify" data-default-file="{{asset('uploads/'.$property->image)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card property-features-add padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Property Price</h5>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Price <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="price" value="{{$property->price}}" placeholder="in NPR" name="price">

                                </div>
                                <div class="form-group col-md-4">
                                    <label>Price On <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="price_on_id" name="price_on_id">
                                        @foreach($prices as $price)
                                            <option value="{{$price->id}}"{{$price->id==$property->price_on_id ? 'selected' : ''}}>{{$price->price}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">ADD PROPERTY</button>
                </form>
                <div>
                    <form method="post" action="{{route('site.properties.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card padding-card">
                            <div class="card-body">
                                <h5 class="card-title mb-4">Other Images</h5>
                                <input type="hidden" name="property_id" value="{{$property->id}}">
                                <div class="form-group ">
                                    <label class="" for="image">Other Images <code>[Multiple : Upto 5 images]</code></label>

                                    <div class="">
                                        <input type="file" name="images[]" id="image" class="dropify" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Upload Images</button>
                    </form>
                    @foreach($property->propertyImages as $image)
                        <div class="col-lg-6 col-xl-3">
                            <!-- Simple card -->
                            <div class="card mb-4 mb-xl-0">
                                <img class="card-img-top img-fluid" src="{{asset('uploads/' . $image->image)}}" alt="Card image cap" style="height: 128px; width: 230px; object-fit: cover">
                                <a href="{{route('properties.image.delete', $image->id)}}" class="btn btn-danger w-100 mt-2">DELETE</a>
                            </div>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
</section>
<!-- End Add Property -->
@include('lander._partials._footer')
