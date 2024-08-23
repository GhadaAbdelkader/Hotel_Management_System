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
                    <span class="panel-title">Admins List</span>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($guests as $guest)
                                <tr>
                                    <td>{{ $guest->id }}</td>
                                    <td>{{ $guest->name }}</td>
                                    <td>{{ $guest->email }}</td>
                                    <td>
                                        <div style="display: flex;">
                                            <a href="{{ route('admin.guests.edit', $guest->id) }}"
                                               class="btn btn-info ph8 pv5 dark mr5" style="color:#fff !important"> <i
                                                    class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.guests.destroy', $guest->id) }}" method="POST"
                                                  style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger dark ph8 pv5 text-white"
                                                        onclick="return confirm('Are you sure you want to delete this guest?')">
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
