<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Shreyu - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description"/>
    <meta content="Coderthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" href="{{ asset('cms_assets/images/favicon.ico') }}">
    <link href="{{ asset('cms_assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Plugin CSS -->
    <link href="{{asset('cms_assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet"/>
    <link href="{{ asset('cms_assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/libs/multiselect/multi-select.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('cms_assets/css/switchery.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('cms_assets/libs/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet">

    <!-- App Css -->

    <link href="{{ asset('cms_assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('cms_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css"/>

    <link href="{{ asset('cms_assets/css/app.min.css') }}" rel="stylesheet" type="text/css"/>


</head>
<body>
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div>
            <div class="spinner-grow text-primary m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <div class="spinner-grow text-success m-2" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>
<div id="wrapper">
    <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
        <div class="container-fluid">
            <!-- LOGO -->
            <a href="{{route('admin.dashboard')}}" class="navbar-brand mr-0 mr-md-2 logo">
            <span class="logo-lg">
                <img src="{{asset('cms_assets/images/logo.png')}}" alt="" height="24">
                <span class="d-inline h5 ml-1 text-logo">RealState</span>
            </span>
                <span class="logo-sm">
                <img src="{{asset('cms_assets/images/logo.png')}}" alt="" height="24">
            </span>
            </a>

            <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                <li class="">
                    <button class="button-menu-mobile open-left disable-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu menu-icon">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close-icon">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
                    <div class="app-search">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                        </form>
                    </div>
                </li>




                <li class="dropdown d-none d-lg-block" data-toggle="tooltip" data-placement="left" title="Settings">
                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i data-feather="settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="" class="dropdown-item notify-item">
                            <i data-feather="settings" width="18px" class="mr-2"></i>
                            <span class="align-middle">Account Settings</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="box" width="18px" class="mr-2"></i>
                            <span class="align-middle">Preferences</span>
                        </a>

                        <a href="" class="dropdown-item notify-item">
                            <i data-feather="log-out" width="18px" class="mr-2"></i>
                            <span class="align-middle">Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
