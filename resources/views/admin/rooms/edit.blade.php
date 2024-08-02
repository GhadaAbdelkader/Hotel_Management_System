<x-layout>
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
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control"
                                   value="{{ $room->number }}" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" name="type" id="type" class="form-control" value="{{ $room->type }}"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <input type="text" name="size" id="size" class="form-control" value="{{ $room->size }}"
                                   required>
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
                            @error('pictures.*')
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
                                    </div>
                                    <div class="col">
                                        <label for="child_capacity">Children</label>
                                        <input type="number" name="child_capacity" id="child_capacity"
                                               class="form-control"
                                               value="{{ old('child_capacity', json_decode($room->capacity ?? '{}')->child ?? 0) }}"
                                               required></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5 d-flex">
                                    @foreach(['Available', 'Booked', 'Maintenance'] as $status)
                                        <input type="checkbox" name="status[]" value="{{ $status }}"
                                               id="status_{{ $status }}"
                                                {{ in_array($status, json_decode($room->status, true) ?? []) ? 'checked' : '' }}>
                                        <label for="status_{{ $status }}">{{ $status }}</label><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control"
                                   value="{{ old('price', $room->price ?? '') }}" required>
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

</x-layout>
