<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Css/login.css">
    <link rel="stylesheet" href="../Css/cuentas.css">
    <title>Sistindacema TMX</title>
    <link rel="icon" type="image/png" href="../imagen/otro.png">
    @include('sweetalert::alert')

</head>

<body style=" background-image: url({{ asset('imagen/login_bg.jpg') }});">

    <div class="container">

        <div class="row justify-content-center pt-4 mt-5 mr-3">
            <div class="col-md-4 formulario">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <img src="../imagen/logo.png" class="img-fluid" alt="Responsive image">
                    <div class="form-group text-center pt-0">
                        <h1 class="text.light"></h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                        <span class="usuario"><i class="icon ion-md-contacts mr-2 lead"></i>Dirección de correo
                            electrónico</span>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <script>
                                sweetAlert()
                                'Oops...',
                                'Something went wrong!',
                                'error'
                                )
                            </script>
                        @enderror</p>
                    </div>

                    <div class="form-group mx-sm-4 pb-3">
                        <span class="contraseña"><i class="icon ion-md-key mr-2 lead"></i>Contraseña</span>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <div class="alert alert-primary" role="alert">
                                {{ $message }}
                            </div>

                        @enderror
                        </p>
                    </div>

                    <div class="form-group mx-sm-3 pb-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="form-group mx-sm-4 text-right pt-0">

                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
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
    @include('sweetalert::alert')
    <script src="{{ asset('js/jquery-3.1.0.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js" integrity="sha256-2UHqQuWxFUpPFIsooOziz5fIn6wCyDgf3c9SthP8ZYk=" crossorigin="anonymous"></script>
    <script>
        var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};
        if (has_errors) {
            Swal.fire({
                title: '<strong>Error!</br> <ul style="font-size:16px; margin-right: 1.7em;"><li>Datos incorrectos</li></ul>',
                type: 'errors',
                icon: 'error',
                html: jQuery("#ERROR_COPY").html(),
                showCloseButton: true,

            })
        }

        function confirmAlert() {
            event.preventDefault();
            let form = event.target;
            Swal.fire({
                title: '¡Está seguro de realizar el deposito?',
                text: "Estás a tiempo de cancelar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, depositar!'
            }).then((result) => {
                if (result.value) {
                    document.getElementById("form").submit();
                    if (form.submit()) {
                        Swal.fire(
                            'Retiro con éxito!',
                            'Ahora te mandaré a la lista :).',
                            'success'
                        )
                    }

                }
            })
        }
    </script>

</body>

</html>
