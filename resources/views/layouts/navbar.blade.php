<div class="top-header">
    <div class="header-bar d-flex justify-content-between border-bottom">
        <div class="d-flex align-items-center">
            <a id="close-sidebar" class="btn btn-icon btn-pills btn-soft-primary ms-2" href="#">
                <i class="uil uil-bars"></i>
            </a>
            <div class="search-bar p-0 d-none d-lg-block ms-2">
                <div id="search" class="menu-search mb-0">
                    <form role="search" method="get" id="searchform" class="searchform">
                        <div>
                            <input type="text" class="form-control border rounded-pill" name="s" id="s" placeholder="Search Keywords...">
                            <input type="submit" id="searchsubmit" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <ul class="list-unstyled mb-0">

         <!-- Authentication Links -->
         @guest
         @if (Route::has('login'))
         @endif
         @if (Route::has('register'))
         @endif
     @else

     <li class="list-inline-item mb-0 ms-1">
         <div class="dropdown dropdown-primary">
             <button type="button" class="btn btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/images/user.png')}}" class="avatar avatar-ex-small rounded-circle" alt=""></button>
             <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                 <a class="dropdown-item d-flex align-items-center text-dark" href="profile.html">
                     <img src="{{ asset('assets/images/user.png')}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                     <div class="flex-1 ms-2">
                         <span class="d-block mb-1">Welcome!</span>
                         <small class="text-muted">{{ Auth::user()->name }}</small>
                     </div>
                 </a>
                 <a class="dropdown-item text-dark" href="{{ route('home') }}"><span class="mb-0 d-inline-block me-1"><i class="uil uil-dashboard align-middle h6"></i></span> Dashboard</a>
                 <div class="dropdown-divider border-top"></div>
                 <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"><span class="mb-0 d-inline-block me-1"><i class="uil uil-sign-out-alt align-middle h6"></i></span> Logout</a>
             </div>
         </div>
     </li>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>

     @endguest
        </ul>
    </div>
</div>
