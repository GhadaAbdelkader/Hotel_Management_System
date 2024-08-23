<x-layout>

    @include('admin.partials._topbar_dropmenu_wrapper')
    @include('admin.partials._topbar')

    <section id="content" class="table-layout animated fadeIn">

        <!-- -------------- Column Center -------------- -->
        <div class="chute chute-center">

            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">Edit Guest</span>
                </div>
                <div class="panel-body pn">
                    <form action="{{ route('admin.guests.update', $guest->id) }}" method="POST" >
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                   value="{{ old('name', $guest->name) }}" required>
                            @error('name')
                            <p class="text-danger mn">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" value="{{ $guest->username }}" required>
                            @error('username')
                            <p class="text-danger mn">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control"
                                   value="{{ old('email', $guest->email) }}" required>
                            @error('email')
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

</x-layout>
