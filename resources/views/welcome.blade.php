<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Support System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Version" content="v1.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="welcome/images/icon.jpg">
        <!-- Bootstrap -->
        <link href="welcome/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icon -->
        <link href="welcome/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="welcome/css/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" rel="stylesheet">
        <!-- Slider -->
        <link rel="stylesheet" href="welcome/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="welcome/css/owl.theme.default.min.css"/>
        <!-- Custom Css -->
        <link href="welcome/css/style.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom navbar-light sticky">
    		<div class="container">
			    <!-- Logo container-->
                <div>
                   <h1>Support System</h1>
                </div>
                <!-- End Logo container-->
			    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			        <span class="mdi mdi-menu"></span>
			    </button><!--end button-->

			    <div class="collapse navbar-collapse" id="navbarCollapse">
			        <ul class="navbar-nav ml-auto">
			            <li class="nav-item active">
			                <a class="nav-link" href="#home">Home</a>
			            </li><!--end nav item-->
			            <li class="nav-item">
			                <a class="nav-link" href="#contact">Contact</a>
			            </li><!--end nav item-->

			@if (Route::has('login'))
                    @auth
                        {{-- <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Home</a> </li> --}}
                    @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                    @endauth

            @endif
			           <!--end nav item-->
			        </ul><!--end navbar nav-->
			    </div><!--end collapse-->
		    </div><!--end container-->
		</nav><!--end navbar-->
        <!-- Navbar End -->



        <!-- HOME START-->
        <section class="bg-half-200" style="background: url('welcome/images/bg-circle-effect.png') center center;" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container">
                        <div class="row mt-5 align-items-center">
                            <div class="col-lg-7 col-md-7">
                                <div class="title-heading mr-lg-4">
                                    <h1 class="heading mb-3">Welcome Back !</h1>
                                    <p class="para-desc text-muted">Support System</p>
                                    <div class="mt-4 pt-2">
                                        <a href="#contact" class="btn btn-outline-primary mb-2 mouse-down"><i class="mdi mdi-email"></i> Contact Us</a>
                                    </div>
                                </div>
                            </div><!--end col-->
      {{-- succsess alert --}}
      @if (session('status'))
      <div class="alert alert-success alert-dismissible fade show" style="width: 500px" role="alert">{{ session('status') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      </div><!--end col-->
                            <div class="col-lg-5 col-md-5 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="home-img">
                                    <img src="{{ asset('welcome/images/home.png')}}" class="img-fluid" alt="">
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->


                </div><!--end home desc center-->
            </div><!--end home center-->
        </section><!--end section-->



        <!-- Contact Start -->
        <section class="section bg-light" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Submit Your Ticket !</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Please fill out the following form and we will get back to you shortly.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row justify-content-center">
                    <div class="col-lg-9 mt-4 pt-2">
                        <div class="custom-form">
                            <div id="message-box"></div>
                            <form action="{{ route('add.ticket') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Your email :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input name="phone_number" id="phone_number" type="number" class="form-control" placeholder="Phone Number :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" rows="4" class="form-control" placeholder="Your Message :"></textarea>
                                        </div>
                                    </div>
                                </div><!--end row-->
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <input type="submit" id="submit" name="submit" class="submitBnt btn btn-primary" value="Submit Ticket">
                                        <div id="simple-msg"></div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div><!--end custom-form-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->

        <!-- Contact End -->

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->

        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top">
            <i class="mdi mdi-chevron-up d-block"> </i>
        </a>
        <!-- Back to top -->



        <!-- javascript -->
        <script src="{{ asset('welcome/js/jquery.min.js')}}"></script>
        <script src="{{ asset('welcome/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('welcome/js/jquery.easing.min.js')}}"></script>
        <script src="{{ asset('welcome/js/scrollspy.min.js')}}"></script>
        <script src="{{ asset('welcome/js/contact.js')}}"></script>
        <script src="{{ asset('welcome/js/feather.min.js')}}"></script>
        <script src="{{ asset('welcome/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('welcome/js/owl.init.js')}}"></script>
        <script src="{{ asset('welcome/js/app.js')}}"></script>

    </body>

</html>
