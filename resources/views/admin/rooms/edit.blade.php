<x-layout>
    <div id="main">

        <!-- -------------- Header  -------------- -->


        <!-- -------------- /Sidebar Left -------------- -->

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">
            @include('admin.partials._header')

            <!-- -------------- /Header  -------------- -->

            <!-- -------------- Sidebar Left  -------------- -->
            @include('admin.partials._sidebar_left')
            @include('admin.partials._topbar_dropmenu_wrapper')
            @include('admin.partials._topbar')

            <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">

            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">Edit Room</span>
                </div>
                <div class="panel-body pn">
                    <form action="{{ route('rooms.update', $room->id) }}" method="POST"
                          enctype="multipart/form-data">                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control"
                                   value="{{ $room->number }}" required>
                            @error('number')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Single" {{ $room->type == 'Single' ? 'selected' : '' }}>Single</option>
                                <option value="Double" {{ $room->type == 'Double' ? 'selected' : '' }}>Double</option>
                                <option value="Suite" {{ $room->type == 'Suite' ? 'selected' : '' }}>Suite</option>
                            </select>
                            @error('type')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control">
                                <option value="Small" {{ $room->size == 'Small' ? 'selected' : '' }}>Small</option>
                                <option value="Medium" {{ $room->size == 'Medium' ? 'selected' : '' }}>Medium</option>
                                <option value="Large" {{ $room->size == 'Large' ? 'selected' : '' }}>Large</option>
                            </select>
                            @error('size')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="room_description">Room Description</label>
                            <select name="room_description" id="room_description" class="form-control">
                                <option value="Cozy and comfortable room with modern amenities" {{ $room->room_description == 'Cozy and comfortable room with modern amenities' ? 'selected' : '' }}>Cozy and comfortable room with modern amenities</option>
                                <option value="Spacious room with a stunning view" {{ $room->room_description == 'Spacious room with a stunning view' ? 'selected' : '' }}>Spacious room with a stunning view</option>
                                <option value="Luxurious suite with a private balcony" {{ $room->room_description == 'Luxurious suite with a private balcony' ? 'selected' : '' }}>Luxurious suite with a private balcony</option>
                            </select>
                            @error('room_description')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <select name="short_description" id="short_description" class="form-control">
                                <option value="Cozy and comfortable room with modern amenities" {{ $room->short_description == 'Cozy and comfortable room with modern amenities' ? 'selected' : '' }}>Cozy and comfortable room with modern amenities</option>
                                <option value="Spacious room with a stunning view" {{ $room->short_description == 'Spacious room with a stunning view' ? 'selected' : '' }}>Spacious room with a stunning view</option>
                                <option value="Luxurious suite with a private balcony" {{ $room->short_description == 'Luxurious suite with a private balcony' ? 'selected' : '' }}>Luxurious suite with a private balcony</option>
                            </select>
                            @error('short_description')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Amenities</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5 d-flex">
                                    @foreach(['King Size Bed', '32 Inc TV'] as $amenity)
                                        <input type="checkbox" name="amenities[]" value="{{ $amenity }}"
                                               id="amenity_{{ $amenity }}"
                                                {{ in_array($amenity, json_decode($room->amenities, true) ?? []) ? 'checked' : '' }}>
                                        <label class="checkbox-inline mr10"
                                               for="amenity_{{ $amenity }}">{{ $amenity }}</label><br>
                                    @endforeach
                                </div>
                            </div>
                            @error('amenities')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Amenity_icon</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5 d-flex">
                                    @foreach(['customicon-double-bed', 'customicon-television'] as $amenity_icon)
                                        <input type="checkbox" name="amenity_icon[]" value="{{ $amenity_icon}}"
                                               id="amenity_icon_{{ $amenity_icon }}"
                                            {{ in_array($amenity_icon, json_decode($room->amenity_icons, true) ?? []) ? 'checked' : '' }}>
                                        <label class="checkbox-inline mr10"
                                               for="amenity_icon_{{ $amenity_icon }}">{{ $amenity_icon }}</label><br>
                                    @endforeach
                                </div>
                            </div>
                            @error('amenity_icon')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="main_picture">Main Picture</label>
                            <div class="bordered ph15 pb10">

                                <img src="{{ $room->main_picture }}" alt="Main Picture"
                                     style="max-width: 100px; max-height: 100px; display: block; margin: 10px 0;">
                                <input id="main_picture" class="form-control file-upload-browse btn py-3  pl5"
                                       type="file" name="main_picture"
                                       style="border: 1px solid #ebedf2; text-align: left;">

                                @error('main_picture')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group ">
                            <label for="pictures">Additional Pictures</label>
                            <div class="bordered ph15 pb10">
                                <div class="d-flex pv15 ">
                                    @foreach(json_decode($room->pictures, true) ?? [] as $picture)
                                        <div class="mr50">
                                            <img src="{{ $picture }}" alt="Picture"
                                                 style="max-width: 100px; max-height: 100px; display: block; margin: 10px 0;">
                                            <input type="file" name="pictures[]"
                                                   class="form-control-file mt-2 bordered pv5 pl5">
                                        </div>
                                    @endforeach
                                </div>
                                <input type="file" name="pictures[]"
                                       class="form-control-file mt-2 bordered pv5 fluid-width pl5">

                            </div>
                            @error('pictures')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Capacity</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="form-row">
                                    <div class="col">
                                        <label for="adult_capacity">Adults</label>
                                        <input type="number" name="adult_capacity" id="adult_capacity"
                                               class="form-control"
                                               value="{{ old('adult_capacity', json_decode($room->capacity ?? '{}')->adult ?? 0) }}"
                                               required>
                                        @error('adult_capacity')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                    <div class="col">
                                        <label for="child_capacity">Children</label>
                                        <input type="number" name="child_capacity" id="child_capacity"
                                               class="form-control"
                                               value="{{ old('child_capacity', json_decode($room->capacity ?? '{}')->child ?? 0) }}"
                                               required>
                                        @error('child_capacity')
                                        <p class="text-danger mn">{{ $message }}</p>

                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Available" {{ $room->status == 'Available' ? 'selected' : '' }}>Available</option>
                                <option value="Booked" {{ $room->status == 'Booked' ? 'selected' : '' }}>Booked</option>
                                <option value="Maintenance" {{ $room->status == 'Maintenance' ? 'selected' : '' }}>Under Maintenance</option>
                            </select>
                            @error('status')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                   value="{{ old('price', $room->price ?? '') }}" required>
                            @error('price')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div class="mv40"></div>

        </div>
        <!-- -------------- /Column Center -------------- -->

    </section>
    <!-- -------------- /Content -------------- -->
    @include('admin.partials._sidebar_right')
    </section>
    <!-- -------------- /Main Wrapper -------------- -->

    <!-- -------------- Sidebar Right -------------- -->

    <!-- -------------- /Sidebar Right -------------- -->

    </div>
</x-layout>
