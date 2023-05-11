<div class="wrapper__footer bg__footer-dark pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="widget__footer">
                    <div class="dropdown-footer">
                        <h4 class="footer-title">
                            Beauty
                            <span class="fa fa-angle-down"></span>
                        </h4>
                    </div>
                                    @php
                                        $bodyCare = 'body-care';
                                        $skinCare = 'skin-care';
                                        $oralCare = 'oral-care';
                                        $makeup = 'makeup';
                                        $heirCare = 'hair-care';
                                        $nailCare = 'nail-care';
                                        $naturalOrganic = 'natural-and-organic';
                                    @endphp
                    <ul class="list-unstyled option-content is-hidden">
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $bodyCare]) }}">Body Care</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $skinCare]) }}">Skin Care</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $oralCare]) }}">Oral Care</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $makeup]) }}">Makeup</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $heirCare]) }}">Heir Care</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $naturalOrganic]) }}">Natural Organic</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget__footer">
                    <div class="dropdown-footer">
                        <h4 class="footer-title">
                            Body
                            <span class="fa fa-angle-down"></span>
                        </h4>
                    </div>
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
                    <ul class="list-unstyled option-content is-hidden">
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $kidney]) }}">Kidney</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $eye]) }}">Eye</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $neck]) }}">Neck</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $arms]) }}">Arms</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $joints]) }}">Joints</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $liver]) }}">Liver</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget__footer">
                    <div class="dropdown-footer">
                        <h4 class="footer-title">
                            Mind
                            <span class="fa fa-angle-down"></span>
                        </h4>
                    </div>
                                    @php
                                        $anxiety = 'anxiety';
                                        $depression = 'depression';
                                        $stressManagement = 'stress-management';
                                        $selfCare = 'self-care';
                                        $mindfulnessMeditation = 'mindfulness-meditation';
                                        $mentalHealthStigma = 'mental-health-stigma';
                                        $relationshipAndCommunication = 'relationship-and-communication';
                                    @endphp
                    <ul class="list-unstyled option-content is-hidden">
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $anxiety]) }}">Anxiety</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $depression]) }}">Depression</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $stressManagement]) }}">Stress Management</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $selfCare]) }}">Self Care</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $mindfulnessMeditation]) }}">Mindfulness Meditation</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $mentalHealthStigma]) }}">Mental Health Stigma</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget__footer">
                    <div class="dropdown-footer">
                        <h4 class="footer-title">
                            Foods
                            <span class="fa fa-angle-down"></span>
                        </h4>
                    </div>
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
                    <ul class="list-unstyled option-content is-hidden">
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $plantBasedFood]) }}">Plant Based Food</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $wholeGrains]) }}">Whole Grains</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $leanProtein]) }}">Lean Protein</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $fruitsAndVegetables]) }}">Fruits & Vegetables</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $nutsAndSeeds]) }}">Nuts & Seeds</a>
                        </li>
                        <li>
                            <a href="{{ route('category.post', ['list_post' => $herbsAndSpices]) }}">Herbs & Spices</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <figure class="image-logo">
                        <img src="{{ asset('FrontEnd/images/icon/logo-footer.png') }}" alt="" class="logo-footer" />
                    </figure>
                </div>
                @php
                    $findUs = App\Models\FindUs::where('id',1)->first();
                @endphp
                <div class="col-md-8 my-auto">
                    <div class="social__media">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="{{ $findUs->facebook }}" target="blank" class="btn btn-social rounded text-white facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $findUs->twitter }}" target="blank" class="btn btn-social rounded text-white twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $findUs->whatsapp }}" target="blank" class="btn btn-social rounded text-white whatsapp">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $findUs->telegram }}" target="blank" class="btn btn-social rounded text-white telegram">
                                    <i class="fa fa-telegram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ $findUs->linkedin }}" target="blank" class="btn btn-social rounded text-white linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
