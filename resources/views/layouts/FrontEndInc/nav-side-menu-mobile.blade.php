<!-- Navbar sidebar menu  -->
<div id="modal_aside_right" class="modal fixed-left fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-aside" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="widget__form-search-bar">
                    <div class="row no-gutters">
                        <div class="col">
                            <input class="form-control border-secondary border-right-0 rounded-0" value=""
                                placeholder="Search" />
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
            </div>
            <div class="modal-body">
                <nav class="list-group list-group-flush">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="{{ route('FrontEnd.Index') }}"
                                data-toggle="dropdown">
                                Home
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('FrontEnd.Index') }}">
                                        Home version one
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Beauty
                            </a>
                            <ul class="dropdown-menu animate fade-up">
                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="#">
                                        Blog
                                    </a>
                                    <ul class="submenu dropdown-menu animate fade-up">
                                        <li>
                                            <a class="dropdown-item" href="/category-style-v1.html">Style 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/category-style-v2.html">Style 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/category-style-v3.html">Style 3</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item icon-arrow text-dark" href="">Submenu item 3
                                            </a>
                                            <ul class="submenu dropdown-menu animate fade-up">
                                                <li>
                                                    <a class="dropdown-item" href="">Multi level 1</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="">Multi level 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item text-dark" href="">Submenu item 4</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="">Submenu item 5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="#">
                                        Blog single detail
                                    </a>
                                    <ul class="submenu dropdown-menu animate fade-up">
                                        <li>
                                            <a class="dropdown-item" href="/article-detail-v1.html">Style 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/article-detail-v2.html">Style 2</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/article-detail-v3.html">Style 3</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="#">
                                        Search Result
                                    </a>
                                    <ul class="submenu dropdown-menu animate fade-up">
                                        <li>
                                            <a class="dropdown-item" href="/search-result.html">Style 1</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/search-result-v1.html">Style 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('login') }}">Login
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('register') }}">
                                        Register
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('frontend.contact') }}">
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="/404.html">
                                        404 Error
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Body
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="/about-us.html">
                                        Style 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about-us-v1.html">
                                        Style 2
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Mind
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="/about-us.html">
                                        Style 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about-us-v1.html">
                                        Style 2
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Calculator
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="/about-us.html">
                                        Style 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about-us-v1.html">
                                        Style 2
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Foods
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="/about-us.html">
                                        Style 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about-us-v1.html">
                                        Style 2
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Login / Register
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="/about-us.html">
                                        Style 1
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/about-us-v1.html">
                                        Style 2
                                    </a>
                                </li>
                            </ul>
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link text-dark" href="#"> Category </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="{{ route('frontend.contact') }}">
                                contact
                            </a>
                        </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="modal-footer">
                <p>
                    &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> <a href="{{ route('FrontEnd.Index') }}">HowTinue Inc</a> | All
                    Rights Reserved - Developed by <a href="https://github.com/cybsam" target="_blank">CybSam</a>

                </p>
            </div>
        </div>
    </div>
    <!-- modal-bialog .// -->
</div>
<!-- modal.// -->
<!-- End Navbar sidebar menu  -->
<!-- End Navbar  -->
