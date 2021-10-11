@extends('layouts.app')
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<style>
    td{
        font-size: 12px;
    }
    th{
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
                            <h5 class="card-title">Generar reportes</h5>

                        </div>

                        <div class="card-body">


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
                                        <th>Fecha de entrega</th>
                                        <th>Fecha de salida</th>
                                        <th>Precio</th>
                                        <th>importe</th>
                                        <th>PDF</th>
                                        <th>EXCEL</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
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
                                            <td><a href="{{ route('reportes.individual.pdf', ['id' => $d->id, 'id_partida' => $d->id_partida ]) }}"
                                                    class="btn btn-danger">PDF</a></td>
                                            <td><a href="{{ route('reportes.individual', ['id' => $d->id, 'id_partida' => $d->id_partida ]) }}"
                                                    class="btn btn-success">EXCEL</a></td>
                                    @endforeach


                                </tbody>
                            </table>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{ route('reportes.general') }}" class="btn btn-success"> <i
                                                class="fa fa-file-excel-o" aria-hidden="true"></i>DESCARGAR EXCEL</a>
                                    </div>
                                    <div class="col-sm">
                                        <a href="{{ route('reportes.general.pdf') }}" class="btn btn-danger"><i
                                                class="fas fa-file-pdf"></i> DESCARGAR PDF</a>
                                    </div>
                                </div>
                            </div>
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

@endsection
