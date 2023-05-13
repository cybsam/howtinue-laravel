{{-- @include('layouts.FrontEndInc.header') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('FrontTitle')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{ asset('FrontEnd/site.webmanifest') }}">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/styles.css?537a1bbd0e5129401d28') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css"/>
    <style>
        .bootstrap-tagsinput .tag{
            margin-right: 2px;
            color: #fff;
            background: #2196f3;
            padding: 3px 7px;
            border-radius: 3px;
        }
        .bootstrap-tagsinput{
            width: 100%;
        }
    </style>
</head>
    <body>
        @include('layouts.basUserInc.preload')
        <header class="bg-light">
            @include('layouts.basUserInc.nav-top')
            @include('layouts.basUserInc.nav-menu')
            @include('layouts.basUserInc.nav-side-menu-mobile')
        </header>
        <!-- End Header news -->
        {{-- @include('layouts.FrontEndInc.preload') --}}

        @yield('basUser')

        <section class="wrapper__section p-0">
            <div class="wrapper__section__components">
                <!-- Footer -->
                <footer>
                    {{-- @include('layouts.basUserInc.footer') --}}
                    @include('layouts.basUserInc.copyright')
                </footer>
            </div>
          </section>

    <a href="javascript:" id="return-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <script type="text/javascript" src="{{ asset('FrontEnd/js/index.bundle.js?537a1bbd0e5129401d28') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" integrity="sha512-9UR1ynHntZdqHnwXKTaOm1s6V9fExqejKvg5XMawEMToW4sSw+3jtLrYfZPijvnwnnE8Uol1O9BcAskoxgec+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </body>
</html>


