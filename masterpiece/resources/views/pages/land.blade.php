@extends('pages_layouts.master')

@section('title', 'Home Page')

@section('css')

@endsection
@section('content')

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
                {{-- <div class="card"> --}}
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <br>
                                <h1 class="display-5 animated fadeIn mb-4">Congratulations! <br><h3 class="text-primary">Your dream land has been reserved!</h3><br></h1>

                                <tr>
                                    {{-- <th style="text-align: center; vertical-align: middle;">#ID</th> --}}
                                    <th style="text-align: center; vertical-align: middle;">Image</th>
                                    <th style="text-align: center; vertical-align: middle;">Land Type</th>
                                    <th style="text-align: center; vertical-align: middle;">Price</th>

                                    <th style="text-align: center; vertical-align: middle;">Governorate</th>
                                    <th style="text-align: center; vertical-align: middle;">District</th>
                    
                                    <th style="text-align: center; vertical-align: middle;">Area</th>
                                  
                                </tr>
                            </thead>
                            <tbody>

                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($landcards as $landcard)
                                    <tr>
                                        {{-- <td style="text-align: center; vertical-align: middle;">{{ $landcard->id }}</td> --}}

                                        <td style="text-align: center; vertical-align: middle;"><img src="{{ asset('images/' . $landcard->image) }}"  width="100px" height="100px">
                                        </td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $landcard->land_type }}</td>

                                    
                                        <td style="text-align: center; vertical-align: middle;">{{ $landcard->price }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $landcard->governorate }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $landcard->district }}</td>
                                        <td style="text-align: center; vertical-align: middle;">{{ $landcard->area }}</td>
                                     
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

@endsection

@section('scripts')

@endsection