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
                            <h5 class="card-title">Agregar dato</h5>

                        </div>

                        <div class="card-body">
                            <div class="form-group">
                               <form action="{{route('almacen.store')}}"  method="POST" id="form" name="form">
                                @csrf
                                
                              
                                @if (count($errors)>0)
                                <div id="ERROR_COPY" style="display: none;" class="alert alert-danger">
                                  @foreach ($errors->all() as $error)
                                  <ul>
                                    <li>
                                      {{ $error }}
                                    </li>
                                  </ul>
                                  @endforeach
                                </div>
                            @endif
                           
                                    <div class="row">
                                        <div class="col-sm col-create">
                                            <label class="lablel-create">id de partida</label>
                                        </div>
                                        <div class="col-sm col-create">
                                            <input class="form-control" type="text" name="id_partida" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                      
                                        <div class="col-sm col-create">
                                            <label class="lablel-create">Numero de orden</label>
                                        </div>
                                        <div class="col-sm col-create">
                                            <input class="form-control" type="text" name="numero_orden" required>
                                        </div>
                                    </div>

                                
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Lugar de entrega</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="lugar_entrega" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">N partida</label> 
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="N_partida" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Cantidad</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="cantidad" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Unidad</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="unidad" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Grupos</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="grupos" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Partes</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="partes" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Descripcion</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="descripcion" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Fecha de entrada</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="date" name="fecha_entrada" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Fecha de salida</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="date" name="fecha_salida" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Precio</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="precio" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm col-create">
                                        <label class="lablel-create">Importe</label>
                                    </div>
                                    <div class="col-sm col-create">
                                        <input class="form-control" type="text" name="importe" required>
                                    </div>
                                </div>
                                <button class="btn btn-success" onclick="confirmAlert()">Guardad datos</button>

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
    @include('sweetalert::alert')
<script src="{{asset('js/jquery-3.1.0.min.js')}}"></script>
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.7/dist/sweetalert2.all.min.js" integrity="sha256-2UHqQuWxFUpPFIsooOziz5fIn6wCyDgf3c9SthP8ZYk=" crossorigin="anonymous"></script>

    <script>
    
    
      var has_errors = {{$errors->count() > 0 ? 'true' : 'false'}};
    
      if( has_errors ){
        Swal.fire({
            title: '<strong>Oops.. :(</br> <p style="font-size: 20px;">Corregir los siguientes errores: </p>',
            type: 'errors',
            icon: 'error',
            html:jQuery("#ERROR_COPY").html(),
            showCloseButton: true,
    
          })
      }
    
   
function confirmAlert() {
event.preventDefault();
 let form = event.target;
        Swal.fire({
              title: '¡Está seguro de realizar el registro?',
              text: "Estás a tiempo de cancelar!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, registrar!'
            }).then((result) => {
              if (result.value) {
                document.getElementById("form").submit();
                if(form.submit()){
                  Swal.fire(
                  'Registro con éxito!',
                  'Ahora te mandaré a la lista :).',
                  'success'
                )
                }

              }
            })
   }
    </script>

@endsection
