@include('cms._partials._header')
@include('cms._partials._sidenav')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">

            <div class="card-body">
                <h5 class="header-title mb-3 mt-0">User</h5>
                <form action="">
                    <div class="accordion custom-accordionwitharrow" id="accordionExample">

                        <div class="card mb-1 shadow-none border">
                            <a href="#" class="text-dark collapsed" data-toggle="collapse" data-target="#collapseOne"
                               aria-expanded="false" aria-controls="collapseOne">
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
                                                <input type="text" class="form-control" id="simpleinput" value=""
                                                       placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label"
                                                   for="example-textarea">Description</label>
                                            <div class="col-lg-10">
                                                <textarea class="form-control" rows="5" id="example-textarea"
                                                          placeholder="Description"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Purpose</label>
                                            <div class="col-lg-2">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <label class="col-lg-2 col-form-label">Type</label>
                                            <div class="col-lg-2">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <label class="col-lg-2 col-form-label">Category</label>
                                            <div class="col-lg-2">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
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
                                            <label class="col-lg-1 col-form-label">State</label>
                                            <div class="col-lg-3">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <label class="col-lg-1 col-form-label">District</label>
                                            <div class="col-lg-3">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <label class="col-lg-1 col-form-label">City</label>
                                            <div class="col-lg-3">
                                                <select class="form-control custom-select">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-1 col-form-label">Area</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="simpleinput" value=""
                                                       placeholder="Your Area">
                                            </div>
                                            <label class="col-lg-2 col-form-label">House No./Landmark</label>
                                            <div class="col-lg-3">
                                                <input type="text" class="form-control" id="simpleinput" value=""
                                                       placeholder="Landmark">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Google Map Iframe</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" id="simpleinput" value=""
                                                       placeholder="Iframe">
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

                                        <label class="col-lg-2 col-form-label">Total Area</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <div class="col-lg-2">

                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <label class="col-lg-2 col-form-label">Built-up Area</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Road Access</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <div class="col-lg-2">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Property Facing</label>
                                        <div class="col-lg-3">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <label class="col-lg-2 col-form-label">Road Type</label>
                                        <div class="col-lg-3">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
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
                                        <label class="col-lg-2 col-form-label">Build Year</label>
                                        <div class="col-lg-2">
                                            <input type="text" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <div class="col-lg-1">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>


                                        <label class="col-lg-1 col-form-label">Month</label>
                                        <div class="col-lg-2">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <label class="col-lg-2 col-form-label">Furnishing</label>
                                        <div class="col-lg-2">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Kitchen</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>


                                        <label class="col-lg-1 col-form-label">Dining</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>

                                        <label class="col-lg-1 col-form-label">Hall</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>

                                        <label class="col-lg-2 col-form-label">Bed Room</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>

                                    </div>

                                    <div class="form-group row">


                                        <label class="col-lg-2 col-form-label">Bathroom</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <label class="col-lg-2 col-form-label">Total Floor</label>
                                        <div class="col-lg-1">
                                            <input type="number" class="form-control" id="simpleinput" value=""
                                                   placeholder="">
                                        </div>
                                        <label class="col-lg-1 col-form-label">Parking</label>
                                        <div class="col-lg-3">
                                            <input type="text" class="form-control" id="simpleinput" value=""
                                                   placeholder="parking for bike and car">
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Amenities</label>

                                        <div class="col-lg-10">

                                            <select class="form-control wide" data-plugin="customselect" multiple>
                                                <option value="0">Shreyu</option>
                                                <option value="1">Greeva</option>
                                                <option value="2">Dhyanu</option>
                                                <option value="3" disabled>Disabled</option>
                                                <option value="4">Mannat</option>
                                            </select>
                                        </div>


                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-2 col-form-label">Ownership Type</label>

                                        <div class="col-lg-5">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
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

                                    <div class="form-group row" class="dropzone" id="myAwesomeDropzone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple/>
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="h1 text-muted  uil-cloud-upload"></i>
                                            <h3>Drop files here or click to upload.</h3>
                                            <span class="text-muted font-13">(This is just a demo dropzone. Selected
                                                files are <strong>not</strong> actually uploaded.)</span>
                                        </div>


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
                                                   placeholder="">
                                        </div>
                                        <div class="col-lg-1">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>

                                        <label class="col-lg-2 col-form-label">Price On</label>

                                        <div class="col-lg-3">
                                            <select class="form-control custom-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <button type="submit" class="btn btn-info">submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

@include('cms._partials._footer')
