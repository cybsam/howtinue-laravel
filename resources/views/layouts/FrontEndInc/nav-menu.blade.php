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
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">
                            Home
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a class="dropdown-item" href="{{ route('FrontEnd.Index') }}">
                                    Home version one
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('FrontEnd.Index') }}">
                                    Home version two
                                </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Pages
                        </a>
                        <ul class="dropdown-menu animate fade-up">
                            <li>
                                <a class="dropdown-item icon-arrow" href="#"> Blog </a>
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
                                        <a class="dropdown-item icon-arrow" href="">Submenu item 3
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
                                        <a class="dropdown-item" href="">Submenu item 4</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="">Submenu item 5</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="dropdown-item icon-arrow" href="#">
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
                                <a class="dropdown-item icon-arrow" href="#">
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
                                <a class="dropdown-item" href="/login.html">Login </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/register.html">
                                    Register
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('frontend.contact') }}">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/404.html"> 404 Error </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li>
                                <a class="dropdown-item" href="">
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

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            News
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Recent news</h5>
                                    <hr />
                                    <!-- Popular news carousel -->
                                    <div class="popular__news-header-carousel">
                                        <div class="top__news__slider">
                                            <div class="item">
                                                <!-- Post Article -->
                                                <div class="article__entry">
                                                    <div class="article__image">
                                                        <a href="#">
                                                            <img src="images/placeholder/500x400.jpg" alt=""
                                                                class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <div class="article__content">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by david hall </span>,
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <span> descember 09, 2016 </span>
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="#">
                                                                Proin eu nisl et arcu iaculis placerat
                                                                sollicitudin ut est.
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <!-- Post Article -->
                                                <div class="article__entry">
                                                    <div class="article__image">
                                                        <a href="#">
                                                            <img src="images/placeholder/500x400.jpg" alt=""
                                                                class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <div class="article__content">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by david hall </span>,
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <span> descember 09, 2016 </span>
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="#">
                                                                Proin eu nisl et arcu iaculis placerat
                                                                sollicitudin ut est.
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <!-- Post Article -->
                                                <div class="article__entry">
                                                    <div class="article__image">
                                                        <a href="#">
                                                            <img src="images/placeholder/500x400.jpg" alt=""
                                                                class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <div class="article__content">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by david hall </span>,
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <span> descember 09, 2016 </span>
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="#">
                                                                Proin eu nisl et arcu iaculis placerat
                                                                sollicitudin ut est.
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <!-- Post Article -->
                                                <div class="article__entry">
                                                    <div class="article__image">
                                                        <a href="#">
                                                            <img src="images/placeholder/500x400.jpg" alt=""
                                                                class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <div class="article__content">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by david hall </span>,
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <span> descember 09, 2016 </span>
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="#">
                                                                Proin eu nisl et arcu iaculis placerat
                                                                sollicitudin ut est.
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <!-- Post Article -->
                                                <div class="article__entry">
                                                    <div class="article__image">
                                                        <a href="#">
                                                            <img src="images/placeholder/500x400.jpg" alt=""
                                                                class="img-fluid" />
                                                        </a>
                                                    </div>
                                                    <div class="article__content">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item">
                                                                <span class="text-primary">
                                                                    by david hall </span>,
                                                            </li>

                                                            <li class="list-inline-item">
                                                                <span> descember 09, 2016 </span>
                                                            </li>
                                                        </ul>
                                                        <h5>
                                                            <a href="#">
                                                                Proin eu nisl et arcu iaculis placerat
                                                                sollicitudin ut est.
                                                            </a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontEnd.catagory.show') }}"> Category </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('frontend.contact') }}"> contact </a>
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
