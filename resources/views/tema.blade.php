<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Admin</title>
    <!-- Bootstrap Styles-->
    <link href="{{ asset('tema/assets/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('tema/assets/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('tema/assets/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">


    <!-- Custom CSS for blue theme and animations -->
    <style>
        /* Blue theme adjustments */
        .navbar, .navbar-default, .navbar-side, .sidebar-collapse {
            background-color: #1976D2;
            color: white;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5em;
        }

        .navbar-top-links .dropdown-user li a {
            color: #1976D2;
        }

        /* Sidebar styling */
        .navbar-side ul.nav li a {
            color: white;
            font-size: 1.1em;
            transition: all 0.3s ease;
        }

        .navbar-side ul.nav li a:hover,
        .navbar-side ul.nav li a.active-menu {
            background-color: #1565C0;
            color: #FFF;
            border-left: 4px solid #2196F3;
        }

        /* Header and Footer */
        h1.page-header {
            font-weight: bold;
            color: #1976D2;
            margin-bottom: 20px;
            animation: fadeInDown 0.6s ease;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            font-size: 1em;
            color: #1976D2;
        }

        /* Interactive animations */
        .navbar-default .navbar-toggle .icon-bar {
            background-color: white;
        }

        /* Content container animation */
        #page-inner {
            animation: fadeIn 0.8s ease;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Admin </a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                           <li><a href="{{ url('/') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                @yield('menu')
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">@yield('title')</h1>
                        @yield('content')
                    </div>
                </div>
                <footer><p>Universitas Bina Sarana Informatika &copy; 2024</p></footer>
            </div>
        </div>
    </div>

    <!-- JS Scripts-->
    <script src="{{ asset('tema/assets/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('tema/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('tema/assets/js/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('tema/assets/js/custom-scripts.js') }}"></script>
</body>
</html>
