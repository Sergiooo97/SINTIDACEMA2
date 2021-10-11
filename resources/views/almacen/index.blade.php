@extends('layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

<style>
    td {
        font-size: 12px;
    }

    th {
        font-size: 12px;
    }

</style>
@section('content')

    <!--contenido de la tabla-->
    <div class="col-md-12 formulario text-center">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12">
                <div class="content-center text-center">
                    <div class="card text-dark bg-light mb-3 border-dark mb-5">
                        <div class="card-header ">
                            <h5 class="card-title">Tabla de materiales</h5>

                        </div>

                        <div class="card-body">
                            <a href="{{ route('almacen.create') }}" class="btn btn-success pull-right  ">Agregar nuevo</a>

                            <!-- <div class="d-md-flex justify-content-md-end">
                                                                            <a href="../vistas/crear-nomina.php"><button class="btn btn-primary text-white ingresar" style="margin-top: 10px;" type="button"><i class="icon ion-md-person"></i> Nuevo datos</button></a>
                                                                        </div> -->
                            <form action="{{ route('almacen.index') }}" method="GET" class="form-inline pull-right "
                                role="search">

                                <label for="grupo"> Grupos: </label>
                                <select name="grupo" class="form-control" id="grupo" onchange="this.form.submit();  ">
                                    <option value="">Seleccionar</option>
                                    <option value="HERRAMIENTA">Herramientas</option>
                                    <option value="servicios">Servicios</option>
                                    <option value="">Grupos</option>

                                </select>
                                {{-- <label for="nombres">Buscar:</label>
                                <input value="{{ request('nombres') }}" name="nombres" id="nombres"
                                    class="form-control" /> --}}

                            </form>

                            <table id="table" class="display table-responsive table-hover table-bordered"
                                style="text-align:center">
                                <thead>
                                    <tr>
                                        <th>umero orden</th>
                                        <th>Lugar de entrega</th>
                                        <th>Id de partida</th>
                                        <th>Catidad</th>
                                        <th>Unidad</th>
                                        <th>Descripcion</th>
                                        <th>Fecha de entrada</th>
                                        <th>Fecha de salida</th>
                                        <th>Precio</th>
                                        <th>importe</th>
                                        <th>Editar</th>
                                        <th>Reporte</th>
                                        <th>Eliminar</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $d)

                                        <tr>
                                            <td>{{ $d->numero_orden }}</td>
                                            <td>{{ $d->lugar_entrega }}</td>
                                            <td>{{ $d->id_partida }}</td>
                                            <td>{{ $d->cantidad }}</td>
                                            <td>{{ $d->unidad }}</td>
                                            <td>{{ $d->descripcion }}</td>
                                            <td>{{ $d->fecha_entrada }}</td>
                                            <td>{{ $d->fecha_salida }}</td>
                                            <td>{{ $d->precio }}</td>
                                            <td>{{ $d->importe }}</td>

                                            <td><a href="{{ route('almacen.edit', ['id' => $d->id]) }}"
                                                    class="btn btn-success"><i class="nc-icon nc-zoom-split"></i></a></td>

                                            <td><a href="{{ route('reportes.individual', ['id' => $d->id, 'id_partida' => $d->id_partida]) }}"
                                                    class="btn btn-warning"><i class="nc-icon nc-tile-56"></a></td>

                                            <td>
                                                {{-- <form method="POST" action="{{ url("almacen/delete/{$d->id_partida}") }}"
                                                    id="form" name="form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit" onclick="confirmAlert()">
                                                        <i class="nc-icon nc-simple-remove">
                                                    </button>
                                                </form> --}}

                                                {{-- !-- Delete Warning Modal --> --}}
                                                <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('almacen.delete.modal', $d->id) }}" title="Delete Project">
                                                    <i class="fas fa-trash text-danger  fa-lg"></i>
                                                </a>
                                            </td>
                                        </tr>


                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <p id="mensaje" class="alert" role="alert">

        </p>
    </div>
    </div>
    </div>
    
    <!-- small modal -->
    <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="smallBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                    <div>
                        <!-- the result to be displayed apply here -->
                    </div>
                </div>
            </div>
        </div>
    </div>




<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });

</script>

@endsection
