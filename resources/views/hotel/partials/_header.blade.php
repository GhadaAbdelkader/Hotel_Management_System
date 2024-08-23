<header class="reveal_header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6">
                <a href="later/index-2.html" class="logo_normal"><img src="{{ asset('hotel_assets/img/logo.png') }}" width="135" height="45" alt=""></a>
                <a href="later/index-2.html" class="logo_sticky"><img src="{{ asset('hotel_assets/img/logo_sticky.png') }}" width="135" height="45" alt=""></a>
            </div>
            <div class="col-6">
                <nav>
                    <ul>
                        <li><a href="#booking_section" class="btn_1 me-1 btn_scrollto">Book Now</a></li>
{{--                        @if (Auth::user())--}}
{{--                            <li>--}}
{{--                                <figure>--}}
{{--                                </figure>--}}
{{--                            </li>--}}
{{--                        @endif--}}
                        @if (Auth::user())
                            <!-- Show account link and logout link if the user is authenticated -->
                            <li><a href="{{ route('account.show') }}" class="btn_1 me-1 btn_scrollto"><img src="{{ asset('hotel_assets/img/testimonial_1.jpg') }}" alt="" class="img-circle"></a></li>
                            <li> <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit">Logout</button>
                                </form></li>
                        @else
                            <!-- Show register link if the user is not authenticated -->
                            <li><a href="{{ route('register.create') }}">Register</a></li>
                        @endif

                        <li>
                            <div class="hamburger_2 open_close_nav_panel">
                                <div class="hamburger__box">
                                    <div class="hamburger__inner"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div><!-- /container -->
</header><!-- /Header -->
