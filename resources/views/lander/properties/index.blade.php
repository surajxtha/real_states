@include('lander._partials._header')
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
    <div class="slider-form inner-page-form">
        <div class="container">
            <h1 class="text-center mb-5">Find Your Favorite Property</h1>
            <form>
                <div class="row no-gutters">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Any Location</option>
                                <option>Australia</option>
                                <option>Brazil</option>
                                <option>Cambodia</option>
                                <option>Dominica</option>
                                <option>France</option>
                                <option>Guyana</option>
                                <option>Hong Kong</option>
                                <option>Ireland</option>
                                <option>Japan</option>
                                <option>Malaysia</option>
                                <option>Nepal</option>
                                <option>Oman</option>
                                <option>Peru</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-city"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Any Status</option>
                                <option>Heigh </option>
                                <option>Midium</option>
                                <option>Normal</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-home-modern"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Any Type</option>
                                <option>Property Types</option>
                                <option value="">House/Villa</option>
                                <option value="">Flat</option>
                                <option value="">Plot/Land</option>
                                <option value="">Office Space</option>
                                <option value="">Shop/Showroom</option>
                                <option value="">Commercial Land</option>
                                <option value="">Warehouse/ Godown</option>
                                <option value="">Industrial Building</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-hotel"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Min. Bedrooms</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-magnify-minus-outline"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Min Size</option>
                                <option>100</option>
                                <option>200</option>
                                <option>300</option>
                                <option>400</option>
                                <option>500</option>
                                <option>600</option>
                                <option>700</option>
                                <option>800</option>
                                <option>900</option>
                                <option>1000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-magnify-plus-outline"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Max Size</option>
                                <option>1000</option>
                                <option>2000</option>
                                <option>3000</option>
                                <option>4000</option>
                                <option>5000</option>
                                <option>6000</option>
                                <option>7000</option>
                                <option>8000</option>
                                <option>9000</option>
                                <option>10000</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-hot-tub"></i></div>
                            <select class="form-control select2" name="location">
                                <option disabled="" selected="">Baths</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="input-group"><button type="submit" class="btn btn-success btn-block no-radius font-weight-bold">SEARCH</button>   </div>
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
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> House/Villa <span class="sidebar-badge">90</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Flat <span class="sidebar-badge">60</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Plot/Land <span class="sidebar-badge">44</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Office Space <span class="sidebar-badge">38</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Shop/Showroom <span class="sidebar-badge">29</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Commercial Land <span class="sidebar-badge">28</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Warehouse/ Godown <span class="sidebar-badge">12</span></a></li>
                            <li><a href="#"><i class="mdi mdi-chevron-right"></i> Industrial Building <span class="sidebar-badge">8</span></a></li>
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
                <div class="site_top_filter row">
                    <div class="col-lg-6 col-md-6 tags-action">
                        <span>For Rent <a href="#"><i class="mdi mdi-window-close"></i></a></span>
                        <span>Plot/Land <a href="#"><i class="mdi mdi-window-close"></i></a></span>
                    </div>
                    <div class="col-lg-6 col-md-6 sort-by-btn float-right">
                        <div class="view-mode float-right">
                            <a href="properties-grid.html"><i class="mdi mdi-grid"></i></a><a class="active" href="properties-list.html"><i class="mdi mdi-format-list-bulleted"></i></a>
                        </div>
                        <div class="dropdown float-right">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-filter"></i> Sort by
                            </button>
                            <div class="dropdown-menu float-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Popularity </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> New </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Discount </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: Low to High </a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-chevron-right"></i> Price: High to Low </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($properties as $property)
                        <div class="col-lg-12 col-md-12">
                            <div class="card card-list card-list-view">
                                <a href="{{route('site.properties.show',$property->slug)}}">
                                    <div class="row no-gutters">
                                        <div class="col-lg-5 col-md-5">
                                            @foreach($purposes as $purpose)
                                                @if($purpose->id == $property->purpose_id)
                                                    <span class="{{$purpose->id==1 ? 'badge badge-danger' : 'badge badge-success' }}">{{$purpose->purpose}}</span>
                                                @endif
                                            @endforeach
                                            <img class="card-img-top" src="{{asset('uploads/'.$property->image)}}" alt="">
                                        </div>
                                        <div class="col-lg-7 col-md-7">
                                            <div class="card-body">
                                                <h5 class="card-title">{{$property->title}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> 250-260 3rd St, Hoboken, NJ 07030, USA</h6>
                                                <h2 class="text-success mb-0 mt-3">
                                                    Rs.{{$property->price}}
                                                    @foreach($prices as $price)
                                                        @if($price->id==$property->price_on_id)
                                                            <small>{{$price->price}}</small>
                                                        @endif
                                                    @endforeach
                                                </h2>
                                            </div>
                                            <div class="card-footer">
                                            <span><i class="mdi mdi-move-resize-variant"></i>Total Area :
                                                  @foreach($measurements as $measurement)
                                                    @if($measurement->id==$property->measurement_area_id)
                                                        <strong>
                                                    {{$property->total_area}}{{$measurement->unit}}

                                                </strong>
                                                    @endif
                                                @endforeach</span>
                                                <span><i class="mdi mdi-road"></i> Road :
                                                @foreach($roadTypes as $roadType)
                                                        @if($roadType->id==$property->road_type_id)
                                                            <strong>{{$property->road_access_width}} ft. ({{$roadType->type}})</strong>
                                                        @endif
                                                    @endforeach
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach



                </div>
                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End Properties List -->


@include('lander._partials._footer')
