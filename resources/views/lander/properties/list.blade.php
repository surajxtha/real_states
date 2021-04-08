@include('lander._partials._header')
<?php
/** @var App\Models\Property $property ; */
?>
<!-- Inner Header -->
<section class="bg-dark py-5 user-header">
    <div class="container">
        <div class="row align-items-center mt-2 mb-5 pb-4">
            <div class="col">
                <!-- Heading -->
                <h1 class="text-white mb-2">
                    My Properties
                </h1>
                <!-- Text -->
                <h6 class="font-weight-normal text-white-50 mb-0">
                    Settings for <a class="text-reset" href="https://webartinfo.com/cdn-cgi/l/email-protection#4930263c3b3a203d2c092e24282025672a2624"><span class="__cf_email__" data-cfemail="9be2f4eee9e8f2effedbfcf6faf2f7b5f8f4f6">[email&#160;protected]</span></a>
                </h6>
            </div>
            <div class="col-auto">
                <!-- Button -->
                <button class="btn btn-sm btn-primary">
                    Log Out
                </button>
            </div>
        </div>
        <!-- / .row -->
    </div>
    <!-- / .container -->
</section>
<!-- End Inner Header -->
<!-- My Properties -->
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
                                <a class="nav-link active text-success" href="{{route('site.properties.list')}}">My Properties</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="">Add Property</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9">
                <div class="row">
                    @if(auth()->check())
                        @foreach($properties as $property)
                            @if($property->user_id==$userId)
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-list card-list-view">

                                <div class="row no-gutters">
                                    <div class="col-lg-5 col-md-5">
                                        <span class="badge {{$property->purpose->id==1 ? 'badge-warning' : 'badge-success'}} ">{{$property->purpose->purpose}}</span>
                                        <img class="card-img-top" src="{{asset('uploads/' . $property->image)}}" alt="Card image cap">
                                    </div>
                                    <div class="col-lg-7 col-md-7">
                                        <div class="card-body">
                                            <a href="{{route('site.properties.delete',$property->id)}}">
                                                <span class="float-right text-danger"><i class="mdi mdi-delete"></i>Delete </span>
                                            </a>
                                            <a href="{{route('site.properties.edit',$property->id)}}">
                                          <span class="float-right text-success"><i class="mdi mdi-table-edit"></i>Edit </span>
                                            </a>

                                            <h5 class="card-title">{{$property->title}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted"><i class="mdi mdi-home-map-marker"></i> {{$property->state->name.','.$property->district->name}}</h6>
                                            <h2 class="text-success mb-0 mt-3">
                                                Rs. {{$property->price}} <small>{{$property->priceOn->price}}</small>
                                            </h2>
                                        </div>
                                        <div class="card-footer">
                                            <span><i class="mdi mdi-sofa"></i> Beds : <strong>3</strong></span>
                                            <span><i class="mdi mdi-scale-bathroom"></i> Baths : <strong>2</strong></span>
                                            <span><i class="mdi mdi-move-resize-variant"></i> Area : <strong>587 sq ft</strong></span>
                                        </div>
                                    </div>
                                </div>

                        </div>
                    </div>
                            @endif
                        @endforeach
                    @endif

                <nav class="mt-5">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="my-properties.html#" tabindex="-1"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="my-properties.html#">1</a></li>
                        <li class="page-item"><a class="page-link" href="my-properties.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="my-properties.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="my-properties.html#">...</a></li>
                        <li class="page-item"><a class="page-link" href="my-properties.html#">10</a></li>
                        <li class="page-item">
                            <a class="page-link" href="my-properties.html#"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- End My Properties -->
@include('lander._partials._footer')
