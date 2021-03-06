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
        <div class="row align-items-center mt-2">
            <div class="col">
                <!-- Heading -->
                <h1 class="text-white mb-2">
                    Add Property
                </h1>
            </div>
            <div class="col-auto">
                <!-- Button -->
                <button class="btn btn-sm btn-primary" >
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

            <div class="col-lg-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

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
                <form method="post" action="{{route('site.properties.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Property Description</h5>
                            <div class="form-group">
                                <label>Property Title <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label>Property Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" rows="5" id="description" placeholder="Description" name="description"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Purpose <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="purpose_id" name="purpose_id">
                                        @foreach($purposes as $purpose)
                                            <option value="{{$purpose->id}}">{{$purpose->purpose}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Type <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="type_id" name="type_id">
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Property Category <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->category}}</option>
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
                                    <select  class="form-control select2 no-radius" id="state_id" name="state_id" required>
                                        @foreach($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>District <span class="text-danger">*</span></label>
                                    <select class="form-control select2 no-radius" id="district_id" name="district_id" required>
                                        @foreach($districts as $district)
                                            <option value="{{$district->id}}">{{$district->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>City Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="City name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Area<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location_area" placeholder="Your Area" name="location_area" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>House No./Landmark<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="landmark" placeholder="Landmark" name="landmark" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Iframe <span class="text-danger">optional</span></label>
                                    <textarea class="form-control" rows="5" id="iframe" placeholder="Google Map Iframe" name="iframe"></textarea>
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
                                    <input type="text" class="form-control " id="total_area" placeholder="Total Area" name="total_area">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select " id="measurement_area_id" name="measurement_area_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>BuildUp Area <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control " id="built_up_area" value="" placeholder="" name="built_up_area">
                                </div>
                                <div class="form-group col-md-2">
                                    <label>Unit <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select " id="measurement_area_id" name="measurement_area_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Road Access <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="road_access_width" value="" placeholder="in ft" name="road_access_width">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Property Facing <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="property_facing_id" name="property_facing_id">
                                        @foreach($facings as $facing)
                                            <option value="{{$facing->id}}">{{$facing->facing}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Road Type <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="road_type_id" name="road_type_id">
                                        @foreach($roadTypes as $roadType)
                                            <option value="{{$roadType->id}}">{{$roadType->type}}</option>
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
                                    <input type="text" class="form-control" id="built_year" placeholder="in B.S" name="built_year">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Month <span class="text-danger">*</span></label>
                                    <select id="month_id" class="form-control select2 no-radius" name="month_id">
                                        @foreach($months as $month)
                                            <option value="{{$month->id}}">{{$month->month}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Furnishing <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="furnishing_id" name="furnishing_id">
                                        @foreach($furnishings as $furnishing)
                                            <option value="{{$furnishing->id}}">{{$furnishing->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Kitchen <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="kitchen_count" name="kitchen_count" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Dining Rooms<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="dining_room_count" name="dining_room_count" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Hall <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="hall_count" name="hall_count" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Bed Rooms <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="bed_room_count" name="bed_room_count" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Bath Rooms<span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="bath_room_count" name="bath_room_count" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Total Floors <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="total_floor_count" name="total_floor_count" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label>Parking <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="parking" name="parking" placeholder="parking for bike and car">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Amenities<span class="text-danger">*</span></label>
                                    <select class="form-control select2" id="amenity_id" data-plugin="customselect" multiple name="amenities[]">
                                        @foreach($amenities as $amenity)
                                            <option value="{{$amenity->amenity}}" {{old('amenities') == $amenity->amenity ? 'selected' : ''}}>{{$amenity->amenity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Ownership Types<span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="ownership_type_id" name="ownership_type_id">
                                        @foreach($ownershipTypes as $ownershipType)
                                            <option value="{{$ownershipType->id}}">{{$ownershipType->type}}</option>
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
                                        <input type="file" name="image" id="image" class="dropify" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fuzone">
                                        <label for="image">Other Image <code>(multiple)</code></label>
                                        <input type="file" name="images[]" id="image" class="dropify" multiple>
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
                                    <input type="text" class="form-control" id="price" value="" placeholder="in NPR" name="price">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Price On <span class="text-danger">*</span></label>
                                    <select class="form-control custom-select" id="price_on_id" name="price_on_id">
                                        @foreach($prices as $price)
                                            <option value="{{$price->id}}">{{$price->price}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">ADD PROPERTY</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Add Property -->
@include('lander._partials._footer')
