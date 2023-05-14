<!-- Navbar sidebar menu  -->
<div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-aside" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="{{ route('frontEnd.SearchIndex') }}" method="POST">
                    @csrf
                    <div class="widget__form-search-bar">
                        <div class="row no-gutters">
                            <div class="col">
                                <input class="form-control border-secondary border-right-0 rounded-0" name="__search"
                                    id="__search" value="" placeholder="Search" />
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </form>
            </div>
            <div class="modal-body">
                <nav class="list-group list-group-flush">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('basUser.dashboard') }}"> {{ __('Dashboard') }} </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('basUser.userActivity') }}">
                                {{ __('My Activity') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('basUser.becomeBlogger') }}" onclick="alert('Are you sure! your activity and data will review!')">
                                {{ __('Become Blogger') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="modal-footer">
                <p>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> <a href="{{ route('FrontEnd.Index') }}">HowTinue Inc</a> | All
                    Rights Reserved ~ Developed by <a href="https://github.com/cybsam" target="_blank">CybSam</a>

                </p>
            </div>
        </div>
    </div>
    <!-- modal-bialog .// -->
</div>
<!-- modal.// -->
<!-- End Navbar sidebar menu  -->
<!-- End Navbar  -->
