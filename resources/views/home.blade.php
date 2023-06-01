@extends('layouts.app')

@section('content')

<?php $date=date("Y-m-d"); ?>

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
                        <h5 class="mb-0">Dashboard</h5>

                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-bed h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            {{-- <h5 class="mb-0">{{ $task_count }}</h5> --}}
                                            <p class="text-muted mb-0">Open</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-social-distancing h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            {{-- <h5 class="mb-0">{{ $newtask }}</h5> --}}
                                            <p class="text-muted mb-0">Replied</p>
                                         </div>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-4 col-md-4 mt-4">
                                <div class="card features feature-primary rounded border-0 shadow p-4">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-md">
                                            <i class="uil uil-medkit h3 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-2">
                                            {{-- <h5 class="mb-0">{{ $completedTask }}</h5> --}}
                                            <p class="text-muted mb-0">Closed</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                @include('layouts.footer')
               <!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- javascript -->
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

@endsection
