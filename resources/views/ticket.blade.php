@extends('layouts.app')

@section('content')
        <div class="page-wrapper doctris-theme toggled">

        <!-- sidebar-start -->
         @include('layouts.sidebar')
         <!-- sidebar-end  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">

            <!-- navbar-start -->
            @include('layouts.navbar')
            <!-- navbar-end  -->

                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="row">
                            <div class="col-xl-9 col-lg-6 col-md-4">
                                <h5 class="mb-0">Task</h5>
                                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item active" aria-current="page">Task</li>
                                    </ul>
                                </nav>
                            {{-- succsess alert --}}
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" style="width: 400px" role="alert">{{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            </div><!--end col-->

                            <div class="col-xl-3 col-lg-6 col-md-8 mt-4 mt-md-0">
                                <div class="justify-content-md-end">
                                    <form action="" name="13" method="post" class="signin-form" enctype="multipart/form-data">
                                        <div class="row justify-content-between align-items-center">
                                            <div class="col-sm-12 col-md-5">
                                                <div class="mb-0 position-relative">
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </form><!--end form-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="table-responsive bg-white shadow rounded">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                          <tr>
                                            <th>#</th>
                                            <th>Reference Number</th>
                                            <th>Customer Name</th>
                                            <th>Customer Phone</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>View</th>
                                          </tr>
                                        </thead>

                                        <tbody>

                                            @foreach ($tickets as $ticket )
                                            <tr>
                                                <td>{{ $ticket->id }}</td>
                                                <td>{{ $ticket->reference_number }}</td>
                                                <td>{{ $ticket->customer_name }}</td>
                                                <td>{{ $ticket->customer_phone }}</td>
                                                <td>{{date('Y-m-d', strtotime($ticket->created_at))}}</td>
                                                <td>



                                                    @if ($ticket->status == 0)
                                                    <span class="badge bg-soft-primary">Open</span>

                                                    @elseif($ticket->status == 1)
                                                    <span class="badge bg-soft-success">Complete</span>
                                                    @else
                                                    <span class="badge bg-soft-danger">Close</span>
                                                    @endif
                                                </td>
                                                <td class="align-middle">

                                                    <a href="{{ route ('ticket.view', $ticket->id) }}" class="btn btn-icon btn-pills btn-soft-primary"><i class="uil uil-book"></i></a>

                                                  </td>
                                              </tr>

                                          @endforeach

                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                 <!-- Footer Start -->
                 @include('layouts.footer')
                 <!--end footer-->

            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->
        <!-- javascript -->
        <script src='{{ asset("assets/libs/simplebar/simplebar.min.js']")}}'></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <!-- Main Js -->
        <!-- JAVASCRIPT -->
        <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.init.js')}}"></script>
        <script src="{{ asset('assets/js/app.js')}}"></script>

        <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

        @endsection
