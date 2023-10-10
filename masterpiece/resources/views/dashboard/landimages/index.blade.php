@extends('dashboard.dashboard_layouts.master')

@section('title', 'Manage Land Images')

@section('css')
    <style>
        /* Move the search bar to the right */
        .dataTables_filter {
            float: right;
        }

        /* Move the pagination control to the right */
        .dataTables_paginate {
            float: right;
        }
    </style>
@endsection

@section('title_page1')
    Land Images
@endsection

@section('title_page2')
    Land Images List
@endsection

@section('content')
    <!-- Main content -->
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
                            <!-- Add a link to create a new Land Image -->
                            <a class="btn btn-primary btn-sm float-left" href="{{ route('landimages.create') }}">
                                <i class="fas fa-image nav-icon"></i> Add New Land Image
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>#ID</th>
                                        <th>Image 1</th>
                                        <th>Image 2</th>
                                        <th>Image 3</th>
                                        <th>Image 4</th>
                                        <th>Sell Form ID</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($landimages as $landimage)
                                            <td>{{ $i }}</td>
                                            <td><img src="{{  url('/images/' . $landimage->image1) }}" alt="" width="100px"
                                                    height="100px"></td>
                                            <td><img src="{{ url('/images/' . $landimage->image2) }}" alt="" width="100px"
                                                    height="100px"></td>
                                            <td><img src="{{ url('/images/' . $landimage->image3) }}" alt="" width="100px"
                                                    height="100px"></td>
                                            <td><img src="{{ url('/images/' . $landimage->image4) }}" alt="" width="100px"
                                                    height="100px"></td>
                                            <td>{{ $landimage->sell_form_id }}</td>
                                            <td class="project-actions">
                                                <div style="margin-bottom: 5px; width: 100px;">
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('landimages.edit', $landimage->id) }}">
                                                        <i class="fas fa-pencil-alt"></i> Edit
                                                    </a>
                                                </div>
                                                <div style="margin-bottom: 5px; width: 100px;">
                                                    <!-- Adjust the width as needed -->

                                                    <form action="{{ route('landimages.destroy', $landimage->id) }}"
                                                        method="POST" style="display: inline;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure you want to delete this Land Image?')">Delete</button>
                                                    </form>
                                                </div>

                                            </td>
                                            @php
                                                $i++;
                                            @endphp
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                </tfoot>
                            </table>
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
