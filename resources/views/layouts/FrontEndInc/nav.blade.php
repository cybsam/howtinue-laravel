<header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <!-- Breaking News Widget -->
                    <div class="breaking-news-area d-flex align-items-center">
                        <div class="news-title">
                            <p>Breaking News:</p>
                        </div>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="single-post.html">10 Things Amazon Echo Can Do</a></li>
                                <li><a href="single-post.html">Welcome to Colorlib Family.</a></li>
                                <li><a href="single-post.html">Boys 'doing well' after Thai</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="top-meta-data d-flex align-items-center justify-content-end">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="index.html" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search...">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- Login -->
                        <a href="{{ route('login') }}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="vizew-main-menu" id="sticker">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">

                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="vizewNav">

                    <!-- Nav brand -->
                    <a href="{{ route('FrontEnd.Index') }}" class="nav-brand"><img src="{{ asset('FrontEnd/img/core-img/logo.png') }}" alt=""></a>

                    {{-- <div class="navSearch">
                        <form action="index.html" method="post">
                            <input type="search" name="top-search" id="topSearch" placeholder="Search anything as you like...">
                            <button type="submit" class="navbtn"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> --}}

                    {{-- <div class="classynav">
                        <ul>
                            <li>
                                <a href="#">Search</a>
                            </li>
                        </ul>
                    </div> --}}
                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li class="active"><a href="{{ route('FrontEnd.Index') }}">Home</a></li>
                                <li><a href="archive-list.html">Archives</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">- Home</a></li>
                                        <li><a href="archive-list.html">- Archive List</a></li>
                                        <li><a href="archive-grid.html">- Archive Grid</a></li>
                                        <li><a href="single-post.html">- Single Post</a></li>
                                        <li><a href="video-post.html">- Single Video Post</a></li>
                                        <li><a href="contact.html">- Contact</a></li>
                                        <li><a href="typography.html">- Typography</a></li>
                                        <li><a href="login.html">- Login</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li><a href="index.html">- Home</a></li>
                                            <li><a href="archive-list.html">- Archive List</a></li>
                                            <li><a href="archive-grid.html">- Archive Grid</a></li>
                                            <li><a href="single-post.html">- Single Post</a></li>
                                            <li><a href="video-post.html">- Single Video Post</a></li>
                                            <li><a href="contact.html">- Contact</a></li>
                                            <li><a href="typography.html">- Typography</a></li>
                                            <li><a href="login.html">- Login</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>