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

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Beauty
                            </a>
                            @php
                                        $bodyCare = 'body-care';
                                        $skinCare = 'skin-care';
                                        $oralCare = 'oral-care';
                                        $makeup = 'makeup';
                                        $heirCare = 'hair-care';
                                        $nailCare = 'nail-care';
                                        $naturalOrganic = 'natural-and-organic';
                                    @endphp
                            <ul class="dropdown-menu animate fade-up">
                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="{{ route('category.post', ['list_post' => $bodyCare]) }}">
                                        Body Care
                                    </a>

                                </li>
                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="{{ route('category.post', ['list_post' => $skinCare]) }}">
                                        Skin Care
                                    </a>

                                </li>

                                <li>
                                    <a class="dropdown-item icon-arrow text-dark" href="{{ route('category.post', ['list_post' => $oralCare]) }}">
                                        Oral Care
                                    </a>

                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('category.post', ['list_post' => $makeup]) }}">Makeup
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('category.post', ['list_post' => $heirCare]) }}">
                                        Heir Care
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('category.post', ['list_post' => $nailCare]) }}">
                                        Nail Care
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-dark" href="{{ route('category.post', ['list_post' => $naturalOrganic]) }}">
                                        Natural Organic
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Body
                            </a>
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
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $brain]) }}">
                                        Brain
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $eye]) }}">
                                        Eye
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $kidney]) }}">
                                        Kidney
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $neck]) }}">
                                        Neck
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $arms]) }}">
                                        Arms
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $joints]) }}">
                                        Joints
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $heart]) }}">
                                        Heart
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $liver]) }}">
                                        Liver
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $hands]) }}">
                                        Hands
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $nose]) }}">
                                        Nose
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $abdomen]) }}">
                                        Abdomen
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#" data-toggle="dropdown">
                                Mind
                            </a>
                            @php
                                        $anxiety = 'anxiety';
                                        $depression = 'depression';
                                        $stressManagement = 'stress-management';
                                        $selfCare = 'self-care';
                                        $mindfulnessMeditation = 'mindfulness-meditation';
                                        $mentalHealthStigma = 'mental-health-stigma';
                                        $relationshipAndCommunication = 'relationship-and-communication';
                                    @endphp
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $anxiety]) }}">
                                        Anxiety
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $depression]) }}">
                                        Depression
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $stressManagement]) }}">
                                        Stress Management
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $selfCare]) }}">
                                        Self Care
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $mindfulnessMeditation]) }}">
                                        Mindfulness Meditation
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $mentalHealthStigma]) }}">
                                        Mental Health Stigma
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $relationshipAndCommunication]) }}">
                                        Relationship & Communication
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#"
                                data-toggle="dropdown">
                                Foods
                            </a>
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
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $plantBasedFood]) }}">
                                        Plant Based Food
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $wholeGrains]) }}">
                                        Whole Grains
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $leanProtein]) }}">
                                        Lean Protein
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $wholeFoods]) }}">
                                        Whole Foods
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $lowFatDiet]) }}">
                                        Low-Fat Diet
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $fruitsAndVegetables]) }}">
                                        Fruits & Vegetables
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $nutsAndSeeds]) }}">
                                        Nuts & Seeds
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $healthyFats]) }}">
                                        Healthy Fats
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('category.post', ['list_post' => $herbsAndSpices]) }}">
                                        Herbs & Spices
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle text-dark" href="#"
                                data-toggle="dropdown">
                                Calculator
                            </a>
                            <ul class="dropdown-menu dropdown-menu-left">
                                <li>
                                    <a class="dropdown-item" href="{{ route('FrontEndCalculator.Fitness') }}">
                                        Fitness Calculator
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('FrontEndCalculator.Pregnancy') }}">
                                        Pregnancy Calculator
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('FrontEndCalculator.Others') }}">
                                        Others Calculator
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('FrontEndCalculator.BMI') }}">
                                        BMI Calculator
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link active text-dark" href="{{ route('login') }}"
                                data-toggle="dropdown">
                                Login / Register
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

</div>

