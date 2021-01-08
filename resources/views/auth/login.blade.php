<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Seefood</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon CSS -->
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon.png">
    <!-- fonts -->
    <link href="fonts/sfuidisplay.css" rel="stylesheet">
    <!-- Icon fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <!-- Your CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="theme-orange" data-spy="scroll" data-target="#navbar-nav" data-appearance="light" data-animation="false" data-appearance="dark">
    <!-- =========== Start of Loader ============ -->
    {{-- <div class="preloader">
        <div class="wrapper">
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <div>
                <div class="loader-canvas canvas-left"></div>
                <div class="loader-canvas canvas-right"></div>
            </div>
        </div>
    </div> --}}
    <!-- =========== End of Loader ============ -->
    <div id="app">
        <!-- =========== Start of Navigation (main menu) ============ -->
        <header class="navbar navbar-expand-lg navbar-dark">
            <div class="container position-relative">
                <a class="navbar-brand" href="#">
                    <img class="navbar-brand__regular" src="assets/img/brand-logo.png" alt="brand-logo">
                    <img class="navbar-brand__sticky" src="assets/img/brand-logo.png" alt="sticky brand-logo">
                </a>
                <!--  End of brand logo -->
                <div>
                    <a href="https://play.google.com/store/apps/details?id=com.codylab.seefood&hl=en" class="btn btn-size--md btn-hover--3d btn-bg--cta--4" style="background-color: #FED136;"><span class="btn__text">Download Now</span></a>
                </div>
                <!-- end of nav CTA button -->
            </div>
            <!-- end of container -->
        </header>
        <!-- =========== End of Navigation (main menu)  ============ -->
        

        <main class="main hidden">
            <section class="space section--dark bg-color--dark--1 h-min-100vh d-flex align-items-center">
                <div class="svg-shape--top w-100 opacity--05">
                    <img src="assets/img/layout/wave-8.svg" alt="wave" class="svg fill--white">
                </div>
                <!-- end of whole area svg bg -->
                <div class="svg-shape--top opacity--10">
                    <img src="assets/img/layout/wave-9.svg" alt="wave" class="svg fill--white">
                </div>
                <!-- end of top right mini svg shape -->
            
                <div class="container">
                    <div class="row ">
                        {{-- <div class="card-header">{{ __('Login') }}</div> --}}
                        <div class="col-12 mx-auto color--white text-center mb-4 mb-lg-5">
                            <h1 class="h2-font mb-1">Welcome Back</h1>
                            <p class="opacity--80 font-size--20">Sign in to scan your delicious food!</p>
                        </div>
                        <div class="col-12 col-sm-10 col-md-8 col-lg-7 col-xl-6 mx-auto">
                            
                            <div class="form--v5 color--black bg-color--primary-light--1 px-3 py-4 px-md-5 pt-md-6 rounded--10">
                                <form method="POST" action="{{ route('login') }}" class="form">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email" class="form__label text-uppercase font-size--15 font-w--500" {{ __('E-Mail Address') }} style="color: #12141f;">Email Address</label>
                                        <input id="email" type="email" class="form-control" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address" />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label for="password" class="form__label text-uppercase font-size--15 font-w--500" {{ __('Password') }} style="color: #12141f;">Password</label>
                                            @if (Route::has('password.request'))
                                                <a class="nav-link font-size--12 font-w--500" style="color: #FED136" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                            
                                        </div>
                                        <input id="password" type="password" class="form-control" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Choose a password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            {{-- <label class="custom-control-label text-color--400" for="remember">Remember Me</label> --}}
                                            </div>
                                        </div>
                                        <!-- <button href="index.html" class="btn btn-bg--primary btn-size--md btn-hover--3d" style="background-color: #FED136;"><span class="btn__text" >Log in</span></button> -->
                                        {{-- <a class="btn btn-bg--primary btn-size--md btn-hover--3d" style="background-color: #FED136;"><span class="btn__text">{{ __('Login') }}</span></a> --}}
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary" style="background-color: #FED136;">
                                                    {{ __('Login') }}
                                                </button>
                
                                                @if (Route::has('password.request'))
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{-- {{ __('Forgot Your Password?') }} --}}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end of form -->
                                <div class="text-center border--top">
                                    <p class="nav-link text-color--400">Don't have an account? <a href="{{ route('register') }}" style="color: #FED136;">{{ __('Register') }}</a></p>
                                </div>
                                 
                                <!-- end of bottom text -->
                            </div>
                            <!-- end of from area -->
                        </div>
                        <!-- end of col -->
                    </div>
                    <!-- end of row -->
                </div>
        </main>
    </div>
</body>
</html>



{{-- @section('content')

@endsection --}}
