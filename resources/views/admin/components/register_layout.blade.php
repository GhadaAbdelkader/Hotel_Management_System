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

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/skin/default_skin/css/theme.css') }}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/allcp/forms/css/forms.css') }}">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body class="utility-page sb-l-c sb-r-c">


{{ $slot }}
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif





<!-- -------------- jQuery -------------- -->
<script src="{{ asset('assets/js/jquery/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- -------------- CanvasBG JS -------------- -->
<script src="{{ asset('assets/js/plugins/canvasbg/canvasbg.js') }}"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="{{ asset('assets/js/utility/utility.js') }}"></script>
{{--<script src="{{ asset('assets/js/demo/demo.js') }}"></script>--}}
<script src="{{ asset('assets/js/main.js') }}"></script>

<!-- -------------- Page JS -------------- -->
<script type="text/javascript">
    jQuery(document).ready(function () {
        "use strict";
        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 5,
                y: window.innerHeight / 10
            }
        });
    });
</script>

<!-- -------------- /Scripts -------------- -->

</body>

</html>
