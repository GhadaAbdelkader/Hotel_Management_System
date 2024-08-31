<x-hotel-layout>


<div class="hero medium-height jarallax" data-jarallax data-speed="0.2">
        <img class="jarallax-img" src="{{ asset('hotel_assets/img/hero_home_2.jpg') }}" alt="">
        <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
            <div class="container">
                <small class="slide-animated one">Luxury Hotel Experience</small>
                <h1 class="slide-animated two">Login</h1>
            </div>
        </div>
    </div>
    <!-- /Background Img Parallax -->

    <div class="container margin_120_95">
        <div class="row justify-content-between">
            <div class="col-xl-12 col-lg-12 order-lg-1">
                <h3 class="mb-3">Welcome Back</h3>
                <div id="message-contact"></div>
                <form method="POST" action="{{ route('login.client.post') }}" id="form-login">
                    @csrf

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


                    </div>


                    <p class="mt-3"><input type="submit" value="Login" class="btn_1 outline"></p>
                </form>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!--/container -->



    <!-- /container -->



</x-hotel-layout>
