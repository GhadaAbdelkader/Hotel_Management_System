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
                    <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="type">Hotel Name</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Single">Paradise Hotel</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" name="number" id="number" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" id="type" class="form-control">
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="size">Size</label>
                            <select name="size" id="size" class="form-control">
                                <option value="Small">Small</option>
                                <option value="Medium">Medium</option>
                                <option value="Large">Large</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="room_description">Room Description</label>

                                <textarea name="room_description"></textarea>

                        </div>
                        <div class="form-group">
                            <label for="short_description">Short Description</label>

                            <textarea name="short_description"></textarea>

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
                        </div>
                        <div class="form-group">
                            <label for="amenities">Amenities Icon</label>
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
                        </div>
                        <div class="form-group">
                            <label for="main_picture">Main Picture</label>
                            <input type="file" name="main_picture" id="main_picture" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="pictures">Pictures</label>
                            <input type="file" name="pictures[]" id="pictures" class="form-control" multiple>
                        </div>

                        <div class="form-group">
                            <label for="adult_capacity">Adult Capacity</label>
                            <input type="number" name="adult_capacity" id="adult_capacity" class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="child_capacity">Child Capacity</label>
                            <input type="number" name="child_capacity" id="child_capacity" class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <div class="bordered ph15 pb10 pt15">
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="status[]" id="Available" value="Available">
                                    <label for="Available">Available</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="status[]" id="Occupied" value="Occupied">
                                    <label for="Occupied">Occupied</label>
                                </div>
                                <div class="checkbox-custom checkbox-primary mb5">
                                    <input type="checkbox" name="status[]" id="Maintenance" value="Maintenance">
                                    <label for="Maintenance">Under Maintenance</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>

            <div class="mv40"></div>

        </div>

    </section>
</x-layout>
