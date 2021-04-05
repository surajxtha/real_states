@include('lander._partials._header')

<!-- Main Slider With Form -->
<section class="site-slider">
    <div id="siteslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#siteslider" data-slide-to="0" class="active"></li>
            <li data-target="#siteslider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url({{asset('lander_assets/img/slider/1.jpg')}})">
                <div class="overlay"></div>
            </div>
            <div class="carousel-item" style="background-image: url({{asset('lander_assets/img/slider/2.jpg')}})">
                <div class="overlay"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#siteslider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#siteslider" role="button" data-slide="next">
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
                            <select class="form-control select2 no-radius" id="district">

                                <option value="">Purpose</option>
                                @foreach($purposes as $purpose)
                                    <option value="$purpose->id">{{$purpose->purpose}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                            <select class="form-control select2 no-radius" id="district">

                                <option value="">Locations</option>
                                @foreach($districts as $district)
                                    <option value="$district->id">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                            <select class="form-control select2 no-radius">
                                <option value="">Property Type</option>
                                @foreach($types as $type)
                                    <option value="$type->id">{{$type->type}}</option>
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
    <div class="section-title text-center mb-5">
        <h2>Latest Properties</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
    <div class="container">

        <div class="row">
            @foreach($properties as $property)
                <div class="col-lg-4 col-md-4">
                    <div class="card card-list">
                        <a href="index.html#">
                            @foreach($purposes as $purpose)
                                @if($purpose->id == $property->purpose_id)
                                    <span class="{{$purpose->id==1 ? 'badge badge-danger' : 'badge badge-success' }}">{{$purpose->purpose}}</span>
                                @endif
                            @endforeach
                            <img class="card-img-top" src="{{asset('uploads/'.$property->image)}}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$property->title}}</h5>
                                <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent
                                    Sreet, Sydny, NEW 2000
                                </h6>
                                <div class="review-block-rate">
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                    <span class="badge-pill badge-success ml-2">3.2</span>
                                </div>
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
                        </a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- End Properties List -->


@include('lander._partials._footer')
