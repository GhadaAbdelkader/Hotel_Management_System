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

                    <form action="{{ route('admin.rooms.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('post')


                        <div class="tab-block mb25">
                            <ul class="nav tabs-left">
                                <li class="active">
                                    <a href="#tab12_1" data-toggle="tab" aria-expanded="true">Tab One</a>
                                </li>
                                <li class="">
                                    <a href="#tab12_2" data-toggle="tab" aria-expanded="false">Tab Two</a>
                                </li>
                                <li  class="">
                                    <a href="#tab12_3"  data-toggle="tab" aria-expanded="false">Tab Three</a>
                                </li>
                                <li  class="">
                                    <a href="#tab12_4"  data-toggle="tab" aria-expanded="false">Tab Four</a>
                                </li>
                                <li  class="">
                                    <a href="#tab12_5"  data-toggle="tab" aria-expanded="false">Tab Five</a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div id="tab12_1" class="tab-pane active">
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
                                </div>
                                <div id="tab12_2" class="tab-pane">
                                    <div class="form-group">
                                        <label for="amenities">Select Amenities:</label>
                                        <div class="row">
                                            @foreach($amenities as $amenity)
                                                <div class="col-md-4 ph10">
                                                <div class="checkbox amenity_list">
                                                    <label>
                                                        <input type="checkbox" name="amenities[]" value="{{ $amenity->id }}"
                                                               @if(is_array(old('amenities')) && in_array($amenity->id, old('amenities'))) checked @endif style="margin-top: 16px;">
                                                        <i class="{{ $amenity->icon }}"></i> <span>{{ $amenity->name }}</span>
                                                    </label>
                                                </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('amenities')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                </div>
                                <div id="tab12_3" class="tab-pane ">
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
                                </div>
                                <div id="tab12_4" class="tab-pane">
                                    <div class="form-group  mbn mb15  pv20">

                                        <div class="section row">
                                            <div class="col-md-4 ph10">
                                                <label for="main_picture" class="mb15">Main Picture</label>
                                                <div class="fileupload fileupload-new allcp-form ph15 pv20 bordered" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail mb20">
                                                        <img id="preview-image" data-src="holder.js/100%x140" alt="holder" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjcyIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDI3MiAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjcyIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjEwMi4yODMzMzI4MjQ3MDcwMyIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNzJ4MTQwPC90ZXh0PjwvZz48L3N2Zz4=">
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
                                            <div class="col-md-4 ph10">
                                                <label for="pictures" class="mb15">Pictures</label>
                                                <div class="fileupload fileupload-new allcp-form ph15 pv20 bordered" data-provides="fileupload">
                                                    <div class="fileupload-preview thumbnail mb20">
                                                        <img id="preview-image" data-src="holder.js/100%x140" alt="holder" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjcyIiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDI3MiAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMjcyIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjEwMi4yODMzMzI4MjQ3MDcwMyIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yNzJ4MTQwPC90ZXh0PjwvZz48L3N2Zz4=">
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
                                </div>
                                <div id="tab12_5" class="tab-pane">
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

                                </div>

                            </div>
                        </div>

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
