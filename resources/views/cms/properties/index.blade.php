@include('cms._partials._header')
@include('cms._partials._sidenav')

<div class="container-fluid">

    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">{{$title}}</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mt-0 mb-2">List of all properties added by users.</h4>
                    <table id="basic-datatable" class="table dt-responsive nowrap ">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Tags</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td>{{$property->title}}</td>

                                <td>{{$property->city . ', ' . $property->location_area}}</td>
                                <td>{{$property->price}}</td>

                                <td><input type="checkbox" data-id="{{ $property->id }}" name="status" class="js-switch-status" {{ $property->status == 1 ? 'checked' : '' }}></td>

                                <td>
                                    <span class="badge badge-{{$property->status == 1 ? 'success' : 'danger'}}" id="badge-status-{{$property->id}} ">{{$property->status == 1 ? 'Approved' : 'Not Approved'}}</span>
                                </td>
                                <td><a href="{{route('properties.edit',$property->id)}}" class="btn btn-primary">Edit</a>
                                    <a href="{{route('properties.delete',$property->id)}}" class="btn btn-danger">Delete</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>


                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
</div>

@include('cms._partials._footer')

<script>
    $(document).ready(function() {
        // Feature Elements
        let statusElements = Array.prototype.slice.call(document.querySelectorAll('.js-switch-status'));
        statusElements.forEach(function (html) {
            let statusSwitchery = new Switchery(html, {size: 'small'});
        });

        $('.js-switch-status').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let property_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '',
                data: {'status': status, 'property_id': property_id},
                success: function (data) {
                    console.log(data.message);
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    (data.status === 'success')
                        ? toastr.success(data.message)
                        : toastr.error(data.message);
                }
            });
            if ($(this).prop('checked') === true) {
                document.getElementById('badge-status-' + property_id).classList.remove('badge-danger');
                document.getElementById('badge-status-' + property_id).classList.add('badge-success');
                console.log('Green');
            } else {
                document.getElementById('badge-status-' + property_id).classList.add('badge-danger');
                document.getElementById('badge-status-' + property_id).classList.remove('badge-success');
                console.log('Yellow');
            }
        });
    });
</script>
