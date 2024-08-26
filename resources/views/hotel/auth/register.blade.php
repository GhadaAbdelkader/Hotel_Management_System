<x-hotel-layout>

    <div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="{{ asset('hotel_assets/img/hero_home_2.jpg') }}" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Luxury Hotel Experience</small>
                <h1 class="slide-animated two">Register</h1>
            </div>
        </div>
    </div>
        <!-- /Background Img Parallax -->

        <div class="container margin_120_95">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="contact_info">
                        <ul class="clearfix">
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <h4>Address</h4>
                                <div>PO Box 97845 Baker st. 567, Los Angeles<br>California - US.</div>
                            </li>
                            <li>
                                <i class="bi bi-envelope-paper"></i>
                                <h4>Email address</h4>
                                <p><a href="#0">booking@Paradise.com</a> - <a href="#0">info@Paradise.com</a></p>
                            </li>
                            <li>
                                <i class="bi bi-telephone"></i>
                                <h4>Telephone</h4>
                                <div>+ 61 (2) 8093 3402 + 61 (2) 8093 3402<br><small>Monday to Friday 9am - 7pm</small></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 order-lg-1">
                    <h3 class="mb-3">Be Our Guest</h3>
                    <div id="message-contact"></div>
                    <form method="post" action="/register"  >
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required>
                                    <label for="name">Name</label>
                                    @error('name')
                                    <p class="text-danger mn">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
                                    <label for="username">Username</label>
                                    @error('username')
                                    <p class="text-danger mn">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                                    <label for="email">Email</label>
                                    @error('email')
                                    <p class="text-danger mn">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input class="form-control" type="text" id="phone" name="phone" placeholder="Telephone" value="{{ old('phone') }}" required>
                                    <label for="phone">Telephone</label>
                                    @error('phone')
                                    <p class="text-danger mn">{{ $message }}</p>

                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-6">

                            <div class="form-floating mb-4">
                            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
                            <label for="password">Password</label>
                                @error('password')
                                <p class="text-danger mn">{{ $message }}</p>

                                @enderror
                        </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-floating mb-4">
                            <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                            <label for="confirmPassword">Confirm Password</label>
                                    @error('confirmPassword')
                                    <p class="text-danger mn">{{ $message }}</p>

                                    @enderror
                        </div>
                                </div>

                            </div>

{{--                            <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-floating mb-4">--}}
{{--                                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">--}}
{{--                                    <label for="verify_contact">Are you human? 3 + 1 =</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <p class="mt-3"><input type="submit" value="Submit" class="btn_1 outline"></p>
                    </form>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!--/container -->



        <div class="container margin_120_95" id="booking_section">
            <div class="row justify-content-between">
                <div class="col-xl-4">
                    <div data-cue="slideInUp">
                        <div class="title">
                            <small>Paradise Hotel</small>
                            <h2>Check Availability</h2>
                        </div>
                        <p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. </p>
                        <p class="phone_element no_borders"><a href="tel://423424234"><i class="bi bi-telephone"></i><span><em>Info and bookings</em>+41 934 121 1334</span></a></p>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div data-cue="slideInUp" data-delay="200">
                        <div class="booking_wrapper">
                            <div class="col-12">
                                <input type="hidden" id="date_booking" name="date_booking">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="custom_select">
                                        <select class="wide">
                                            <option>Select Room</option>
                                            <option>Double Room</option>
                                            <option>Deluxe Room</option>
                                            <option>Superior Room</option>
                                            <option>Junior Suite</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus" name="adults_booking">
                                                <input type="text" name="adults_booking" id="adults_booking" value="" class="qty form-control" placeholder="Adults">
                                                <input type="button" value="-" class="qtyminus" name="adults_booking">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3 qty-buttons mb-3 version_2">
                                                <input type="button" value="+" class="qtyplus" name="childs_booking">
                                                <input type="text" name="childs_booking" id="childs_booking" value="" class="qty form-control" placeholder="Childs">
                                                <input type="button" value="-" class="qtyminus" name="childs_booking">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / row -->
                        <p class="text-end mt-5"><a href="#0" class="btn_1 outline">Book Now</a></p>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->



</x-hotel-layout>
