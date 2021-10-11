@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="col-md-12 formulario">
            <div class="row">
                <div class="col-sm-4">



                    <div class="card card-info">
                        <div class="card-header">
                          <h5 class="card-title">Foto de perfil</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group text-center pt-0">
                                <img  src="{{ \Illuminate\Support\Facades\Storage::url("".Auth::user()->img) }}" class="rounded mx-auto d-block" height="200px">
                                <!--<h1 class="text.light"> Crear Cuenta</h1>-->
                            </div>
                        </div>
                        <div class="card-footer">
                          <div class="chart-legend">
                          </div>
                          <hr />
                          <div class="card-stats">
                              <form action="{{ route('img.perfil')}}" method="post" enctype="multipart/form-data">
                            @csrf @method('PATCH')

                            <div class="input-file input-file--reverse">
                                <label for="" class="input-file__field"></label>
                                <input type="file" id="img" class="input-file__input" name="img" accept="image/*">
                                <label for="file3" class="input-file__btn"><i class="icon ion-md-images mr-2 lead"></i>Subir
                                    Archivo</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Subir</button>
                            </form>
                           
                          </div>
                        </div>
                      </div>

                </div>
                <div class="col-sm-8">
                    <form action="{{ route('update.perfil')}}" method="POST" id="form">
                        @csrf @method('PATCH')

                    <div class="card card-info">
                        <div class="card-header">
                          <h5 class="card-title">Perfil del administrador</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-person mr-2 lead"></i>Nombre del
                                    usuario:</span>
                                <input name="name" class="form-control" type="text" value="{{Auth::user()->name }}" required>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-person mr-2 lead"></i>Apellidos:</span>
                                <input name="apellidos" class="form-control" type="text" value="{{Auth::user()->apellidos }}" required>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-call mr-2 lead"></i>Número de Celular:</span>
                                <input name="telefono" class="form-control" type="tel" value="{{Auth::user()->telefono }}" required
                                    minlength="10" maxlength="10" required></p>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                          <div class="chart-legend">
                          </div>
                          <hr />
                          <div class="card-stats">
                            <div class="row justify-content-center">
                                <div class="col-lg-3">
                                    <button style="background: #28a745;" type="submit"  class="btn btn-success ingresar" onclick="confirmAlert()" >Guardar</button>
                                </div>
                                
                            </div>
                          </div>
                        </div>
                      </div>

                  
                </div>
            </div>
            <br>
            <div class="col-lg-12">
                
            </div>
        </form>
        
    </div>
    <!-- fin del contenido -->

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
              title: '¡Está seguro de realizar la actualizacion de datos?',
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
