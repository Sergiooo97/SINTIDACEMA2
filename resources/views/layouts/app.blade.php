<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        SISTINDACEMA TMX
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="{{ asset('fonts/font-awesome.min.css') }}" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

    

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <style>

    </style>
</head>

<body class="">
  <div class=" wrapper ">
    <div class=" sidebar" data-color="white" data-active-color="danger">
    <div style="background: rgb(224, 20, 20) !important;" class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="{{ asset('imagen/otro.png') }}">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal" style="color: #ffffff;">
            SISTINDACEMA TMX
            <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>

    </div>
    <div style="background: rgb(224, 20, 20) !important;" class="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="{{url('/')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Inicio</p>
                </a>
            </li>
            <hr>
            <p style="margin-left:1em; color:#ffffff;">ALTAS Y BAJAS DE MATERIALES</p>
            <li>
                <a href="{{route('almacen.index')}}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Ver materiales</p>
                </a>
            </li>
            <hr>
            <p style="margin-left:1em; color:#ffffff;">REPORTES</p>
            <li>
                <a href="{{ route('almacen.reportes')}}">
                    <i class="nc-icon nc-paper"></i>
                    <p>Reportes</p>
                </a>
            </li>

        </ul>
    </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav style="background: rgb(224, 20, 20) !important;" class="navbar navbar-expand-lg navbar-absolute fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="javascript:;">SISTINDACEMA TMX</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">

                    <ul class="navbar-nav">

                        <li class="nav-item btn-rotate dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                                <img width="50px" class="img-profile rounded-circle" src="{{ \Illuminate\Support\Facades\Storage::url("".Auth::user()->img) }}">
                                <p>
                                    <span class="d-lg-none d-md-block">Some Actions</span>
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('home') }}">Inicio</a>
                                <a class="dropdown-item" href="{{ route('admin.perfil') }}">Perfil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Cerrar sesion</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">


            <main class="py-4">
                @yield('content')
            </main>

        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="" target="_blank">SISTINDACEMA</a></li>
                           
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="fa fa-heart heart"></i> by SISTINDACEMA
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>

@include('sweetalert::alert')
<script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>

</html>
