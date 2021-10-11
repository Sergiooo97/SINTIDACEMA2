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
    @include('sweetalert::alert')
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <style>
        .main-panel2 {
    width: calc(100% );
    background-color: #f4f3ef;
    transition: all 0.5s cubic-bezier(0.685, 0.0473, 0.346, 1);
    padding: 6em;
}
    </style>
</head>

<body class="">
 
    <div class=" main-panel2">
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
                                <img width="40px" class="img-profile rounded-circle" src="{{ 'img/yo2.jpg' }}">
                            <p>
                                <span class="d-lg-none d-md-block">Some Actions</span>
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{ route('home')}}">Inicio</a>
                            <a class="dropdown-item" href="{{ route('admin.perfil') }}">Perfil</a>
                            <a class="dropdown-item" href="{{ route('logout')}}" >Cerrar sesion</a>

                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">


        <div class="container-fluid">
            <!-- Content Row -->
            <div class="container principal">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="row" style="margin-bottom: 8px;">
                            <!--tarjeta 1-->

                            <div class="col-lg-6 col-md-12 mb-4" style="margin-bottom: 15px;">
                                <div class="card-section border rounded ml-4 mr-4">
                                    <div style="background: rgb(224, 20, 20) !important;"  class="card-header card-header-second rounded">
                                        <h2 class="card-header-title mb-3 mt-1 text-white">Altas y bajas de
                                            materiales</h2>
                                    </div>
                                    <div class="card-body text-center">
                                        <img src="../imagen/entrada.png"
                                            onmouseover="this.src='../imagen/salida.png';"
                                            onmouseout="this.src='../imagen/entrada.png';"
                                            class="img-fluid" alt="Responsive image" />

                                        <hr>

                                        <!--<button href="../vistas/recursos.php" class="btn btn-lg btn-secondary">Ver Más</button>-->
                                        <a href="{{ route('almacen.index') }}" class="btn btn-success">ACCEDER</a>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js" integrity="sha256-2UHqQuWxFUpPFIsooOziz5fIn6wCyDgf3c9SthP8ZYk=" crossorigin="anonymous"></script>
<script>
  
        Swal.fire({
            title: '<strong>Hola!</br> <ul style="font-size:16px; margin-right: 1.7em;"><p>Bienvenido</p></ul>',
            type: 'success',
            icon: 'success',
            html: jQuery("#ERROR_COPY").html(),
            showCloseButton: true,

        })
    
</script>

</body>

</html>










