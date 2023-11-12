@extends('dashboard.dashboard_layouts.master')

@section('title', 'Show Land Cards')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('title_page1')
   Land Cards
@endsection

@section('title_page2')
Land Cards list
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success" id="success-alert">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <!-- Add a link to create a new job -->
                            <a class="btn btn-primary btn-sm float-left" href="{{ route('landcards.create') }}">
                                <i class="fas fa-briefcase nav-icon"></i> Add New Land Card
                            </a>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-align: center; vertical-align: middle;">#ID</th>
                                        <th style="text-align: center; vertical-align: middle;">Image</th>
                                        <th style="text-align: center; vertical-align: middle;">Land Type</th>
                                        <th style="text-align: center; vertical-align: middle;">Price</th>

                                        <th style="text-align: center; vertical-align: middle;">Governorate</th>
                                        <th style="text-align: center; vertical-align: middle;">District</th>
                        
                                        <th style="text-align: center; vertical-align: middle;">Area</th>
                                        <th style="text-align: center; vertical-align: middle;">sell_form_id</th>
                                        
                                        {{-- <th style="text-align: center; vertical-align: middle;">Status from User</th> --}}
                                        {{-- <th style="text-align: center; vertical-align: middle;">Status from Admin</th> --}}
                                        <th style="text-align: center; vertical-align: middle;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($landcards as $landcard)
                                        <tr>
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->id }}</td>

                                            <td style="text-align: center; vertical-align: middle;"><img src="{{ asset($landcard->image) }}"  width="100px" height="100px">
                                            </td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->land_type }}</td>

                                        
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->price }}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->governorate }}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->district }}</td>
                                            <td style="text-align: center; vertical-align: middle;">{{ $landcard->area }}</td>
                                            <td style="text-align: center; vertical-align: middle;">
                                                {{ $landcard->sellform->user->email ?? 'N/A' }}
                                            </td>
                                            
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $landcard->status_from_user }}</td> --}}
                                            {{-- <td style="text-align: center; vertical-align: middle;">{{ $landcard->status_from_admin }}</td> --}}
                                
                                            <td class="project-actions" style="text-align: center; vertical-align: middle;">
                                                <a class="btn btn-info btn-sm" href="{{ route('landcards.edit', $landcard->id) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Edit
                                                </a>
                                                <form action="{{ route('landcards.destroy', $landcard->id) }}" method="POST" style="display: inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Land Card?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                                
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
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    
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
