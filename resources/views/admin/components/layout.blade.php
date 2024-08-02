<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Alliance - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- Icomoon -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/icomoon/icomoon.css') }}">

    <!-- -------------- FullCalendar -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/fullcalendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/magnific/magnific-popup.css') }}">

    <!-- -------------- Plugins -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/plugins/c3charts/c3.min.css') }}">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/allcp/forms/css/forms.css') }}">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">
    @stack('room_index-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/allcp/forms/css/style.css') }}">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">

<!-- -------------- Customizer -------------- -->
<div id="customizer" class="hidden-xs">
    <div class="panel">
        <div class="panel-heading">
        <span class="panel-icon">
          <i class="fa fa-cogs"></i>
        </span>
            <span class="panel-title"> Theme Options</span>
        </div>
        <div class="panel-body pn">
            <ul class="nav nav-list nav-list-sm" role="tablist">
                <li class="active">
                    <a href="#customizer-header" role="tab" data-toggle="tab">Navbar</a>
                </li>
                <li>
                    <a href="#customizer-sidebar" role="tab" data-toggle="tab">Sidebar</a>
                </li>
                <li>
                    <a href="#customizer-settings" role="tab" data-toggle="tab">Misc</a>
                </li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div role="tabpanel" class="tab-pane active" id="customizer-header">
                    <form id="customizer-header-skin">
                        <h6 class="mv20">Header Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin5" checked
                                                   value="bg-dark">
                                            <label for="headerSkin5">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-warning mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin2" value="bg-warning">
                                            <label for="headerSkin2">Warning</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-danger mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin3" value="bg-danger">
                                            <label for="headerSkin3">Danger</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-success mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin4" value="bg-success">
                                            <label for="headerSkin4">Success</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-primary mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin6" value="bg-primary">
                                            <label for="headerSkin6">Primary</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-info mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin7" value="bg-info">
                                            <label for="headerSkin7">Info</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-alert mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin8" value="bg-alert">
                                            <label for="headerSkin8">Alert</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-system mb10">
                                            <input type="radio" name="headerSkin" id="headerSkin9" value="bg-system">
                                            <label for="headerSkin9">System</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>

                            <div class="checkbox-custom checkbox-disabled fill mb10">
                                <input type="radio" name="headerSkin" id="headerSkin1" value="bgc-light">
                                <label for="headerSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                    <form id="customizer-footer-skin">
                        <h6 class="mv20">Footer Skins</h6>

                        <div class="customizer-sample">
                            <table>
                                <tr>
                                    <td>
                                        <div class="checkbox-custom fill checkbox-dark mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin1" checked value="">
                                            <label for="footerSkin1">Dark</label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="checkbox-custom checkbox-disabled fill mb10">
                                            <input type="radio" name="footerSkin" id="footerSkin2" value="footer-light">
                                            <label for="footerSkin2">Light</label>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-sidebar">
                    <form id="customizer-sidebar-skin">
                        <h6 class="mv20">Sidebar Skins</h6>

                        <div class="customizer-sample">
                            <div class="checkbox-custom fill checkbox-dark mb10">
                                <input type="radio" name="sidebarSkin" checked id="sidebarSkin2" value="">
                                <label for="sidebarSkin2">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb10">
                                <input type="radio" name="sidebarSkin" id="sidebarSkin1" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="customizer-settings">
                    <form id="customizer-settings-misc">
                        <h6 class="mv20 mtn">Layout Options</h6>

                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="header-option">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" checked="" id="sidebar-option">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-option">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb10">
                                <input type="checkbox" id="breadcrumb-hidden">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn pb35 pt25 text-center">
                <a href="#" id="clearAll" class="btn btn-primary btn-bordered btn-sm">Clear All</a>
            </div>
        </div>
    </div>
</div>
<!-- -------------- /Customizer -------------- -->

<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    @include('admin.partials._header')

    <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar Left  -------------- -->
    @include('admin.partials._sidebar_left')

    <!-- -------------- /Sidebar Left -------------- -->

    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">
        {{ $slot }}

        <!-- -------------- Topbar Menu Wrapper -------------- -->
        <!-- -------------- Topbar -------------- -->
        <!-- -------------- Content -------------- -->
        <!-- -------------- Page Footer -------------- -->
    </section>
    <!-- -------------- /Main Wrapper -------------- -->

    <!-- -------------- Sidebar Right -------------- -->
    @include('admin.partials._sidebar_right')

    <!-- -------------- /Sidebar Right -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="{{ asset('assets/js/jquery/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- -------------- HighCharts Plugin -------------- -->
<script src="{{ asset('assets/js/plugins/highcharts/highcharts.js') }}"></script>
<script src="{{ asset('assets/js/plugins/c3charts/d3.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/c3charts/c3.min.js') }}"></script>

<!-- -------------- Simple Circles Plugin -------------- -->
<script src="{{ asset('assets/js/plugins/circles/circles.js') }}"></script>

<!-- -------------- Maps JSs -------------- -->
<script src="{{ asset('assets/js/plugins/jvectormap/jquery.jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js') }}"></script>

<!-- -------------- FullCalendar Plugin -------------- -->
<script src="{{ asset('assets/js/plugins/fullcalendar/lib/moment.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/fullcalendar/fullcalendar.min.js') }}"></script>

<!-- -------------- Date/Month - Pickers -------------- -->
<script src="{{ asset('assets/allcp/forms/js/jquery-ui-monthpicker.min.js') }}"></script>
<script src="{{ asset('assets/allcp/forms/js/jquery-ui-datepicker.min.js') }}"></script>

<!-- -------------- Magnific Popup Plugin -------------- -->
<script src="{{ asset('assets/js/plugins/magnific/jquery.magnific-popup.js') }}"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="{{ asset('assets/js/utility/utility.js') }}"></script>
<script src="{{ asset('assets/js/demo/demo.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('room_index-js')
<!-- -------------- Widget JS -------------- -->
<script src="{{ asset('assets/js/demo/widgets.js') }}"></script>
<script src="{{ asset('assets/js/demo/widgets_sidebar.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard1.js') }}"></script>
<!-- -------------- /Scripts -------------- -->

</body>

</html>
