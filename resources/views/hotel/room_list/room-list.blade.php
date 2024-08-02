<x-hotel-layout>
    <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="{{ asset('hotel_assets/img/rooms/3.jpg') }}" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Luxury Hotel Experience</small>
                <h1 class="slide-animated two">Rooms & Suites</h1>
            </div>
        </div>
    </div>
    <!-- /Background Img Parallax -->

    <div class="container margin_120_95" id="first_section">
        <div class="row justify-content-between">
            <div class="col-xl-4 fixed_title">
                <div class="title">
                    <small>{{ $room->hotel_name ?? 'Paradise Hotel' }}</small>
                    <h2>Our Rooms</h2>
                    <p class="lead">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendu</p>
                    <p><a href="#booking_section" class="btn_1 outline">Book Now</a></p>
                </div>
            </div>
            <div class="col-xl-7">
                @foreach($rooms as $room)
                    <div class="row_list_version_3" data-cue="fadeIn">
                        <div class="owl-carousel owl-theme carousel_item_1 kenburns rounded-img">
                            @foreach(json_decode($room->pictures, true) as $picture)
                                <div class="item">
                                    <a href="{{ route('hotel.room-details.show', $room->id) }}"><img src="{{ asset($picture) }}" alt=""></a>
                                </div>
                            @endforeach
                        </div>
                        <!-- /carousel -->
                        <div class="box_item_info" data-jarallax-element="-25">
                            <small>From ${{ $room->price }}/night</small>
                            <h2>{{ $room->type }}</h2>
                            <p>{{ $room->short_description }}</p>
                            <div class="facilities clearfix">
                                <ul>
                                    @foreach(json_decode($room->amenities, true) as $index => $amenity)
                                        @php
                                            $icons = json_decode($room->amenity_icon, true);
                                        @endphp
                                        @if(isset($icons[$index]))
                                            <li>
                                                <i class="{{ $icons[$index] }}"></i> {{ $amenity }}
                                            </li>
                                        @else
                                            <li>{{ $amenity }}</li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /row_list_version_3 -->
            </div>
        </div>
    </div>
    <!-- /container-->

    <div class="pinned-image pinned-image--medium">
        <div class="pinned-image__container">
            <img src="{{ asset('hotel_assets/img/parallax_bg.jpg') }}" alt="">
            <div class="pinned-image__container-overlay"></div>
        </div>
        <div class="pinned_over_content">
            <div class="title white center mb-5">
                <small data-cue="slideInUp">Paradise Hotel</small>
                <h2 data-cue="slideInUp" data-delay="100">Main Facilities</h2>
            </div>
            <div class="row mt-4">
                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="box_facilities white no-border" data-cue="slideInUp">
                        <i class="customicon-private-parking"></i>
                        <h3>Private Parking</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="box_facilities white" data-cue="slideInUp">
                        <i class="customicon-wifi"></i>
                        <h3>High Speed Wifi</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="box_facilities white" data-cue="slideInUp">
                        <i class="customicon-cocktail"></i>
                        <h3>Bar & Restaurant</h3>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-6">
                    <div class="box_facilities white" data-cue="slideInUp">
                        <i class="customicon-swimming-pool"></i>
                        <h3>Swimming Pool</h3>
                    </div>
                </div>
            </div>
            <!-- /Row -->
        </div>
    </div>
    <!-- /pinned-image -->

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

    <!-- /container -->

</x-hotel-layout>
