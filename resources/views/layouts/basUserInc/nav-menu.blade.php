<!-- Navbar  -->
<!-- Navbar menu  -->
<div class="navigation-wrap navigation-shadow bg-white">
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <div class="offcanvas-header">
                <div data-toggle="modal" data-target="#modal_aside_right" class="btn-md">
                    <span class="navbar-toggler-icon"></span>
                </div>
            </div>
            <figure class="mb-0 mx-auto">
                <a href="{{ route('FrontEnd.Index') }}">
                    <img src="{{ asset('FrontEnd/images/icon/logo.png') }}" alt="" class="img-fluid logo" />
                </a>
            </figure>

            <div class="collapse navbar-collapse justify-content-between" id="main_nav99">
                <ul class="navbar-nav ml-auto">
                    {{-- home page --}}
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('basUser.dashboard') }}">
                            {{ __('Home') }}
                        </a>
                        
                    </li>
                    {{-- end home page --}}

                    <li class="nav-item"><a class="nav-link" href="{{ route('basUser.dashboardprofile') }}"> {{ __('Profile') }} </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('basUser.userActivity') }}"> {{ __('My Activity') }} </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('basUser.becomeBlogger') }}" onclick="alert('Are you sure! your activity and data will review!')" > {{ __('Become Blogger') }} </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('basUser.adminContactIndex') }}"> {{ __('Contact Admin') }} </a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> {{ __('Logout') }} 
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                    



                </ul>

                <!-- Search bar.// -->
                <ul class="navbar-nav">
                    <li class="nav-item search hidden-xs hidden-sm">
                        <a class="nav-link" href="#">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
                <!-- Search content bar.// -->
                <div class="top-search navigation-shadow">
                    <div class="container">
                        <div class="input-group">
                            <form action="#">
                                <div class="row no-gutters mt-3">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" value="" placeholder="Search "
                                            id="example-search-input4" />
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                            href="/search-result.html">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div>
            <!-- navbar-collapse.// -->
        </div>
    </nav>
</div>
<!-- End Navbar menu  -->
