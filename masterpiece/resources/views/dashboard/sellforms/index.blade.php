@php
    use App\User;
@endphp
@extends('dashboard.dashboard_layouts.master')


@section('title', 'Show Sell Form')


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')

    Sell Forms
@endsection

@section('title_page2')
    Sell Forms list
@endsection


@section('content')
    <!-- Main content -->
    <div style="overflow-x: auto">

    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="success-alert">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            {{ session()->get('success') }}
                        </div>
                    @endif

                    <div class="card">

                        <div class="card-header">
                            <a class="btn btn-primary btn-sm float-left" href="{{ route('sellforms.create') }}">
                                <i class="fas fa-plus"></i> Add New Sell Form
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                           
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Land Type</th>
                                            <th>Price</th>
                                            <th>Area</th>
                                            <th>Description</th>
                                            <th>Additional Information</th>
                                            <th>Personal ID</th>
                                            <th>Governorate</th>
                                            <th>Directorate</th>
                                            <th>Village</th>
                                            <th>Basin</th>
                                            <th>District</th>
                                            <th>Piece Number</th>
                                            <th>User</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            <th>Status_Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sellforms as $sellform)
                                            <tr>
                                                <td>{{ $sellform->id }}</td>
                                                <td>{{ $sellform->land_type }}</td>
                                                <td>{{ $sellform->price }}</td>
                                                <td>{{ $sellform->area }}</td>
                                                <td>{{ $sellform->description }}</td>
                                                <td>{{ $sellform->additional_information }}</td>
                                                <td>{{ $sellform->ID_number }}</td>
                                                <td>{{ $sellform->governorate }}</td>
                                                <td>{{ $sellform->directorate }}</td>
                                                <td>{{ $sellform->village }}</td>
                                                <td>{{ $sellform->basin }}</td>
                                                <td>{{ $sellform->district }}</td>
                                                <td>{{ $sellform->piece_number }}</td>
                                                <td>{{ $sellform->user->email }}</td>
                                                <td>pending</td>
                                                <td class="project-actions">
                                                    <div style="margin-bottom: 5px;">
                                                        <a class="btn btn-info btn-sm"
                                                            href="{{ route('sellforms.edit', $sellform->id) }}"
                                                            style="width: 100%;">
                                                            <i class="fas fa-pencil-alt"></i> Edit
                                                        </a>
                                                    </div>
                                                    <div style="margin-bottom: 5px;">
                                                        <form action="{{ route('sellforms.destroy', $sellform->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this Sell Form?')"
                                                                style="width: 100%;">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                                <td class="project-actions">
                                                    <form action="{{ route('sellforms.accept', $sellform->id) }}" method="post">
                                                        @csrf
                                                        @method('post')
                                                        <button type="submit" class="btn btn-info btn-sm" style="width: 100%;">
                                                            <i class="fas fa-pencil-alt"></i> Accept
                                                        </button>
                                                    </form>
                                                    <div style="margin-bottom: 5px;">
                                                        <form action="{{ route('sellforms.destroy', $sellform->id) }}"
                                                            method="POST" style="display: inline;">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Are you sure you want to delete this Sell Form?')"
                                                                style="width: 100%;">
                                                                <i class="fas fa-trash"></i> Reject
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection




















@section('scripts')
    {{-- <script src="../../plugins/datatables/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
    <script type="text/javascript"
        src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

    {{-- <script src="../../plugins/jszip/jszip.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>

    {{-- <script src="../../plugins/pdfmake/vfs_fonts.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}">
    </script>

    {{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}">
    </script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        // Automatically close the success alert after 5 seconds (5000 milliseconds)
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000);
    </script>

@endsection
