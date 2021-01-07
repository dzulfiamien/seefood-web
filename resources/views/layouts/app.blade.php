<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SeeFood') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="/fonts/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/fonts/sfuidisplay.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-transparent navbar-expand-lg fixed-top bg-dark" ifd="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img class="navbar-brand__regular" src="assets/img/brand-logo.png" alt="brand-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Center Side Of Navbar -->
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto text-uppercase">
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                href="#services">Services</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                href="#features">Features</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                href="#portfolio">Portfolio</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                href="#about">About</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" 
                            href="#team">Team</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                                href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- Left Side Of Navbar -->
                <div class="collapse navbar-collapse d-flex align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link ml-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead" style="background-image: url('assets/img/header-makehotdog1.jpg');">
            <section id="section-download" class="section section-download section--dark bg-size-cover">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 mx-auto">
                            <img src="assets/img/front.png" class="img-responsive hidden-xs">
                        </div><!-- /col-sm-6 -->
                        <div class="col-sm-6 mt-5">
                            <h1 class="text-center mt-5 mb-3">
                                <span class="block">Download Seefood</span>
                                App Now!
                            </h1>
                            <div class="dl--well clearfix">
                                <div class="dl--qr-code">
                                    <span class="weight-bold block center-margin-sm mr-2">Scan QR Code </span>
                                    <img class="img-responsive img--qr-code" src="assets/img/qr.png" style="width: 20%;">
                                </div><!-- /dl--qr-code -->
    
                            </div><!-- /dl--well -->
                        </div>
                    </div><!-- /row -->
                </div><!-- /container -->
            </section>
        </header>
        
        @yield('content')
        
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4"><span class="copyright">Copyright&nbsp;© SeeFood 2020</span></div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <h2 class="text-uppercase">Pied Piper</h2>
                                        <p class="item-intro text-muted">Company</p><img
                                            class="img-fluid d-block mx-auto"
                                            src="assets/img/portfolio/pied_piper_full.jpg">
                                        <p>Pied Piper is a startup company focused on "multi-platform technology based on a proprietary universal compression algorithm". In Success Failure the company was split up betweens Richard's compression algorithm and Dinesh's video chat called Piper Chat. Dinesh was CEO for 11 Days until Gavin Belson acquired it.</p>
                                        <ul class="list-unstyled">
                                            <li>taken:January 2017</li>
    
    
                                        </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                                class="fab fa-times"></i><span>&nbsp;Close</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal2">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <h2 class="text-uppercase">Hooli</h2>
                                        <p class="item-intro text-muted">Company</p><img
                                            class="img-fluid d-block mx-auto" src="assets/img/portfolio/hooli_full.jpg">
                                        <p>Hooli is an international corporation founded by Gavin Belson and Peter Gregory. It represents everything that Richard doesn't want Pied Piper to be.</p>
                                        <ul class="list-unstyled">
                                            <li>taken:January 2017</li>
    
    
                                        </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                                class="fab fa-times"></i><span>&nbsp;Close</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade portfolio-modal text-center" role="dialog" tabindex="-1" id="portfolioModal3">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                        <h2 class="text-uppercase">Techcrunch Disrupt</h2>
                                        <p class="item-intro text-muted">Conference</p><img
                                            class="img-fluid d-block mx-auto"
                                            src="assets/img/portfolio/techcrunch_disrupt_full.jpg">
                                        <p>TechCrunch Disrupt is an annual conference in San Francisco, New York City, London, and Beijing. It allows tech startups to promote their products/services to potential investors.</p>
                                        <ul class="list-unstyled">
                                            <li>taken:January 2017</li>
    
    
                                        </ul><button class="btn btn-primary" data-dismiss="modal" type="button"><i
                                                class="fab fa-times"></i><span>&nbsp;Close</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/js/agency.js"></script>
    </div>
</body>
</html>
