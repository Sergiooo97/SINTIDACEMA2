<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie-edge"> -->
    <!-- BOOTSTRAP -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"
    
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--ionicons-->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <!--jquery-->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->
    <!--javascript de jquery-->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <!-- <script src="../js/script.js"></script> -->
    <!--plugin-->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <!--estilos-->
    <link href="../Css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../Css/recur.css" rel="stylesheet">
    <title>Sistindacema TMX</title>
    <link rel="icon" type="image/png" href="../imagen/otro.png">
    <style>
        * {
            padding: 0;
            margin: 0;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        :root {
            --color-bg-btn: #0062cc;
            --color-bg-btn-hover: #0062aa;
            --color-shadow-btn-active: rgba(0, 0, 0, .3);
            --color-border-field: rgb(200, 200, 200);
        }

        .input-file {
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .input-file__input {
            display: none;
        }

        .input-file__field,
        .input-file__btn {
            display: inline-block;
            height: 34px;
            border-radius: 17px;
            padding: 6px 12px;
        }

        .input-file__btn {
            background-color: var(--color-bg-btn);
            color: #fff;
            line-height: 22px;
            width: 170px;
            text-align: center;
            cursor: pointer;
        }

        .input-file__btn:hover {
            background-color: var(--color-bg-btn-hover);
        }

        .input-file__btn:active {
            /* -webkit-box-shadow: 0 3px 5px var(--color-shadow-btn-active) inset; */
            box-shadow: 0 3px 5px var(--color-shadow-btn-active) inset;
        }

        .input-file__field {
            border: 1px solid var(--color-border-field);
            width: calc(100% - 182px);
            margin-right: 12px;
            line-height: 20px;
            white-space: nowrap;
            overflow-x: hidden;
            text-overflow: ellipsis;
        }

        .input-file--reverse .input-file__field {
            /* -webkit-box-ordinal-group: 2; */
            /* -ms-flex-order: 1; */
            order: 1;
            margin-right: 0;
            margin-left: 12px;
        }

        @media screen and (max-width: 575px) {
            .input-file__field {
                width: 100%;
                margin-right: 0;
                margin-bottom: 6px;
            }

            .input-file--reverse {
                /* -webkit-box-pack: start; */
                /* -ms-flex-pack: start; */
                justify-content: flex-start;
            }

            .input-file--reverse .input-file__field {
                order: 0;
                margin-left: 0;
                /* -webkit-box-ordinal-group: 1; */
                /* -ms-flex-order: 0; */
            }
        }

    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="../imagen/otro.png" height="55px">
                </div>
                <div class="sidebar-brand-text mx-2">SISTINDACEMA TMX</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item_active ml-3">
                <a class="nav-link" href="../vistas/home.php">
                    <i class="icon ion-md-home"></i>
                    <span>INICIO</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Altas y bajas de materiales
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item ml-3 pb-1">
                <a class="nav-link" href="../vistas/recursos-home.php">
                    <i class="icon ion-md-people"></i>
                    <span>Ver Materiales</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Heading -->
            <div class="sidebar-heading">
                Reportes
            </div>
            <!-- Nav Item - Tables -->
            <li class="nav-item ml-3 pb-1">
                <a class="nav-link" href="../vistas/nomina.php">
                    <i class="icon ion-md-folder"></i>
                    <span>Ver Reportes</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-4 static-top shadow"  style="background:rgb(224, 20, 20);">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        @if (Auth::check())
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name  }}</span>
                                <img class="img-profile rounded-circle" src="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../vistas/home.php">
                                    <i class="icon ion-md-home"></i>
                                    Inicio
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../vistas/perfiladmin.php">
                                    <i class="icon ion-md-person"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../controladores/cerrar_sesion.php">
                                    <i class="icon ion-md-power"></i>
                                    Cerrar Sesión
                                </a>
                            </div>
                        </li>
                        @endif
                    </ul>
                </nav>
                <!-- End of Topbar -->

                <main class="py-4">
                    @yield('content')
                </main>

            </div>
        </div>
    </div>
    <script>
        $(function() {
            $('.input-file__input').on('change', function() {
                $(this).prev().text($(this)[0].files[0] ?
                    $(this)[0].files[0].name :
                    $(this).prev().text());
            })
        })
    </script>
    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>
