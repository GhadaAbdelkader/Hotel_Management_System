<x-register_layout>




        <!-- -------------- Body Wrap  -------------- -->
        <div id="main" class="animated fadeIn">

            <!-- -------------- Main Wrapper -------------- -->
            <section id="content_wrapper">

                <div id="canvas-wrapper">
                    <canvas id="demo-canvas"></canvas>
                </div>

                <!-- -------------- Content -------------- -->
                <section id="content" class="pv5">

                    <!-- -------------- Registration -------------- -->
                    <div class="allcp-form theme-primary mw600" >
                        <div class="bg-primary mw600 text-center mb20 br3 pv15">
                            <img src="{{ asset('assets/img/logo.png') }}" alt=""/>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading pn">
                                    <span class="panel-title">
                                      Registration form
                                    </span>
                            </div>
                            <!-- -------------- /Panel Heading -------------- -->

                            <form method="post" action="/register" enctype="multipart/form-data">
                                @csrf
                                <div class="panel-body pn">

                                        <!-- -------------- /section -------------- -->

                                        <div class="section">
                                            <label for="name" class="field prepend-icon">
                                                <input type="text" name="name" id="name" class="gui-input"
                                                       placeholder="name..." value="{{ old('name') }}">
                                                <label for="name" class="field-icon">
                                                    <i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                            @error('name')
                                            <p class="text-danger mn">{{ $message }}</p>

                                            @enderror
                                        </div>
                                        <!-- -------------- /section -------------- -->
                                    <!-- -------------- /section -------------- -->

                                    <div class="section">
                                        <label for="email" class="field prepend-icon">
                                            <input type="email" name="email" id="email" class="gui-input"
                                                   placeholder="Email address" value="{{ old('email') }}">
                                            <label for="email" class="field-icon">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                        </label>
                                        @error('email')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="section">
                                        <label for="username" class="field prepend-icon">
                                            <input type="text" name="username" id="username" class="gui-input"
                                                   placeholder="Nickname" value="{{ old('username') }}">
                                            <label for="username" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                        @error('username')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="section">
                                        <label for="password" class="field prepend-icon">
                                            <input type="text" name="password" id="password" class="gui-input"
                                                   placeholder="Create a password">
                                            <label for="password" class="field-icon">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                        @error('password')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="section">
                                        <label for="confirmPassword" class="field prepend-icon">
                                            <input type="text" name="confirmPassword" id="confirmPassword"
                                                   class="gui-input"
                                                   placeholder="Retype your password">
                                            <label for="confirmPassword" class="field-icon">
                                                <i class="fa fa-unlock-alt"></i>
                                            </label>
                                        </label>
                                        @error('confirmPassword')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                    <div class="section">

                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-bordered btn-primary">I Accept - Create Account
                                            </button>
                                        </div>
                                    </div>
                                    <!-- -------------- /section -------------- -->

                                </div>
                                <!-- -------------- /Form -------------- -->
                                <div class="panel-footer">

                                </div>
                                <!-- -------------- /Panel Footer -------------- -->
                            </form>
                        </div>
                    </div>
                    <!-- -------------- /Spec Form -------------- -->

                </section>
                <!-- -------------- /Content -------------- -->

            </section>
            <!-- -------------- /Main Wrapper -------------- -->

        </div>
        <!-- -------------- /Body Wrap  -------------- -->


</x-register_layout>
