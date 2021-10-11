@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="col-md-12 formulario">
        <form action="../controladores/updateperfil.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-4">



                    <div class="card card-info">
                        <div class="card-header">
                          <h5 class="card-title">Foto de perfil</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group text-center pt-0">
                                <img src="{{ asset('img/yo2.jpg') }}" class="rounded mx-auto d-block" height="200px">
                                <!--<h1 class="text.light"> Crear Cuenta</h1>-->
                            </div>
                        </div>
                        <div class="card-footer">
                          <div class="chart-legend">
                          </div>
                          <hr />
                          <div class="card-stats">
                            <div class="input-file input-file--reverse">
                                <label for="" class="input-file__field"></label>
                                <input type="file" id="file3" class="input-file__input" name="archivo" accept="image/*">
                                <label for="file3" class="input-file__btn"><i class="icon ion-md-images mr-2 lead"></i>Subir
                                    Archivo</label>
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
                <div class="col-sm-8">

                    <div class="card card-info">
                        <div class="card-header">
                          <h5 class="card-title">Perfil del administrador</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-person mr-2 lead"></i>Nombre del
                                    usuario:</span>
                                <input name="nomUser" class="form-control" type="text" value="" required>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-person mr-2 lead"></i>Nombres y
                                    Apellidos:</span>
                                <input name="nombre" class="form-control" type="text" value="" required>
                                </p>
                            </div>
                            <div class="col-lg-12">
                                <span class="txtnombre"><i class="icon ion-md-call mr-2 lead"></i>Número de Celular:</span>
                                <input name="tel" class="form-control" type="tel" value="" required
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
                                    <button style="background: #28a745;" type="submit"  class="btn btn-success ingresar" >Guardar</button>
                                </div>
                                <div class="col-lg-3">
                                    <a  style="background: #dc3545;"  href="#" class="btn btn-danger ">
                                            Cancelar </a>
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
@endsection
