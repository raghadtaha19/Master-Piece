@extends('dashboard.dashboard_layouts.master')

@section('title','Show Transactions')


@section('css')
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('title_page1')
Transactions
@endsection

@section('title_page2')
Transactions list
@endsection




@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div> 
             @if(session()->has('success'))
            <div class="alert alert-success"  id="success-alert">
              <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('success') }}
            @endif
          </div>
          @section('content')
 <div class="card">
    <div class="card-header">
        <!-- Add a link to create a new land reservation -->
        {{-- <a class="btn btn-primary btn-sm float-left" href="{{ route('transactions.create') }}">
            <i class="fas fa-handshake nav-icon"></i> Create New Reservation
        </a> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#ID</th>
                <th>User</th>
                <th>Governorate</th>
                <th>District</th>
                <th>Price</th>
                <th>Area</th>
                {{-- <th>Reservation Date</th> --}}
                {{-- <th>Action</th> --}}
                {{-- <th>Deal/NoDeal</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($landreservations as $reservation)
            
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->user->email }}</td>
                <td>{{ $reservation->landCard->governorate }}</td>
                <td>{{ $reservation->landCard->district }}</td>
                <td>{{ $reservation->landCard->price }}</td>
                <td>{{ $reservation->landCard->area }}</td>
                {{-- <td>{{ $reservation->reservation_date }}</td> --}}
                {{-- <td>{{ $reservation->available_land_message }}</td> --}}
                {{-- <td>{{ $reservation->sold_land_message }}</td> --}}
                {{-- <td class="project-actions">
                    <a class="btn btn-info btn-sm" href="{{ route('landreservations.edit', $reservation->id) }}">
                        <i class="fas fa-pencil-alt"></i> Edit
                    </a>
                    <form action="{{ route('landreservations.destroy', $reservation->id) }}" method="POST"
                        style="display: inline;">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this reservation?')">Delete</button>
                    </form>
                </td>
                <td class="project-actions">
                  <form action="{{ route('landreservation.deal', $reservation->id) }}" method="post">
                    @csrf
                      @method('post')
                      <button type="submit" class="btn btn-info btn-sm" style="width: 100%;">
                          <i class="fas fa-pencil-alt"></i> Deal
                      </button>
                  </form>

                  <div style="margin-bottom: 5px;">
                      <form action="{{ route('landreservation.destroy', $reservation->id) }}" method="POST" style="display: inline;">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm"
                              onclick="return confirm('Are you sure you want to delete this ?')"
                              style="width: 100%;">
                              <i class="fas fa-trash"></i> Not Deal
                          </button>
                      </form>
                  </div>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
    
    </div>
    <!-- /.card-body -->
</div>
@endsection
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
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

{{-- <script src="../../plugins/jszip/jszip.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>

{{-- <script src="../../plugins/pdfmake/pdfmake.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>

{{-- <script src="../../plugins/pdfmake/vfs_fonts.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>

{{-- <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>

{{-- <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
<script type="text/javascript" src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
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