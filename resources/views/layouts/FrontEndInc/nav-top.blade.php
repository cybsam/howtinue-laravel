<!-- Navbar  Top-->
<div class="topbar d-none d-sm-block">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="topbar-left">
                    <div class="topbar-text">{{ now()->format('l, j F Y') }}</div>
                </div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="list-unstyled topbar-right">
                    <ul class="topbar-link">
                        <li><a href="#" title="">Career</a></li>
                        <li><a href="{{ route('frontend.contact') }}" title="">Contact Us</a></li>
                        <li>
                            @if (Auth::check())
                                <a href="{{ route('login') }}" title="">{{ __('Dashboard') }}</a>
                            @else
                                <a href="{{ route('login') }}" title="">{{ __('Login / Register') }}</a>
                            @endif
                            
                        
                        </li>
                    </ul>
                    @php
                    $findUs = App\Models\FindUs::where('id',1)->first();
                @endphp
                    <ul class="topbar-sosmed">
                        <li>
                            <a href="{{ $findUs->facebook }}" target="blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="{{ $findUs->twitter }}"target="blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="{{ $findUs->linkedin }}"target="blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Navbar Top  -->
