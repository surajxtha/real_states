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
            <form>
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-map-marker-multiple"></i></div>
                            <input class="form-control" placeholder="Enter Location, Project or Landmark" type="text">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-google-maps"></i></div>
                            <select class="form-control select2 no-radius" id="district">

                                <option value="">Locations</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="mdi mdi-security-home"></i></div>
                            <select class="form-control select2 no-radius">
                                <option value="">Property Type</option>
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
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success btn-block no-radius font-weight-bold">SEARCH</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Main Slider With Form -->
