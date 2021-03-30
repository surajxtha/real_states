@include('cms._partials._header')
@include('cms._partials._sidenav')

<div class="container-fluid">

    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Property</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('properties.store')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div id="smart-wizard-default">
                            <ul>
                                <li><a href="#basic">Basic<small class="d-block">Basic Information</small></a></li>
                                <li><a href="#address">Address<small class="d-block">Address Information</small></a></li>
                                <li><a href="#area-roads">Area & Road<small class="d-block">Area and road Information</small></a></li>
                                <li><a href="#additional">Additional Details<small class="d-block">Additional Information</small></a></li>
                                <li><a href="#medias">Medias<small class="d-block">Medias Uploads</small></a></li>
                                <li><a href="#prices">Pricing<small class="d-block">Price Details</small></a></li>
                            </ul>

                            <div class="p-3">

                                <div id="basic">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <label for="title">Title <small><code>(Required)</code></small></label>
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                            </div>

                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" rows="5" id="description" placeholder="Description" name="description"></textarea>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="purpose_id">Purpose</label>
                                                        <select class="form-control custom-select" id="purpose_id" name="purpose_id">
                                                            @foreach($purposes as $purpose)
                                                                <option value="{{$purpose->id}}">{{$purpose->purpose}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="type_id">Property Type</label>
                                                        <select class="form-control custom-select" id="type_id" name="type_id">
                                                            @foreach($types as $type)
                                                                <option value="{{$type->id}}">{{$type->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label for="category_id">Property Category</label>
                                                        <select class="form-control custom-select" id="category_id" name="category_id">
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div id="address">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row">

                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="state_id">State</label>
                                                        <select data-plugin="customselect" class="form-control" id="state_id" name="state_id" required>
                                                            @foreach($states as $state)
                                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="district_id">District</label>
                                                        <select data-plugin="customselect" class="form-control" id="district_id" name="district_id" required>
                                                            @foreach($districts as $district)
                                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="city">City Name</label>
                                                        <input type="text" class="form-control" id="city" name="city" placeholder="City name" required>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="location_area">Area</label>
                                                        <input type="text" class="form-control" id="location_area" placeholder="Your Area" name="location_area" required>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="landmark">House No./Landmark</label>
                                                        <input type="text" class="form-control" id="landmark" placeholder="Landmark" name="landmark" required>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="iframe">Google Map [Iframe Code] <code>(optional)</code></label>
                                                        <textarea class="form-control" rows="5" id="iframe" placeholder="Google Map Iframe" name="iframe"></textarea>
                                                    </div>
                                                </div>

                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div id="area-roads">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="row">

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="total_area">Total Area</label> <br>
                                                        <div class="btn-group w-100">
                                                            <input type="text" class="form-control w-75" id="total_area" placeholder="Total Area" name="total_area">
                                                            <select class="form-control custom-select w-25" id="measurement_area_id" name="measurement_area_id">
                                                                @foreach($measurements as $measurement)
                                                                    <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="built_up_area">Built Up Area</label> <br>
                                                        <div class="btn-group w-100">
                                                            <input type="text" class="form-control w-75" id="built_up_area" value="" placeholder="" name="built_up_area">
                                                            <select class="form-control custom-select w-25" id="measurement_area_id" name="measurement_area_id">
                                                                @foreach($measurements as $measurement)
                                                                    <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="road_access_width">Road Access</label>
                                                        <input type="text" class="form-control" id="road_access_width" value="" placeholder="in ft" name="road_access_width">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="property_facing_id">Property Facing</label>
                                                        <select class="form-control custom-select" id="property_facing_id" name="property_facing_id">
                                                            @foreach($facings as $facing)
                                                                <option value="{{$facing->id}}">{{$facing->facing}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="road_type_id">Road Type</label>
                                                        <select class="form-control custom-select" id="road_type_id" name="road_type_id">
                                                            @foreach($roadTypes as $roadType)
                                                                <option value="{{$roadType->id}}">{{$roadType->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <div id="additional">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="built_year">Build Year</label>
                                                        <input type="text" class="form-control" id="built_year" placeholder="in B.S" name="built_year">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="month_id">Month</label>
                                                        <select data-plugin="customselect" id="month_id" class="form-control" name="month_id">
                                                            @foreach($months as $month)
                                                                <option value="{{$month->id}}">{{$month->month}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="furnishing_id">Furnishing</label>
                                                        <select class="form-control custom-select" id="furnishing_id" name="furnishing_id">
                                                            @foreach($furnishings as $furnishing)
                                                                <option value="{{$furnishing->id}}">{{$furnishing->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="kitchen_count">Kitchens</label>
                                                        <input type="number" class="form-control" id="kitchen_count" name="kitchen_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="dining_room_count">Dining Rooms</label>
                                                        <input type="number" class="form-control" id="dining_room_count" name="dining_room_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="hall_count">Halls</label>
                                                        <input type="number" class="form-control" id="hall_count" name="hall_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="bed_room_count">Bed Rooms</label>
                                                        <input type="number" class="form-control" id="bed_room_count" name="bed_room_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="bath_room_count">Bath Rooms</label>
                                                        <input type="number" class="form-control" id="bath_room_count" name="bath_room_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="total_floor_count">Total Floors</label>
                                                        <input type="number" class="form-control" id="total_floor_count" name="total_floor_count" placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="parking">Parking</label>
                                                        <input type="text" class="form-control" id="parking" name="parking" placeholder="parking for bike and car">
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="amenity_id">Amenities</label>
                                                        <select class="form-control wide" id="amenity_id" data-plugin="customselect" multiple name="amenity_id">
                                                            @foreach($amenities as $amenity)
                                                                <option value="{{$amenity->id}}">{{$amenity->amenity}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-4">
                                                    <div class="form-group">
                                                        <label for="ownership_type_id">Ownership Type</label>
                                                        <select class="form-control custom-select" id="ownership_type_id" name="ownership_type_id">
                                                            @foreach($ownershipTypes as $ownershipType)
                                                                <option value="{{$ownershipType->id}}">{{$ownershipType->type}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="medias">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="form-group">
                                                        <label for="image">Main Image <code>(required)</code></label>
                                                        <input type="file" name="image" id="image" class="dropify">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="image">Other Image <code>(multiple)</code></label>
                                                        <input type="file" name="images[]" id="image" class="dropify" multiple>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="prices">
                                    <div class="row">
                                        <div class="col-12">

                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" class="form-control" id="price" value="" placeholder="in NPR" name="price">
                                            </div>

                                            <div class="form-group">
                                                <label for="price_on_id">Price On</label>
                                                <select class="form-control custom-select" id="price_on_id" name="price_on_id">
                                                    @foreach($prices as $price)
                                                        <option value="{{$price->id}}">{{$price->price}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>


@include('cms._partials._footer')
