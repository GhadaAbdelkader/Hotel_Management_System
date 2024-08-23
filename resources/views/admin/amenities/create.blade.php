<x-layout>

    @include('admin.partials._topbar_dropmenu_wrapper')
    @include('admin.partials._topbar')

    <section id="content" class="table-layout animated fadeIn">

        <div class="chute chute-center">
            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">Create Amenities</span>
                </div>
                <div class="panel-body pn">

                    <form action="{{ route('admin.amenities.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}" required>
                            @error('name')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" id="icon" class="form-control"  value="{{ old('icon') }}" required>
                            @error('icon')
                            <p class="text-danger mn">{{ $message }}</p>

                            @enderror
                        </div>



                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>


        </div>

    </section>

</x-layout>
