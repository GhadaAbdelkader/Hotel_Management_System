<x-layout>
    @include('admin.partials._topbar_dropmenu_wrapper')
    @include('admin.partials._topbar')
    @push('room_index-css')
        <link rel="stylesheet" type="text/css"
              href="{{ asset('assets/js/plugins/footable/css/footable.core.min.css') }}">
    @endpush
    <section id="content" class="table-layout animated fadeIn">
        <div class="chute chute-center">
            <div class="panel" id="spy2">
                <div class="panel-heading">
                    <span class="panel-title">Rooms List</span>
                </div>
                <div class="panel-menu">
                    <input id="fooFilter" type="text" class="form-control"
                           placeholder="Enter Table Filter Criteria Here...">
                </div>
                <div class="panel-body pn">
                    <div class="table-responsive">
                        <table class="table footable" data-filter="#fooFilter">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Number</th>
                                <th>Type</th>
                                <th>Size</th>
                                <th>Amenities</th>
                                <th>Main Picture</th>
                                <th>Pictures</th>
                                <th>Capacity</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rooms as $room)
                                <tr>
                                    <td>{{ $room->id }}</td>
                                    <td>{{ $room->number }}</td>
                                    <td>{{ $room->type }}</td>
                                    <td>{{ $room->size }}</td>
                                    <td>{{ implode(', ', json_decode($room->amenities, true)) }}</td>
                                    <td><img src="{{ asset( $room->main_picture) }}" alt="Main Picture" width="100">
                                    </td>
                                    <td>
                                        @foreach (json_decode($room->pictures, true) as $picture)
                                            <img src="{{ asset(  $picture) }}" alt="Picture" width="50">
                                        @endforeach
                                    </td>
                                    <td>{{ implode(', ', json_decode($room->capacity, true)) }}</td>
                                    <td>{{ $room->status }}</td>
                                    <td>${{ $room->price }}</td>
                                    <td>
                                        <div style="display: flex;">
                                            <a href="{{ route('rooms.edit', $room->id) }}"
                                               class="btn btn-info ph8 pv5 dark mr5" style="color:#fff !important"> <i
                                                        class="fa fa-edit"></i></a>
                                            <form action="{{ route('rooms.destroy', $room->id) }}" method="POST"
                                                  style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger dark ph8 pv5 text-white"
                                                        onclick="return confirm('Are you sure you want to delete this room?')">
                                                    <i class="fa fa-trash-o"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="mv40"></div>
        </div>
    </section>
    @push('room_index-js')
        <script src="{{ asset('assets/js/plugins/footable/js/footable.all.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/footable/js/footable.filter.min.js') }}"></script>
        <script type="text/javascript">
            // jQuery(document).ready(function () {
            //     "use strict";
            //
            //     // Init Theme Core
            //     Core.init();
            //
            //     // Init Demo JS
            //     Demo.init();
            //
            //     // Init FooTable with page size -1 to display all rows
            //     $('.footable').footable({
            //         "paging": {
            //             "enabled": true,
            //             "size": -1
            //         }
            //     });
            // });
        </script>
    @endpush
</x-layout>
