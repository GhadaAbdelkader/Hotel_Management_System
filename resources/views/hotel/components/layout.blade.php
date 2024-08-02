<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.ansonika.com/paradise/room-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 20:07:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>PARADISE - Hotel and Bed&Breakfast Site Template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('hotel_assets/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon"
          href="{{ asset('hotel_assets/img/apple-touch-icon-57x57-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
          href="{{ asset('hotel_assets/img/apple-touch-icon-72x72-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
          href="{{ asset('hotel_assets/img/apple-touch-icon-114x114-precomposed.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
          href="{{ asset('hotel_assets/img/apple-touch-icon-144x144-precomposed.png') }}">

    <!-- GOOGLE WEB FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500&amp;family=Montserrat:wght@300;400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('hotel_assets/css/bootstrap.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('hotel_assets/css/daterangepicker_v2.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('hotel_assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('hotel_assets/css/vendors.min.css') }}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('hotel_assets/css/custom.css') }}" rel="stylesheet">

</head>

<body>

<div id="preloader">
    <div data-loader="circle-side"></div>
</div><!-- /Page Preload -->
<div class="layer"></div><!-- Opacity Mask -->

@include('hotel.partials._header')
@include('hotel.partials.nav_panel')


<!-- -------------- Body Wrap  -------------- -->
<main>


        {{ $slot }}



</main>
<!-- -------------- /Body Wrap  -------------- -->


<footer class="revealed">
    <div class="footer_bg">
        <div class="gradient_over"></div>
        <div class="background-image" data-background="url({{ asset('hotel_assets/img/rooms/3.jpg') }})"></div>
    </div>
    <div class="container">
        <div class="row move_content">
            <div class="col-lg-4 col-md-12">
                <h5>Contacts</h5>
                <ul>
                    <li>Baker Street 567, Los Angeles 11023<br>California - US<br><br></li>
                    <li><strong><a href="#0">info@Paradisehotel.com</a></strong></li>
                    <li><strong><a href="#0">+434 43242232</a></strong></li>
                </ul>
                <div class="social">
                    <ul>
                        <li><a href="#0"><i class="bi bi-instagram"></i></a></li>
                        <li><a href="#0"><i class="bi bi-whatsapp"></i></a></li>
                        <li><a href="#0"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#0"><i class="bi bi-twitter-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 ms-lg-auto">
                <h5>Explore</h5>
                <div class="footer_links">
                    <ul>
                        <li><a href="../later/index-2.html">Home</a></li>
                        <li><a href="../later/about.html">About Us</a></li>
                        <li><a href="../later/room-list-1.html">Rooms &amp; Suites</a></li>
                        <li><a href="../later/news-1.html">News &amp; Events</a></li>
                        <li><a href="../later/contacts.html">Contacts</a></li>
                        <li><a href="../later/about.html">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div id="newsletter">
                    <h5>Newsletter</h5>
                    <div id="message-newsletter"></div>
                    <form method="post"
                          action="https://www.ansonika.com/paradise/phpmailer/newsletter_template_email.php"
                          name="newsletter_form" id="newsletter_form">
                        <div class="form-group">
                            <input type="email" name="email_newsletter" id="email_newsletter" class="form-control"
                                   placeholder="Your email">
                            <button type="submit" id="submit-newsletter"><i class="bi bi-send"></i></button>
                        </div>
                    </form>
                    <p>Receive latest offers and promos without spam. You can cancel anytime.</p>
                </div>
            </div>
        </div>
        <!--/row-->
    </div>
    <!--/container-->
    <div class="copy">
        <div class="container">
            © Paradise - by <a href="#">Ansonika</a>
        </div>
    </div>
</footer>
<!-- /footer -->

<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
    </svg>
</div>
<!-- /back to top -->

<!-- COMMON SCRIPTS -->
<script src="{{ asset('hotel_assets/js/common_scripts.js') }}" ></script>
<script src="{{ asset('hotel_assets/js/common_functions.js') }}" ></script>
<script src="{{ asset('hotel_assets/js/datepicker_search.js') }}" ></script>
<script src="{{ asset('hotel_assets/js/datepicker_inline.js') }}" ></script>
<script src="{{ asset('hotel_assets/phpmailer/validate.js') }}" ></script>
@stack('room-details-js')

</body>

<!-- Mirrored from www.ansonika.com/paradise/room-list.blade.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jul 2024 20:07:16 GMT -->
</html>
