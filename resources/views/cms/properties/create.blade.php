@include('cms._partials._header')
@include('cms._partials._sidenav')

<div class="container-fluid">

    <div class="card-body">
        <h5 class="header-title mb-3 mt-0">Property</h5>
        <form action="{{route('properties.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="accordion custom-accordionwitharrow" id="accordionExample">

                <div class="card mb-1 shadow-none border">
                    <a href="#" class="text-dark" data-toggle="collapse" data-target="#collapseOne"
                       aria-expanded="true" aria-controls="collapseOne">
                        <div class="card-header" id="headingOne">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="info"></i> Basic Details <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample" style="">
                        <div class="card-body text-muted">
                            <div class="col">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="simpleinput">Title</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" id="simpleinput" name="title"
                                               placeholder="Title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="example-textarea">Description</label>
                                    <div class="col-lg-10">
                                        <textarea class="form-control" rows="5" id="example-textarea" placeholder="Description" name="description"></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="purpose">Purpose</label>
                                    <div class="col-lg-2">
                                        <select class="form-control custom-select" id="purpose" name="purpose_id">
                                            @foreach($purposes as $purpose)
                                                <option value="{{$purpose->id}}">{{$purpose->purpose}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-lg-1 col-form-label" for="type">Type</label>
                                    <div class="col-lg-3">
                                        <select class="form-control custom-select" id="type" name="type_id">
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->type}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label" for="category">Category</label>
                                    <div class="col-lg-2">
                                        <select class="form-control custom-select" id="category" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-1 shadow-none border">
                    <a href="#" class="text-dark collapsed" data-toggle="collapse"
                       data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="card-header" id="headingTwo">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="map-pin"></i> Address <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                         data-parent="#accordionExample" style="">
                        <div class="col">
                            <div class="card-body text-muted">

                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label" for="state">State</label>
                                    <div class="col-lg-3">
                                        <select data-plugin="customselect" class="form-control" id="state" name="state_id">
                                            @foreach($states as $state)
                                                <option value="{{$state->id}}">{{$state->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-lg-2 col-form-label" for="district">District</label>
                                    <div class="col-lg-3">
                                        <select data-plugin="customselect" class="form-control" id="district" name="district_id">
                                            @foreach($districts as $district)
                                                <option value="{{$district->id}}">{{$district->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label class="col-lg-1 col-form-label" for="city">City</label>
                                    <div class="col-lg-2">
                                        <input type="text" class="form-control" id="city" name="city"
                                               placeholder="City name">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-1 col-form-label" for="area">Area</label>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" id="area"
                                               placeholder="Your Area" name="location_area">
                                    </div>
                                    <label class="col-lg-2 col-form-label" for="landmark">House No./Landmark</label>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control" id="landmark"
                                               placeholder="Landmark" name="landmark">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label" for="iframe">Google Map Iframe</label>
                                    <div class="col-lg-4">
                                        <input type="text" class="form-control" id="iframe"
                                               placeholder="Iframe" name="iframe">
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="card mb-1 shadow-none border">
                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseThree"
                       aria-expanded="false" aria-controls="collapseThree">
                        <div class="card-header" id="headingThree">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="map"></i> Area & Road <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                         data-parent="#accordionExample" style="">
                        <div class="card-body text-muted">

                            <div class="form-group row">

                                <label class="col-lg-2 col-form-label" for="totalArea">Total Area</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="totalArea"
                                           placeholder="" name="total_area">
                                </div>
                                <div class="col-lg-2">

                                    <select class="form-control custom-select" id="mesurementArea" name="measurement_area_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label class="col-lg-2 col-form-label" for="builtUpArea">Built-up Area</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="builtUpArea" value=""
                                           placeholder="" name="built_up_area">
                                </div>
                                <div class="col-lg-2">
                                    <select class="form-control custom-select" name="measurement_built_id">
                                        @foreach($measurements as $measurement)
                                            <option value="{{$measurement->id}}">{{$measurement->unit}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="road">Road Access</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="road" value=""
                                           placeholder="in ft" name="road_access_width">
                                </div>
                                <label class="col-lg-3 col-form-label" for="propertyFacing">Property Facing</label>
                                <div class="col-lg-3">
                                    <select class="form-control custom-select" id="propertyFacing" name="property_facing_id">
                                        @foreach($facings as $facing)
                                            <option value="{{$facing->id}}">{{$facing->facing}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="roadType">Road Type</label>
                                <div class="col-lg-3">
                                    <select class="form-control custom-select" id="roadType" name="road_type_id">
                                        @foreach($roadTypes as $roadType)
                                            <option value="{{$roadType->id}}">{{$roadType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mb-1 shadow-none border">
                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFour"
                       aria-expanded="false" aria-controls="collapseFour">
                        <div class="card-header" id="headingFour">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="more-horizontal"></i> Additional Details <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                         data-parent="#accordionExample" style="">
                        <div class="card-body text-muted">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="buildYear">Build Year</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="buildYear"
                                           placeholder="in B.S" name="built_year">
                                </div>


                                <label class="col-lg-1 col-form-label" for="month">Month</label>
                                <div class="col-lg-2">
                                    <select data-plugin="customselect" id="month" class="form-control" name="month_id">
                                        @foreach($months as $month)
                                            <option value="{{$month->id}}">{{$month->month}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <label class="col-lg-2 col-form-label" for="furnishing">Furnishing</label>
                                <div class="col-lg-2">
                                    <select class="form-control custom-select" id="furnishing" name="furnishing_id">
                                        @foreach($furnishings as $furnishing)
                                            <option value="{{$furnishing->id}}">{{$furnishing->type}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="kitchen">Kitchen</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="kitchen" name="kitchen_count"
                                           placeholder="">
                                </div>


                                <label class="col-lg-1 col-form-label" for="dining">Dining</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="dining" name="dining_room_count"
                                           placeholder="">
                                </div>

                                <label class="col-lg-1 col-form-label" for="hall">Hall</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="hall" name="hall_count"
                                           placeholder="">
                                </div>
                                <label class="col-lg-2 col-form-label" for="bed">Bed Room</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="bed" name="bed_room_count"
                                           placeholder="">
                                </div>
                            </div>

                            <div class="form-group row">


                                <label class="col-lg-2 col-form-label" for="bath">Bathroom</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="bath" name="bath_room_count"
                                           placeholder="">
                                </div>
                                <label class="col-lg-2 col-form-label" for="floor">Total Floor</label>
                                <div class="col-lg-1">
                                    <input type="number" class="form-control" id="floor" name="total_floor_count"
                                           placeholder="">
                                </div>
                                <label class="col-lg-1 col-form-label" for="parking">Parking</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="parking" name="parking"
                                           placeholder="parking for bike and car">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="amenity">Amenities</label>

                                <div class="col-lg-10">

                                    <select class="form-control wide" id="amenity" data-plugin="customselect" multiple name="amenity_id">
                                        @foreach($amenities as $amenity)
                                            <option value="{{$amenity->id}}">{{$amenity->amenity}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label" for="ownership">Ownership Type</label>

                                <div class="col-lg-5">
                                    <select class="form-control custom-select" id="ownership" name="ownership_type_id">

                                        @foreach($ownershipTypes as $ownershipType)
                                            <option value="{{$ownershipType->id}}">{{$ownershipType->type}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>

                <div class="card mb-1 shadow-none border">
                    <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseFive"
                       aria-expanded="false" aria-controls="collapseFive">
                        <div class="card-header" id="headingFive">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="image"></i> Media <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                         data-parent="#accordionExample" style="">
                        <div class="card-body text-muted">

                            <label class="" for="image">Main Image</label>

                            <div class="">
                                <input type="file" name="image" id="image" class="dropify">
                            </div>

                        </div>


                        <div class="card-body text-muted">

                            <label class="" for="image">Other Images <code>[Multiple : Upto 5 images]</code></label>

                            <div class="">
                                <input type="file" name="images[]" id="image" class="dropify" multiple>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="card mb-0 shadow-none border">

                    <a href="#" class="text-dark collapsed" data-toggle="collapse"
                       data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <div class="card-header" id="headingSix">
                            <h5 class="m-0 font-size-16">
                                <i data-feather="dollar-sign"></i> Price <i
                                    class="uil uil-angle-down float-right accordion-arrow"></i>
                            </h5>
                        </div>
                    </a>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                         data-parent="#accordionExample">
                        <div class="card-body text-muted">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Price</label>
                                <div class="col-lg-2">
                                    <input type="text" class="form-control" id="simpleinput" value=""
                                           placeholder="in NPR" name="price">
                                </div>


                                <label class="col-lg-2 col-form-label">Price On</label>

                                <div class="col-lg-3">
                                    <select class="form-control custom-select" id="priceOn" name="price_on_id">
                                        @foreach($prices as $price)
                                            <option value="{{$price->id}}">{{$price->price}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <button type="submit" class="btn btn-info">submit</button>
                </div>
            </div>
        </form>
    </div>

</div>


@include('cms._partials._footer')
