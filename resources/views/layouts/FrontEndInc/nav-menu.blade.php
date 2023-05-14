
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

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('FrontEnd.Index') }}">
                            {{ __('Home') }}
                        </a>

                    </li>

                    <li class="nav-item dropdown has-megamenu">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            {{ __('Beauty') }}
                        </a>
                        <div class="dropdown-menu animate fade-down megamenu mx-auto" role="menu">
                            <div class="container wrap__mobile-megamenu">
                                <div class="col-megamenu">
                                    <h5 class="title">Beauty program will be: </h5>
                                    <hr />
                                    @php
                                        $bodyCare = 'body-care';
                                        $skinCare = 'skin-care';
                                        $oralCare = 'oral-care';
                                        $makeup = 'makeup';
                                        $heirCare = 'hair-care';
                                        $nailCare = 'nail-care';
                                        $naturalOrganic = 'natural-and-organic';
                                    @endphp

                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $bodyCare]) }}"
                                                        class="list-group-item list-group-item-action">Body Care</a>
                                                    <a href="{{ route('category.post', ['list_post' => $skinCare]) }}"
                                                        class="list-group-item list-group-item-action">Skin Care</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $oralCare]) }}"
                                                        class="list-group-item list-group-item-action">Oral Care</a>
                                                    <a href="{{ route('category.post', ['list_post' => $makeup]) }}"
                                                        class="list-group-item list-group-item-action">Makeup</a>


                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $heirCare]) }}"
                                                        class="list-group-item list-group-item-action">Hair Care</a>
                                                    <a href="{{ route('category.post', ['list_post' => $nailCare]) }}"
                                                        class="list-group-item list-group-item-action">Nail Care</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $naturalOrganic]) }}"
                                                        class="list-group-item list-group-item-action">Natural & Orginic
                                                        Beauty</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

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
                                    @php
                                        $brain = 'brain';
                                        $eye = 'eye';
                                        $kidney = 'kidney';
                                        $neck = 'neck';
                                        $arms = 'arms';
                                        $joints = 'joints';
                                        $heart = 'heart';
                                        $liver = 'liver';
                                        $hands = 'hands';
                                        $nose = 'nose';
                                        $abdomen = 'abdomen';
                                    @endphp
                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $brain]) }}"
                                                        class="list-group-item list-group-item-action">Brain</a>
                                                    <a href="{{ route('category.post', ['list_post' => $eye]) }}"
                                                        class="list-group-item list-group-item-action">Eyes</a>
                                                    <a href="{{ route('category.post', ['list_post' => $kidney]) }}"
                                                        class="list-group-item list-group-item-action">Kidney</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $neck]) }}"
                                                        class="list-group-item list-group-item-action">Neck</a>
                                                    <a href="{{ route('category.post', ['list_post' => $arms]) }}"
                                                        class="list-group-item list-group-item-action">Arms</a>
                                                    <a href="{{ route('category.post', ['list_post' => $joints]) }}"
                                                        class="list-group-item list-group-item-action">Joints</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $heart]) }}"
                                                        class="list-group-item list-group-item-action">Heart</a>
                                                    <a href="{{ route('category.post', ['list_post' => $liver]) }}"
                                                        class="list-group-item list-group-item-action">Liver</a>
                                                    <a href="{{ route('category.post', ['list_post' => $naturalOrganic]) }}"
                                                        class="list-group-item list-group-item-action">kedney</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $hands]) }}"
                                                        class="list-group-item list-group-item-action">Hands</a>
                                                    <a href="{{ route('category.post', ['list_post' => $abdomen]) }}"
                                                        class="list-group-item list-group-item-action">Abdomen</a>
                                                    <a href="{{ route('category.post', ['list_post' => $nose]) }}"
                                                        class="list-group-item list-group-item-action">Nose</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

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
                                    @php
                                        $anxiety = 'anxiety';
                                        $depression = 'depression';
                                        $stressManagement = 'stress-management';
                                        $selfCare = 'self-care';
                                        $mindfulnessMeditation = 'mindfulness-meditation';
                                        $mentalHealthStigma = 'mental-health-stigma';
                                        $relationshipAndCommunication = 'relationship-and-communication';
                                    @endphp
                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $anxiety]) }}"
                                                        class="list-group-item list-group-item-action">Anxiety</a>
                                                    <a href="{{ route('category.post', ['list_post' => $depression]) }}"
                                                        class="list-group-item list-group-item-action">Depression</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $stressManagement]) }}"
                                                        class="list-group-item list-group-item-action">Stress Management</a>
                                                    <a href="{{ route('category.post', ['list_post' => $selfCare]) }}"
                                                        class="list-group-item list-group-item-action">Self Care</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $mindfulnessMeditation]) }}"
                                                        class="list-group-item list-group-item-action">Mindfulness Meditation</a>
                                                    <a href="{{ route('category.post', ['list_post' => $mentalHealthStigma]) }}"
                                                        class="list-group-item list-group-item-action">Mental Health Stigma</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $relationshipAndCommunication]) }}"
                                                        class="list-group-item list-group-item-action">Relationship &
                                                        Commiunication</a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </li>
                    {{-- end mind mega menu --}}

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
                                    @php
                                        $plantBasedFood = 'plant-based-food';
                                        $wholeGrains = 'whole-grains';
                                        $leanProtein = 'lean-protein';
                                        $wholeFoods = 'whole-foods';
                                        $lowFatDiet = 'low-fat-diet';
                                        $fruitsAndVegetables = 'fruits-and-vegetables';
                                        $nutsAndSeeds = 'nuts-and-seeds';
                                        $healthyFats = 'healthy-fats';
                                        $herbsAndSpices = 'herbs-and-spices';
                                    @endphp
                                    <div class="">
                                        <div class="row my-4">
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $plantBasedFood]) }}"
                                                        class="list-group-item list-group-item-action">Plant Based
                                                        Food</a>
                                                    <a href="{{ route('category.post', ['list_post' => $leanProtein]) }}"
                                                        class="list-group-item list-group-item-action">Lean Protein</a>
                                                    <a href="{{ route('category.post', ['list_post' => $wholeFoods]) }}"
                                                        class="list-group-item list-group-item-action">Whole Foods</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $wholeGrains]) }}"
                                                        class="list-group-item list-group-item-action">Whole Grains</a>
                                                    <a href="{{ route('category.post', ['list_post' => $lowFatDiet]) }}"
                                                        class="list-group-item list-group-item-action">Low-Fat
                                                        Diet</a>
                                                    <a href="{{ route('category.post', ['list_post' => $fruitsAndVegetables]) }}"
                                                        class="list-group-item list-group-item-action">Fruits & Vegetables</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $nutsAndSeeds]) }}"
                                                        class="list-group-item list-group-item-action">Nuts & Seeds</a>
                                                    <a href="{{ route('category.post', ['list_post' => $healthyFats]) }}"
                                                        class="list-group-item list-group-item-action">Healthy Fats</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('category.post', ['list_post' => $herbsAndSpices]) }}"
                                                        class="list-group-item list-group-item-action">Herbs & Spices</a>

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
                                                    <a href="{{ route('FrontEndCalculator.Fitness') }}"
                                                        class="list-group-item list-group-item-action">Fitness
                                                        Calculator</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('FrontEndCalculator.Pregnancy') }}"
                                                        class="list-group-item list-group-item-action">Pregnancy
                                                        Calculator</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('FrontEndCalculator.Others') }}"
                                                        class="list-group-item list-group-item-action">Others
                                                        Calculator</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-3">
                                                <div class="list-group list-group-flush">
                                                    <a href="{{ route('FrontEndCalculator.BMI') }}"
                                                        class="list-group-item list-group-item-action">BMI
                                                        Calculator</a>


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
                            <form action="{{ route('frontEnd.SearchIndex') }}" method="POST">
                                @csrf
                                <div class="row no-gutters mt-3">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" name="__search" id="__search" value=""
                                            placeholder="Search " id="example-search-input4" />
                                    </div>
                                    <div class="col-auto">
                                        <button
                                            class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                            <i class="fa fa-search"></i>
                                        </button>
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
