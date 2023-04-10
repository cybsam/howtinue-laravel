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
                        <a class="nav-link" href="{{ route('FrontEnd.Index') }}">
                            Home
                        </a>
                        
                    </li>
                    {{-- end home page --}}

                    {{-- beauty mega menu --}}
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Beauty
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Beauty program will be: </h5>
                                    <hr />

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Body Care</a>
                                                    <a href="" class="list-group-item list-group-item-action">Skin Care</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Oral Care</a>
                                                    <a href="" class="list-group-item list-group-item-action">Makeup</a>
                                                    
                                                     
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Hair Care</a>
                                                    <a href="" class="list-group-item list-group-item-action">Nail Care</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Natural & Orginic Beauty</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Popular news carousel -->

                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    {{-- end beauty mega menu --}}

                    {{-- body mega menu --}}
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Body
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Body program will be: </h5>
                                    <hr />

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Brain</a>
                                                    <a href="" class="list-group-item list-group-item-action">Eyes</a>
                                                    <a href="" class="list-group-item list-group-item-action">Kedney</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Neek</a>
                                                    <a href="" class="list-group-item list-group-item-action">Arms</a>
                                                    <a href="" class="list-group-item list-group-item-action">Joints</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Heart</a>
                                                    <a href="" class="list-group-item list-group-item-action">Liver</a>
                                                    <a href="" class="list-group-item list-group-item-action">kedney</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Hands</a>
                                                    <a href="" class="list-group-item list-group-item-action">Abdomen</a>
                                                    <a href="" class="list-group-item list-group-item-action">Nose</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Popular news carousel -->

                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    {{-- end body mega menu --}}

                    {{-- mind mega menu --}}
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Mind
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Mind program will be: </h5>
                                    <hr />

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Anxiety</a>
                                                    <a href="" class="list-group-item list-group-item-action">Deepression</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Stress Management</a>
                                                    <a href="" class="list-group-item list-group-item-action">Self Care</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Mindfullness & Meadition</a>
                                                    <a href="" class="list-group-item list-group-item-action">Mental Health Stigma</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Relationship & Commiunication</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Popular news carousel -->

                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    {{-- end mind mega menu --}}
                    {{-- <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown">
                                Category
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontEnd.catagory.show') }}">
                                        Category
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('frontEnd.catagory.parent') }}">
                                        Parent Category
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                    </li> --}}

                    {{-- foods mega menu --}}
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Foods
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Foods program will be: </h5>
                                    <hr />

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Plant Based Food</a>
                                                    <a href="" class="list-group-item list-group-item-action">Leans Protines</a>
                                                    <a href="" class="list-group-item list-group-item-action">Whole Foods</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Whole Grains</a>
                                                    <a href="" class="list-group-item list-group-item-action">Low-Fat Dairy</a>
                                                    <a href="" class="list-group-item list-group-item-action">Frouts And Vegitables</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Nutes & Seeds</a>
                                                    <a href="" class="list-group-item list-group-item-action">Health Fats</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Herbs & Spices</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Popular news carousel -->

                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    {{-- end foods mega menu --}}

                    {{-- calculator mega menu --}}
                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Calculator
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Calculators:</h5>
                                    <hr />

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Fitness Calculator</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Pegnency Calculator</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">Others Calculator</a>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="" class="list-group-item list-group-item-action">BMI Calculator</a>
                                                        
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Popular news carousel -->

                                </div>
                                <!-- col-megamenu.// -->
                            </div>
                        </div>
                        <!-- dropdown-mega-menu.// -->
                    </li>
                    {{-- end calculator mega menu --}}

                    



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
