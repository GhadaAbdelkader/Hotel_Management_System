<x-layout>

    @include('admin.partials._topbar_dropmenu_wrapper')
    @include('admin.partials._topbar')

    <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center">
            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">Create Room</span>
                </div>
                <div class="panel-body pn">

                    <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="type">Hotel Name</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Single">Paradise Hotel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control"  value="{{ old('number') }}" required>
                            @error('number')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                            </select>
                            @error('type')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                            @error('size')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="room_description">Room Description</label>
                            <textarea name="room_description" id="room_description" class="form-control">{{ old('room_description') }}</textarea>
                            @error('room_description')
                            <p class="text-danger mn">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="short_description">Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control">{{ old('short_description') }}</textarea>
                            @error('short_description')
                            <p class="text-danger mn">{{ $message }}</p>
                            @enderror
                        </div>




                        <div class="form-group">
                            <label for="amenities">Amenities</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="amenities[]" id="King_Size_Bed" value="King Size Bed">
                                    <label for="King_Size_Bed">King Size Bed</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="amenities[]" id="32_Inc_TV" value="32 Inc TV">
                                    <label for="32_Inc_TV">32 Inc TV</label>
                                </div>

                            </div>
                            @error('amenities')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="amenity_icon">Amenities Icon</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="amenity_icon[]" id="customicon-double-bed" value="customicon-double-bed">
                                    <label for="customicon-double-bed">customicon-double-bed</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="amenity_icon[]" id="customicon-television" value="customicon-television">
                                    <label for="customicon-television">customicon-television</label>
                                </div>

                            </div>
                            @error('amenity_icon')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>



{{--                        <div class="form-group">--}}
{{--                            <label for="main_picture">Main Picture</label>--}}
{{--                            <input type="file" name="main_picture" id="main_picture" class="form-control" value="{{ old('main_picture') }}">--}}

{{--                            @error('main_picture')--}}
{{--                            <p class="text-danger mn">{{ $message }}</p>--}}

{{--                            @enderror--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="pictures">Pictures</label>--}}
{{--                            <input type="file" name="pictures[]" id="pictures" class="form-control" value="{{ old('pictures') }}" multiple>--}}
{{--                            @error('pictures')--}}
{{--                            <p class="text-danger mn">{{ $message }}</p>--}}

{{--                            @enderror--}}
{{--                        </div>--}}
                        <div class="form-group  mbn mb15  pv20">
                            <div class="row">
                                <div class="col-md-4 ph10">
                                    <label for="main_picture" class="mb15">Main Picture</label>
                                    <div class="fileupload fileupload-new allcp-form ph15 pv20 bordered" data-provides="fileupload">
                                        <div class="fileupload-preview thumbnail mb20">
                                            <img id="preview-image" data-src="holder.js/100%x140" alt="holder">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5 ph10">
                                        <span class="button btn-primary btn-file btn-block">
                                          <span class="fileupload-new">Select</span>
                                          <span class="fileupload-exists">Change</span>
                                          <input type="file" name="main_picture" id="main_picture" class="form-control">
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('main_picture')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-4 ph10">
                                    <label for="pictures" class="mb15">Pictures</label>
                                    <div class="fileupload fileupload-new allcp-form ph15 pv20 bordered" data-provides="fileupload">
                                        <div class="fileupload-preview thumbnail mb20">
                                            <img id="preview-image" data-src="holder.js/100%x140" alt="holder">
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-5 ph10">
                                        <span class="button btn-primary btn-file btn-block">
                                          <span class="fileupload-new">Select</span>
                                          <span class="fileupload-exists">Change</span>
                                          <input type="file" name="pictures[]" id="pictures" class="form-control" multiple>
                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                    @error('pictures')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                        </div>



                        <div class="form-group">
                            <label for="adult_capacity">Adult Capacity</label>
                            <input type="number" name="adult_capacity" id="adult_capacity" class="form-control"
                                   value="{{ old('adult_capacity') }}" required>

                            @error('adult_capacity')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="child_capacity">Child Capacity</label>
                            <input type="number" name="child_capacity" id="child_capacity" class="form-control"
                                   value="{{ old('child_capacity') }}" required>
                            @error('child_capacity')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Available">Available</option>
                                <option value="Occupied">Occupied</option>
                                <option value="Maintenance">Under Maintenance</option>
                            </select>
                            @error('status')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
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

    </section>
    @push('room_create_js')
        <!-- -------------- FileUpload JS -------------- -->
        <script src="{{ asset('assets/js/plugins/fileupload/fileupload.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/holder/holder.min.js') }}"></script>

    @endpush
</x-layout>
