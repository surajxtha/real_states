<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Webartinfo">
    <meta name="author" content="Webartinfo">
    <title>Manland - Bootstrap Light Real Estate HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('lander_assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.9.55/css/materialdesignicons.min.css" integrity="sha512-vIgFb4o1CL8iMGoIF7cYiEVFrel13k/BkTGvs0hGfVnlbV6XjAA0M0oEHdWqGdAVRTDID3vIZPOHmKdrMAUChA==" crossorigin="anonymous" />
    <!-- Select2 CSS -->
    <link href="{{asset('lander_assets/vendor/select2/css/select2-bootstrap.css')}}" />
    <link href="{{asset('lander_assets/vendor/select2/css/select2.min.css')}}" rel="stylesheet" />

    <link href="{{asset('lander_assets/libs/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('lander_assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<!-- Navbar -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand text-success logo" href="index.html">
                <img class="img-fluid" src="img/logo.svg" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="add-property.html#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Properties
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="properties-grid.html">Properties Grid</a>
                            <a class="dropdown-item" href="properties-list.html">Properties List</a>
                            <a class="dropdown-item" href="property-single-slider.html">Property Single Slider</a>
                            <a class="dropdown-item" href="property-single-gallery.html">Property Single Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="add-property.html#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Agency
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="agency-list.html">Agency List</a>
                            <a class="dropdown-item" href="agency-profile.html">Agency Profile</a>
                            <a class="dropdown-item" href="agents.html">Agents</a>
                            <a class="dropdown-item" href="agent-profile.html">Agent Profile</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="add-property.html#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blog
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="blog.html">Blog</a>
                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="add-property.html#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="user-profile.html">User Profile</a>
                            <a class="dropdown-item" href="social-profiles.html">Social Profiles</a>
                            <a class="dropdown-item" href="my-properties.html">My Properties</a>
                            <a class="dropdown-item" href="favorite-properties.html">Favorite Properties</a>
                            <a class="dropdown-item" href="add-property.html">Add Property</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="add-property.html#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownPortfolio">
                            <a class="dropdown-item" href="about.html">About Us</a>
                            <a class="dropdown-item" href="faq.html">FAQ</a>
                            <a class="dropdown-item" href="contact.html">Contact</a>
                            <a class="dropdown-item" href="not-found.html">404 Page</a>
                        </div>
                    </li>
                </ul>
                <div class="my-2 my-lg-0">
                    <ul class="list-inline main-nav-right">
                        <li class="list-inline-item">
                            <a class="btn btn-link btn-sm" href="login.html">Logout</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn btn-success btn-sm" href="add-property.html"><i class="mdi mdi-home-account"></i> ADD PROPERTY</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- End Navbar -->
<!-- Add Property -->
<section class="section-padding pt-0 user-pages-main">
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
                                <a class="nav-link" href="social-profiles.html">Social Profiles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="my-properties.html">My Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="favorite-properties.html">Favorite Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-success" href="add-property.html">Add Property</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-danger" href="{{ route('logout') }}">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <form>
                    <div class="card padding-card">
                        <div class="card-body">
                            <h5 class="card-title mb-4">Property Description</h5>
                            <div class="form-group">
                                <label>Property Title <span class="text-danger">*</span> {{auth()->user()->email}}</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
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
                                    <select class="form-control select2" id="amenity_id" data-plugin="customselect" multiple name="amenity_id[]">
                                        @foreach($amenities as $amenity)
                                            <option value="{{$amenity->id}}">{{$amenity->amenity}}</option>
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
                                        <input type="file" name="image" id="image" class="dropify">
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
<!-- Footer -->
<section class="section-padding footer bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="img-fluid footer-logo" src="img/logo.svg" alt="">
                <h6 class="mb-4 mt-5">GET IN TOUCH</h6>
                <div class="footer-social">
                    <a href="#"><i class="mdi mdi-facebook"></i></a>
                    <a href="#"><i class="mdi mdi-twitter"></i></a>
                    <a href="#"><i class="mdi mdi-instagram"></i></a>
                    <a href="#"><i class="mdi mdi-google"></i></a>
                </div>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">PRODUCTS</h6>
                <ul>
                    <li>
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">SERVICES</h6>
                <ul>
                    <li>
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Pagebuilder
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">CONNECT</h6>
                <ul>
                    <li>
                        <a href="#!" class="text-reset">
                            Page Builder
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            UI Kit
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Styleguide
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <ul>
            </div>
            <div class="col-md-2">
                <h6 class="mb-4">LEGAL</h6>
                <ul>
                    <li>
                        <a href="#!" class="text-reset">
                            Documentation
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
                            Changelog
                        </a>
                    </li>
                    <li>
                        <a href="#!" class="text-reset">
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
<!-- Bootstrap core JavaScript -->
<script src="{{asset('lander_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('lander_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<script src="{{asset('lander_assets/js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('lander_assets/js/contact_me.js')}}"></script>
<!-- select2 Js -->
<script src="{{asset('lander_assets/vendor/select2/js/select2.min.js')}}"></script>
<script src="{{ asset('cms_assets/libs/dropify/js/dropify.min.js')}}"></script>
<!-- Custom -->
<script src="{{asset('lander_assets/js/custom.js')}}"></script>
</body>
</html>

