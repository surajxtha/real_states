@include('lander._partials._header')
<?php
/** @var App\Models\Property $property ; */
?>
<!-- Main Slider With Form -->
<section class="site-slider">
    <div id="siteslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#siteslider" data-slide-to="0" class="active"></li>
            <li data-target="#siteslider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('img/slider/1.jpg')">
                <div class="overlay"></div>
            </div>
            <div class="carousel-item" style="background-image: url('img/slider/2.jpg')">
                <div class="overlay"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="properties-list.html#siteslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="properties-list.html#siteslider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="slider-form">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="subtitle mb-1 mt-0 text-shadow text-dark">Uncover the best offers on the real estate
                    market.
                </h6>
                <h1 class="display-4 mt-0 font-weight-bold text-shadow">Let us guide you home
                </h1>
            </div>
            <form action="{{route('search')}}" method="GET">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                            <select class="form-control select2 no-radius" id="district" name="purpose_id" required>
                                <option disabled selected>Select Purpose</option>
                                @foreach($purposes as $purpose)
                                    <option value="{{$purpose->id}}">{{$purpose->purpose}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                            <select class="form-control select2 no-radius" id="district" name="district_id">

                                <option value="">Locations</option>
                                @foreach($districts as $district)
                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                            <select class="form-control select2 no-radius" name="type_id">
                                <option value="">Property Type</option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->type}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success btn-block no-radius font-weight-bold">SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Main Slider With Form -->
<!-- Properties List -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Property Type</h5>
                        <ul class="sidebar-card-list">
                            @foreach($types as $type)
                                <li><a href="{{route('site.property.type.index', $type->id)}}"><i class="mdi mdi-chevron-right"></i> {{$type->type}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Property Status</h5>
                        <ul class="sidebar-card-list">
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> For Rent <span class="sidebar-badge">600</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> For Sale <span class="sidebar-badge">1200</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Property By City</h5>
                        <ul class="sidebar-card-list">
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> New York <span class="sidebar-badge">220</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Los Angeles <span class="sidebar-badge">150</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Chicago <span class="sidebar-badge">100</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Houston <span class="sidebar-badge">50</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Philadelphia <span class="sidebar-badge">23</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Featured Properties</h5>
                        <div id="featured-properties" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#featured-properties" data-slide-to="0" class="active"></li>
                                <li data-target="#featured-properties" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card card-list">
                                        <a href="#">
                                            <span class="badge badge-success">For Sale</span>
                                            <img class="card-img-top" src="img/list/1.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">House in Kent Street</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent Sreet, Sydny, NEW 2000</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    $130,000 <small>/month</small>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="card card-list">
                                        <a href="#">
                                            <span class="badge badge-secondary">For Rent</span>
                                            <img class="card-img-top" src="img/list/2.png" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Family House in Hudson</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> Hoboken, NJ, USA</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    $127,000 <small>/month</small>
                                                </h2>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    @forelse($properties as $property)
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-list card-list-view">
                                <a href="{{route('site.properties.show',$property->slug)}}">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-5">
                                            <span class="{{$property->purpose->id==1 ? 'badge badge-danger' : 'badge badge-success' }}">{{$property->purpose->purpose}}</span>
                                            <img class="card-img-top" src="{{asset('uploads/'.$property->image)}}" alt="">
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$property->title}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i>{{$property->state->name.','.$property->district->name }}</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    Rs.{{$property->price}}
                                                    <small>{{$property->priceOn->price}}</small>
                                                </h2>
                                            </div>
                                            <div class="card-footer">
                                                <span><i class="mdi mdi-move-resize-variant"></i>Total Area :<strong>{{$property->total_area}}{{$property->measurementArea->unit}}</strong></span>
                                                <span><i class="mdi mdi-road"></i> Road :<strong>{{$property->road_access_width}} ft. ({{$property->roadType->type}})</strong></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div><h5>No Data Found.</h5></div>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Properties List -->


@include('lander._partials._footer')
