@include('lander._partials._header')

<?php
/** @var App\Models\Property $property ; */
?>
<section class="site-slider">
    <div id="siteslider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('{{asset('uploads/' . $property->image)}}')"></div>
        </div>
    </div>
    <div class="property-single-title property-single-title-gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h1>{{$property->title}}</h1>
                    <h6><i class="mdi mdi-home-map-marker"></i>{{$property->state->name.','.$property->district->name }}</h6>
                </div>
                <div class="col-lg-4 col-md-4 text-right">
                    <h6 class="mt-2">For {{$property->purpose->purpose}}</h6>
                    <h2 class="text-success">Rs. {{$property->price}} <small>{{$property->priceOn->price}}</small></h2>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <p class="mt-1 mb-0"><strong>Property ID</strong> : {{$property->id}} &nbsp;&nbsp; <strong>Add to favorites</strong> <i class="mdi mdi-heart"></i></p>
                </div>
                <div class="col-lg-4 col-md-4 text-right">
                    <div class="footer-social">
                        <span>Share :</span> &nbsp;
                        <a href="property-single-gallery.html#"><i class="mdi mdi-facebook"></i></a>
                        <a href="property-single-gallery.html#"><i class="mdi mdi-twitter"></i></a>
                        <a href="property-single-gallery.html#"><i class="mdi mdi-instagram"></i></a>
                        <a href="property-single-gallery.html#"><i class="mdi mdi-google"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Property Single Slider -->
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-body site-slider pl-0 pr-0 pt-0 pb-0">
                        <div id="sitesliderz" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#sitesliderz" data-slide-to="0" class="active"></li>
                                <li data-target="#sitesliderz" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                @foreach($property->propertyImages() as $image)
                                    <div class="carousel-item active rounded" style="background-image:url({{asset('uploads/'.$image->image)}})"></div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Features</h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-move-resize-variant"></i>
                                    <strong>Total Area:</strong>
                                    <p class="mb-0">{{$property->total_area}}-{{$property->measurementArea->unit}} </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-note-multiple"></i>
                                    <strong>Ownership:</strong>
                                    <p class="mb-0">{{$property->ownership_type_id}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-road"></i>
                                    <strong>Road Access:</strong>
                                    <p class="mb-0">{{$property->road_access_width}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-scale-bathroom"></i>
                                    <strong>Bath Rooms:</strong>
                                    <p class="mb-0">{{$property->bath_room_count}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-floor-plan"></i>
                                    <strong>Floors:</strong>
                                    <p class="mb-0">{{$property->total_floor_count}}</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="list-icon">
                                    <i class="mdi mdi-garage"></i>
                                    <strong>Parking:</strong>
                                    <p class="mb-0">{{$property->parking}}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Description</h5>
                        <p class="mb-0">{{$property->description}} </p>
                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Amenities</h5>
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <ul class="sidebar-card-list">

                                    @foreach($property->amenities as $amenity)
                                        <li><i class="mdi mdi-checkbox-marked-outline "></i> {{$amenity->amenity}}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Location</h5>
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6">
                                <p><strong class="text-dark">Address :</strong> 1200 Petersham Town</p>
                                <p><strong class="text-dark">State :</strong> Newcastle</p>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <p><strong class="text-dark">City :</strong> Sydney</p>
                                <p><strong class="text-dark">Zip/Postal Code :</strong> 54330</p>
                            </div>
                        </div>
                        <div class="map" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <script>(function () {
                                    var setting = {"height": 540, "width": 803, "zoom": 15, "queryString": "Candás, Spain", "place_id": "ChIJuXoxw-aANg0RZ1DUQHMSFTM", "satellite": false, "centerCoord": [43.59051127662882, -5.768219799999998], "cid": "0x3315127340d45067", "lang": "en", "cityUrl": "/spain/candas-8349", "cityAnchorText": "Map of Candas, Asturias, Spain", "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3", "embed_id": "215844"};
                                    var d = document;
                                    var s = d.createElement('script');
                                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=215844';
                                    s.async = true;
                                    s.onload = function (e) {
                                        window.OneMap.initMap(setting)
                                    };
                                    var to = d.getElementsByTagName('script')[0];
                                    to.parentNode.insertBefore(s, to);
                                })();
                            </script>
                            <a href="https://1map.com/map-embed">1 Map</a>
                        </div>
                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Video</h5>
                        <a href="property-single-gallery.html#"><img class="rounded img-fluid" src="img/video.jpg" alt="Card image cap"></a>
                    </div>
                </div>
                <div class="card padding-card reviews-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">3 Reviews</h5>
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="img/user/1.jpg" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Stave Martin <small>Feb 12, 2020</small>
                                    <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
                                 </span>
                                </h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="d-flex mr-3 rounded-circle" src="img/user/2.jpg" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Mark Smith <small>Feb 09, 2020</small> <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/1</small>
                                 </span>
                                </h5>
                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                <div class="media mt-4">
                                    <img class="d-flex mr-3 rounded-circle" src="img/user/3.jpg" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-0">Ryan Printz <small>Nov 13, 2020</small> <span class="star-rating float-right">
                                       <i class="mdi mdi-star text-warning"></i>
                                       <i class="mdi mdi-star text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i>
                                       <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/5</small>
                                       </span>
                                        </h5>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="media mt-4">
                            <img class="d-flex mr-3 rounded-circle" src="img/user/4.jpg" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">Stave Mark <small>Feb 12, 2020</small>
                                    <span class="star-rating float-right">
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i>
                                 <i class="mdi mdi-star-half text-warning"></i><small class="text-success">5/2</small>
                                 </span>
                                </h5>
                                <p class="mb-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card padding-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Leave a Review</h5>
                        <form name="sentMessage">
                            <div class="row">
                                <div class="control-group form-group col-lg-4 col-md-4">
                                    <div class="controls">
                                        <label>Your Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group form-group col-lg-4 col-md-4">
                                    <div class="controls">
                                        <label>Your Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="control-group form-group col-lg-4 col-md-4">
                                    <div class="controls">
                                        <label>Rating <span class="text-danger">*</span></label>
                                        <select class="form-control custom-select">
                                            <option>1 Star</option>
                                            <option>2 Star</option>
                                            <option>3 Star</option>
                                            <option>4 Star</option>
                                            <option>5 Star</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Review <span class="text-danger">*</span></label>
                                    <textarea rows="10" cols="100" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">About Agent</h5>
                        <div id="featured-properties">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="card card-list">
                                        <a href="property-single-gallery.html#">
                                            <img class="card-img-top" src="img/agent.jpg" alt="Card image cap">
                                            <div class="card-body pb-0">
                                                <h5 class="card-title mb-4">Jennie Wilson</h5>
                                                <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-phone"></i> (950) 491-570-180</h6>
                                                <h6 class="card-subtitle mb-3 text-muted"><i class="mdi mdi-email"></i> <span class="__cf_email__" data-cfemail="10636560607f6264507568717d607c753e737f7d">[email&#160;protected]</span></h6>
                                                <h6 class="card-subtitle text-muted"><i class="mdi mdi-link"></i> www.Webartinfo.com</h6>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Request a Showing</h5>
                        <form name="sentMessage">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Your Name <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Enter Your Name" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Your Email <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Enter Your Email" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Enter Phone Number" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Message <span class="text-danger">*</span></label>
                                    <textarea rows="5" cols="50" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">SEND REQUEST</button>
                        </form>
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
                                        <a href="property-single-gallery.html#">
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
                                        <a href="property-single-gallery.html#">
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
                <div class="card sidebar-card">
                    <div class="card-body">
                        <h5 class="card-title mb-4">Mortage Calculator</h5>
                        <form name="sentMessage">
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Sale Price <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="$" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Down payment <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="$" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Term <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Years" class="form-control" required>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Interest Rate <span class="text-danger">*</span></label>
                                    <input type="text" placeholder="%" class="form-control" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">CALCULATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Property Single Slider -->
<!-- Similar Properties -->
<section class="section-padding  border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 section-title text-left mb-4">
                <h2>Similar Properties</h2>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card card-list">
                    <a href="property-single-gallery.html#">
                        <span class="badge badge-success">For Sale</span>
                        <img class="card-img-top" src="img/list/1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">House in Kent Street</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> 127 Kent Sreet, Sydny, NEW 2000</h6>
                            <h2 class="text-success mb-0 mt-3">
                                $130,000 <small>/month</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span>
                            <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span>
                            <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card card-list">
                    <a href="property-single-gallery.html#">
                        <span class="badge badge-secondary">For Rent</span>
                        <img class="card-img-top" src="img/list/2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Family House in Hudson</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> Hoboken, NJ, USA</h6>
                            <h2 class="text-success mb-0 mt-3">
                                $127,000 <small>/month</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <span><i class="mdi mdi-sofa"></i> Beds : <strong>5</strong></span>
                            <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>3</strong></span>
                            <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>300 sq ft</strong></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="card card-list">
                    <a href="property-single-gallery.html#">
                        <span class="badge badge-success">For Sale</span>
                        <img class="card-img-top" src="img/list/3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Loft Above The City</h5>
                            <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> Hope Street (Stop P), London SW11, UK</h6>
                            <h2 class="text-success mb-0 mt-3">
                                $55,000 <small>/month</small>
                            </h2>
                        </div>
                        <div class="card-footer">
                            <span><i class="mdi mdi-sofa"></i> Beds : <strong>2</strong></span>
                            <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>1</strong></span>
                            <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>100 sq ft</strong></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Similar Properties -->
<!-- Join Team -->
<section class="py-5 bg-primary">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-8">
                <h2 class="text-white my-2">Join Our Professional Team & Agents</h2>
            </div>
            <div class="col-md-4 text-center text-md-right">
                <button type="button" class="btn btn-outline-light my-2">Read More</button>
                <button type="button"
                        class="btn btn-light my-2">Contact Us
                </button>
            </div>
        </div>
    </div>
</section>
<!-- End Join Team -->
<!-- Footer -->
<section class="section-padding footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid footer-logo" src="img/logo.svg" alt="">
                <h6 class="mb-4 mt-5">GET IN TOUCH</h6>
                <div class="footer-social">
                    <a href="property-single-gallery.html#"><i class="mdi mdi-facebook"></i></a>
                    <a href="property-single-gallery.html#"><i class="mdi mdi-twitter"></i></a>
                    <a href="property-single-gallery.html#"><i class="mdi mdi-instagram"></i></a>
                    <a href="property-single-gallery.html#"><i class="mdi mdi-google"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">PRODUCTS</h6>
                <ul>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">SERVICES</h6>
                <ul>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">CONNECT</h6>
                <ul>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">LEGAL</h6>
                <ul>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="property-single-gallery.html#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                    <ul>
            </div>
        </div>
    </div>
</section>
<!-- End Footer -->
<!-- Copyright -->
<section class="pt-4 pb-4">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6">
                <p class="mt-0 mb-0">© Copyright 2020 Manland. All Rights Reserved</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="mt-0 mb-0">
                    Made with <i class="mdi mdi-heart text-danger"></i> by
                    <a class="text-dark font-weight-bold" target="_blank" href="https://webartinfo.com/">Webartinfo</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Copyright -->
@include('lander._partials._footer')
