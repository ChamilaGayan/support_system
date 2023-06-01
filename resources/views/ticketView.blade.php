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
                                <h5 class="mb-0">Ticket</h5>
                                <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item active" aria-current="page">Ticket</li>
                                    </ul>
                                </nav>

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

                                    <form action="{{ route('ticket.confirm',  $ticket->id) }}" method="POST">
                                        @csrf
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Ticket Preview</h5>

                                                    @if ($ticket->status == 2)
                                                    <span class="badge bg-soft-danger">Ticket Closed</span>

                                                    @elseif ($ticket->status == 1)
                                                    <span class="badge bg-soft-success">Completed</span>
                                                    @else
                                                    <a href="{{ route ('ticket.close', $ticket->id) }}" class="btn btn-outline-danger mb-2 mouse-down"><i class="uil uil-book"></i>Close</a>
                                                    @endif

                                                </div>
                                                   {{-- succsess alert --}}
                            @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" style="width: 400px" role="alert">{{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                            </div><!--end col-->
                                                <div class="modal-body p-3 pt-4">
                                                        <div class="row">

                                                            <div class="col-lg-12 col-md-6">

                                                                <div class="mb-3">
                                                                    <label class="form-label">Customer Name : {{ $ticket->customer_name }}</label>
                                                                </div>

                                                            </div><!--end col-->

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Reference Number : {{ $ticket->reference_number }}</label>

                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Customer Phone Number : {{ $ticket->customer_phone }}</label>
                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Customer Email : {{ $ticket->customer_email }}</label>

                                                                </div>
                                                            </div><!--end col-->

                                                            <div class="col-lg-6 col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Reference Number : {{ $ticket->reference_number }}</label>

                                                                </div>
                                                            </div><!--end col-->
                                                        </div><!--end row-->

                                                        <div class="row">
                                                            <label class="form-label">Customer Message :  <p class="text text-secondary">{{ $ticket->customer_message }}</p></label>


                                                            <div class="col-lg-12">
                                                                <label class="form-label">Reply</label>
                                                                <div class="d-grid">
                                                                    <textarea name="reply" id="reply" rows="4" class="form-control" placeholder="{{ $ticket->reply }}"></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="col-lg-3 mt-2">
                                                                <div class="d-grid">
                                                                    <button type="submit" name="submit" class="btn btn-outline-primary mb-2 mouse-down"><i class="mdi mdi-email"></i> Send</button>
                                                                </div>
                                                            </div><!--end col-->
                                                        </div>
                                                </div>
                                            </div>


                                    </form>












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

        {{-- edit model  --}}



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
