{{-- @include('layouts.FrontEndInc.header') --}}
<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <title>@yield('FrontTitle')</title>
    <meta name="title" content="@yield('title')">
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('Keyword')">
    <meta name="author" content="@yield('author')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#030303">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,700;1,300;1,500&family=Poppins:ital,wght@0,300;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="{{ asset('FrontEnd/css/styles.css?537a1bbd0e5129401d28') }}" rel="stylesheet">
</head>
    <body>
        @include('layouts.FrontEndInc.preload')
        <header class="bg-light">
            @include('layouts.FrontEndInc.nav-top')
            @include('layouts.FrontEndInc.nav-menu')
            @include('layouts.FrontEndInc.nav-side-menu-mobile')
        </header>
        <!-- End Header news -->
        {{-- @include('layouts.FrontEndInc.preload') --}}

        @yield('FrontEnd')

        <section class="wrapper__section p-0">
            <div class="wrapper__section__components">
                <!-- Footer -->
                <footer>
                    @include('layouts.FrontEndInc.footer')
                    @include('layouts.FrontEndInc.copyright')
                </footer>
            </div>
          </section>

    <a href="javascript:" id="return-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>
    <script type="text/javascript" src="{{ asset('FrontEnd/js/index.bundle.js?537a1bbd0e5129401d28') }}"></script>
  </body>
</html>


