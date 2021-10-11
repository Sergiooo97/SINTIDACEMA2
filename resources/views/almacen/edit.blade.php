@extends('layouts.app')
<style>
    .lablel-create {
        font-size: 17px !important;
    }

    .col-create {
        padding: 0.4em;
    }

</style>
@section('content')

    <!--contenido de la tabla-->
    <div class="col-md-7 formulario text-center container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-12">
                <div class="content-center text-center">
                    <div class="card text-dark bg-light mb-3 border-dark mb-5">
                        <div class="card-header ">
                            <h5 class="card-title">Editar datos</h5>

                        </div>

                        <div class="card-body">
                            <div class="form-group">
                               <form action="{{ route('almacen.update',['id'=> $data->id ])}}" method="POST">
                                @csrf
                                @method('PATCH')
                             
                                    <div class="row">
                                        <div class="col-sm col-create">
                                            <label class="lablel-create">id de partida</label>
                                        </div>
                                        <div class="col-sm col-create">
                                            <input class="form-control" type="text" name="id_partida" value="{{ $data->id_partida }}">
                                        </div>
                                    </div>
                                    <div class="row">
                                      
                                        <div class="col-sm col-create">
                                            <label class="lablel-create">Numero de orden</label>
                                        </div>
                                        <div class="col-sm col-create">
                                            <input class="form-control" type="text" name="numero_orden" value="{{ $data->numero_orden }}">
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Lugar de entrega</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="lugar_entrega" value="{{ $data->lugar_entrega }}">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">N partida</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="N_partida" value="{{ $data->N_partida }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Cantidad</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="cantidad" value="{{ $data->cantidad }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Unidad</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="unidad" value="{{ $data->unidad }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Grupos</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="grupos" value="{{ $data->grupos }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Partes</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="partes" value="{{ $data->partes }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Descripcion</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="descripcion" value="{{ $data->descripcion }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Fecha de entrada</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="date" name="fecha_entrada" value="{{ $data->fecha_entrada }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Fecha de salida</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="date" name="fecha_salida" value="{{ $data->fecha_salida }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Precio</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="precio" value="{{ $data->precio }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Importe</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="importe" value="{{ $data->importe }}">
                                    </div>
                                </div>
                                <button class="btn btn-success">Actualizar datos</button>
                            </form>
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


@endsection
