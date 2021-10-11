<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style="background-color:  #E01414 ;"   colspan="12" ></th>
                <th style="background-color:  #E01414 ; text-align:center;"></th>
        
              </tr>
              <tr>
                <th style="background-color:  #E01414 ; text-align:center;  color:#ffffff;"  colspan="12 " >SISTINDACEMA TMX</th>
                <th style="background-color:  #E01414 ; text-align:center;"></th>
        
        
              </tr>
              
              <tr>
                <th style="background-color:  #E01414 ; text-align:center;" colspan="13"></th>
              </tr>
         
              <tr >
                <th style="background:  #940f0f; color:#ffffff;">Numero orden</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Lugar de entrega</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Id de partida</th>
                <th  style="background:  #940f0f; color:#ffffff;" >N_partida</th>

                <th  style="background:  #940f0f; color:#ffffff;" >Catidad</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Unidad</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Grupos</th>
                <th  style="background:  #940f0f; color:#ffffff;" >partes</th>

                <th  style="background:  #940f0f; color:#ffffff;" >Descripcion</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Fecha de entrada</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Fecha de salida</th>
                <th  style="background:  #940f0f; color:#ffffff;" >Precio</th>
                <th  style="background:  #940f0f; color:#ffffff;" >importe</th>
             

            </tr>
    
        </thead>
        <tbody>
            @foreach ( $materiales as $d )
            <tr>
                <td>{{ $d->numero_orden }}</td>
                <td>{{ $d->lugar_entrega }}</td>
                <td>{{ $d->id_partida }}</td>
                <td>{{ $d->N_partida }}</td>
                <td>{{ $d->cantidad }}</td>
                <td>{{ $d->unidad }}</td>
                <td>{{ $d->grupos }}</td>
                <td>{{ $d->partes }}</td>
                <td>{{ $d->descripcion }}</td>
                <td>{{ $d->fecha_entrada }}</td>
                <td>{{ $d->fecha_salida }}</td>
                <td>{{ $d->precio }}</td>
                <td>{{ $d->importe }}</td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</body>
</html>