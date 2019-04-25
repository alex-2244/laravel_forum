<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!--fas fa icon link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Toastr css -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet">
    {{--  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">  --}}

    <!-- ADMIN STYLE LINKS -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}"> --}}
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/charts/chartist-bundle/chartist.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/charts/c3charts/c3.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}"> --}}
</head>
<body>
    <div id="app" class="dashboard-main-wrapper">
        {{--  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  --}}
        <nav class="navbar navbar-expand-lg bg-white fixed-top" style="background-color: #0052CC;padding: 0px;">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home') }}" style="font-weight: 100 !important;">
                  {{ config('app.name', 'Laravel') }}
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                    <li class="nav-item">
                        <a class="nav-link" style="color:black !important;" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" style="color:black !important;" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" style="color:black !important;text-transform: capitalize;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                              <span> <i class="fas fa-fw fa-power-off"></i> </span>&nbsp;{{ __('Logout') }}
                          </a>


                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          </div>
                      </li>
                  @endguest
                </ul>
              </div>
            </div>
          </nav>
          <!-- NAV ENDS -->
          @if (Auth::check())
            {{-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding-left: 0px;"> --}}
                    {{-- <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="list-group-item">
                          <a href="{{ route('categories') }}">Categories</a>
                        </li>
                        @if (Auth::user()->admin)
                            <li class="list-group-item">
                                <a href="{{ route('user.create') }}">New User</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('users') }}">Users</a>
                            </li>
                        @endif
                        <li class="list-group-item">
                            <a href="{{ route('user.profile') }}">My Account</a>
                        </li>
                        <li class="list-group-item">
                          <a href="{{ route('tags') }}">Tags</a>
                        </li>
                        <li class="list-group-item">
                          <a href="{{ route('tag.create') }}">Create Tag</a>
                        </li>
                        <li class="list-group-item">
                          <a href="{{ route('category.create') }}">Create new categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('posts') }}">All Posts</a>
                        </li>
                        <li class="list-group-item">
                          <a href="{{ route('post.trashed') }}">All Trashed</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('post.create') }}">Create new post</a>
                        </li>
                    </ul> --}}
              <div class="nav-left-sidebar sidebar-dark">
                <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                          Menu
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-fw fa-home"></i> Home</a>
                        </li>
                        {{--  <li class="nav-item">
                          <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-bookmark"></i>Tags</a>
                          <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                  <a class="nav-link" href="#"></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#"></a>
                              </li>
                            </ul>
                          </div>
                        </li>  --}}


                        <li class="nav-divider">
                            Features
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Channels</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('channels.create') }}">Create Channels</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('channels.index') }}">All Channels</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="{{ route('channels.index') }}" data-toggle="collapse" aria-expanded="false" data-target="#channels">Created Channels</a>
                                        <div id="channels" class="collapse submenu">
                                            <ul class="nav flex-column">
                                                @foreach ($channels as $channel)
                                                    <li>{{ $channel->title }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                      </ul>
                    </div>
                  </nav>
                </div>
              {{-- </div> --}}
            {{-- </div> --}}
         @endif


  </div>

        {{--  <main class="py-4">
            @yield('content')
        </main>  --}}
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('js/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('success'))
            toastr.success(" {{ Session::get('success') }} ")

        @elseif(Session::has('info'))
        toastr.info("{{ Session::get('info') }}")

        @elseif(Session::has('error'))
            toastr.error("{{ Session::get('error') }}")
        @endif
    </script>


    {{--  <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>  --}}
    <!-- bootstap bundle js -->
    {{-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script> --}}
    <!-- slimscroll js -->
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    {{--  <script src="{{ asset('assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>  --}}
    <!-- sparkline js -->
    {{--  <script src="{{ asset('assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>  --}}
    <!-- morris js -->
    {{--  <script src="{{ asset('assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>  --}}
    {{--  <script src="{{ asset('assets/vendor/charts/morris-bundle/morris.js') }}"></script>  --}}
    <!-- chart c3 js -->
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/c3.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/charts/c3charts/C3chartjs.js') }}"></script> --}}
    <script src="{{ asset('assets/libs/js/dashboard-ecommerce.js') }}"></script>
</body>
</html>
