<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>{{ config('app.name', 'app.name') }}</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('template/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('template/adminbsb/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{asset('template/adminbsb/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('template/adminbsb/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('template/adminbsb/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!--DataTable Jquery -->
    <link href="{{asset('template/adminbsb/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">


    <!-- Custom Css -->
    <link href="{{asset('template/adminbsb/css/style.css')}}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('template/adminbsb/css/themes/all-themes.css')}}" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    {{-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div> --}}
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="">FKM Interindo shop</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <!-- #END# Tasks -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ asset('template/adminbsb/images/user.png') }}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>AUTH USER EMAIL<b></div>
                    <div class="email"><b>AUTH USER EMAIL<b></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right" style="left: -120px !important;">
                            <li><a href="javascript:void(0);" 
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">FKM Interindo shop - Menu</li>
                    <li class="active">
                        <a href="{{ route('home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">people</i>
                            <span>Master</span>
                        </a>
                        <ul class="ml-menu">

                            <li>
                                <a href="/vendor">
                                    <span>Vendor</span>
                                </a>
                            </li>
                            <li>
                                <a href="/kategori">
                                    <span>Kategori</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Produk</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#">
                                    <span>Wali Kelas</span>
                                </a>
                            </li> --}}

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="javascript:void(0);">FKM Interindo shop</a>.
                </div>
                <div class="version">
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>{{ Request::segment(1) }}</h2>
            </div>
            @yield('content')
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{ asset('template/adminbsb/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('template/adminbsb/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/node-waves/waves.js')}}"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/jquery-countto/jquery.countTo.js')}}"></script>

    <!-- Morris Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('template/adminbsb/plugins/morrisjs/morris.js')}}"></script>

    <!-- ChartJs -->
    <script src="{{ asset('template/adminbsb/plugins/chartjs/Chart.bundle.js')}}"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{ asset('template/adminbsb/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('template/adminbsb/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('template/adminbsb/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{ asset('template/adminbsb/plugins/flot-charts/jquery.flot.time.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{ asset('template/adminbsb/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- DataTable Jquery -->
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('template/adminbsb/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>
    
    @switch(Request::segment(1))
        @case('vendor')
            <script src="{{asset('template/adminbsb/js/pages/tables/jquery-datatable.js')}}"></script>
            <script src="{{asset('template/adminbsb/js/pages/ui/modals.js')}}"></script>
            @break
        @case('kategori')
            <script src="{{asset('template/adminbsb/js/pages/tables/jquery-datatable-kategori.js')}}"></script>
            <script src="{{asset('template/adminbsb/js/pages/ui/modals-kategori.js')}}"></script>
            @break
        @default
            
    @endswitch
    {{-- <script src="{{asset('template/adminbsb/js/pages/tables/jquery-datatable.js')}}"></script> --}}

    <!-- Modals JQUERY -->
    {{-- <script src="{{asset('template/adminbsb/js/pages/ui/modals.js')}}"></script> --}}



    <!-- Custom Js -->
    <script src="{{ asset('template/adminbsb/js/admin.js')}}"></script>
    <script src="{{ asset('template/adminbsb/js/pages/index.js')}}"></script>



    <!-- Demo Js -->
    <script src="{{ asset('template/adminbsb/js/demo.js')}}"></script>


    <!-- Jquery DataTable Plugin Js -->
    @if (Request::segment(1) == 'siswa' || Request::segment(1) == 'guru' || Request::segment(1) == 'mapels' || Request::segment(1) == 'absen' || Request::segment(1) == 'nilai') 
        @if (Request::segment(2) == '')
            @yield('jsindex'.Request::segment(1))
        @elseif(Request::segment(2) == 'create')
            @yield('jscreate'.Request::segment(1))
        @elseif(Request::segment(3) == 'edit')
            @yield('jsedit'.Request::segment(1))
        @endif
    @endif

    <!-- Custom Js -->
    <script src="{{ asset('template/js/admin.js') }}"></script>
    @if (Request::segment(1) == 'siswa' || Request::segment(1) == 'guru' || Request::segment(1) == 'mapels' || Request::segment(1) == 'absen' || Request::segment(1) == 'nilai') 
        @if (Request::segment(2) == '')
            <script src="{{ asset('template/js/pages/index.js') }}"></script>
        @elseif(Request::segment(2) == 'create' || Request::segment(3) == 'edit' || Request::segment(1) == '')
            <script src="{{ asset('template/js/pages/forms/basic-form-elements.js') }}"></script>    
        @endif
    @endif

    <script type="text/javascript">
    if (sessionStorage.getItem('email') != null) {
        $('.email').text(sessionStorage.getItem('email'));
        $('.name').text(sessionStorage.getItem('status'));
        $('.logout').click(function (e) { 
            e.preventDefault();
            sessionStorage.clear();
            window.location.href = "/";
        });   
    }else{
        
    }
    </script>



</body>

</html>