<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daily WOD Tracker</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    @yield('css')
    <style>
      body {
          padding-bottom: 50px;
          background-image:url('/images/backgrounds/crossfit6.jpg');
          background-size: cover;``
        }
     .bottom{
          color:white;
        }
      h2{
        color:white;
      }
      h1{
        color:white;
      }
      h3{
        color:white;
      }
      p{
        color:white;
      }
      p.mod{
        color:black;
      }
      label{
        color:white;
      }
      label.register{
        color:black;
      }
      h10{
        color:white;
      }
      .btn-link{
        color:black;
      }
      .list-group-item{
        background-color: transparent;
        border: 0px;
        padding: 3px;
      }
      .btn{
        border: 1px solid white;
      }
      .btn-user{
        width: 100%;
      }
      .btn-default{
        color:white;
      }
      .black{
        color:black;
      }
      .btn:hover{
        background-color: white;
        color: black;
      }
      .btn-primary.focus, .btn-primary:focus{
        background-color: black;
      }
      .col-sm-2{
        padding-bottom: 20px;
      }
      .becnmark-btn{
        margin-bottom: 10px;
      }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <div class="mainbar">
                      <a class="navbar-brand" href="{{ url('/profile') }}">
                          Profile
                      </a>
                      <a class="navbar-brand" href="{{ url('/wod/create') }}">
                          Add WOD
                      </a>
                      <a class="navbar-brand" href="{{ url('/wod') }}">
                          All WODs
                      </a>
                      <a class="navbar-brand" href="{{ url('/search') }}">
                          Users
                      </a>
                      <a class="navbar-brand" href="{{ url('/benchmark') }}">
                          Benchmarks/PRs
                      </a>
                      <!--
                      <a class="navbar-brand" href="{{ url('/forums') }}">
                            Forums
                        </a> -->
                      <a class="navbar-brand" href="{{ url('/contact') }}">
                        Contact
                      </a>
                  </div>




                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="{{ url('/profile') }}">
                                            Profile
                                        </a>
                                        <a href="{{ url('/wod/create') }}">
                                            Add WOD
                                        </a>
                                        <a href="{{ url('/wod') }}">
                                            All WODs
                                        </a>
                                        <a href="{{ url('/search') }}">
                                            Users
                                        </a>
                                        <a href="{{ url('/benchmark') }}">
                                            Benchmarks/PRs
                                        </a>
                                        <a href="{{ url('/contact') }}">
                                          Contact
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <footer>
      <nav class="navbar-inverse navbar-fixed-bottom">
        <div class="container" align="center">
          <h5><a class="bottom" href="/contact">© Brad Goldsmith 2017 ©</a></h5>
        </div>
      </nav>
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')

</body>
</html>
