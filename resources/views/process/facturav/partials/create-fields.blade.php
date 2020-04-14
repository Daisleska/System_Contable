
<div class="row">
 <table style="margin-left: 1cm; margin-right: 1cm;" id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>

            
                             <tr>
                                <th>Fecha</th>
                                <th><input style="width: 160px;"  type="date" name="fecha" class="form-control"  value="<?php echo date("Y-m-d");?>" disabled="disabled" required></th>


                                <?php 

                                use App\facturav;

                                $factura=DB::table ('facturav')->select('id')->take(1)->orderBy('id', 'desc')->get();


                            ?>

                             
                                
                                <th>N° Factura</th>
                                <th><input style="width: 160px;" disabled="disabled" type="text" name="n_factura" class="form-control" value="000<?php  echo e(count($factura)+1); ?>"></th>


                          
                            </tr>
                           
                                
                            <tr>

                               

                                <th>RUF</th>
                                <th><input style="width: 200px;"  type="text" id="ruf" name="rut" class="form-control"  value=""> 
                             
                    <small><span id="mensaje" style="color:red"></span></small>
                                </th>
                         
                                

                            </tr>


                            <tr>
                                <th>Nombre</th>
                                <th><input style="width: 350px;" type="text" id="nomb" name="nombre" disabled="disabled" class="form-control"  value="" ></th>

                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <th><input style="width: 350px;" type="text" name="direccion" id="dir" disabled="disabled" class="form-control"  value=""></th>
                            </tr>
                            <tr>
                                <th>Teléfono</th>
                                 <th><input style="width: 350px;" type="text" name="telefono" disabled="disabled" class="form-control"  value=""></th>
                            </tr>
                            <tr>
                                <th>Correo</th>
                                <th><input style="width: 350px;" type="email" name="email" disabled="disabled" class="form-control"  value=""></th>


                            </tr>
                          
                        </tbody>
                </table>


</div>
<div class="row">

     <table style="margin-left: 1cm; margin-right: 1cm;" id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Domicilio</th>
                                <th><input style="width: 150px;" type="text" name="domicilio" class="form-control"  value="" required></th>
                                <th>Forma de pago</th>
                                <th><input style="width: 150px;" type="text" name="f_pago" class="form-control"  value=""></th>
                            

                            
                            </tr>
                        </thead>
                    
                </table>
</div>

<div class="row">
       <table style="margin-left: 1cm; margin-right: 1cm;" id="tablaprueba" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción del producto</th>
                                <th>Cantidad</th>
                                <th>Valor de unidad</th>
                                <th>Importe</th>
                                <th>Agregar</th>
                              

                            
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                           
                <tr>
                  <td><input style="width: 100px;" type="text" name="codigo"  class="form-control"  value=""></td>
                  <td><input style="width: 180px;" type="text" name="nombre" disabled="disabled" class="form-control"  value=""></td>
                  <td><input style="width: 100px;" type="text" name="cantidad" class="form-control"  value=""></td>
                  <td><input style="width: 100px;" type="text" name="precio" disabled="disabled" class="form-control"  value=""></td>
                  <td><input style="width: 100px;" type="text" name="importe" disabled="disabled" class="form-control"  value=""></td>

                  <td><button onclick="agregarFila()" type="button" class="btn btn-info btn-sm">+</button>
            
                  

                  </td>
                
                </tr>

    </tbody>
  </table>
</div>

<div class="row">
       <table style="margin-left: 1cm; margin-right: 1cm;"  class="table dt-responsive nowrap">
                        <thead>


                <tr>
                    
                    <td COLSPAN="2" style="text-align: right;"><strong>CANTIDAD DE ARTÍCULOS</strong>
                    <td><input style="width: 100px;" type="text" name="ruf" disabled="disabled" class="form-control"  value=""></td>
                    <td><strong style="text-align: left;">SUBTOTAL</strong></td>
                    <td><input style="width: 100px;" type="text" name="ruf" disabled="disabled" class="form-control"  value=""></td>
                    <td></td>
                    

                    
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="left"><strong>DOMICILIO</strong></td>
                    <td><input style="width: 100px;" type="text" name="ruf" disabled="disabled" class="form-control"  value=""></td></td>
                    <td></td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="left"><strong>TOTAL</strong></td>
                    <td><input style="width: 100px;" type="text" name="ruf" disabled="disabled" class="form-control"  value=""></td></td>
                    <td></td>
                </tr>
             
                          
                        </tbody>

                </table>  



                    
                    <button style="margin-left: 1cm;" class="btn btn-primary" type="submit">Guardar</button>
  
</div>


<script>
function agregarFila(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td><input style="width: 100px;" type="text" name="codigo" class="form-control"  value=""></td><td><input style="width: 180px;" type="text" name="nombre" disabled="disabled" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="cantidad" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="precio" disabled="disabled" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="importe" disabled="disabled" class="form-control"  value=""></td><td><button onclick="eliminarFila()" type="button" class="btn btn-danger btn-sm">-</button></td>';
}

function eliminarFila(){
  var table = document.getElementById("tablaprueba");
  var rowCount = table.rows.length;
  //console.log(rowCount);
  
  if(rowCount <= 1)
    alert('No se puede eliminar el encabezado');
  else
    table.deleteRow(rowCount -1);
}

 </script>


<script src="{{ URL::asset('js/feather.min.js')}}"></script>
<script src="{{ URL::asset('js/jquery/dist/jquery.js')}}"></script>


<script>

feather.replace();

      $("#ruf").on('keyup',function (event) {
        //asignar evento a la variable ruf
        var ruf = event.target.value;
   // aignar el valor de ruf a la variable $cliente
    var cliente=$("#ruf").val();
    //si cliente es mayor que 0
    if(cliente>0){
    //envio de datos a la ruta en web
    $.get('/clientes/'+cliente+'/buscar_cliente',function(data){
      //resive el valor data de lo consultado en el controlador

      // asignar a la variable result el valor de data
      var result = data;

    /*  console.log(result);*/

    //si result es menor o igual a 0 mostrar ese  mensaje
      if (result<=0) {
        $("#mensaje").text('Los datos no existen en el registro');
      } else {
        //sino muestra mensaje vacio
        $("#mensaje").text('');
        //en el campo nombre ingresar el valor del array nombre
        $('#nomb').val(result[0].nombre);
        //en el campo direccion ingresar el valor del array direccion
        $('#dir').val(result[0].direccion);
      }
    });
    }
  });


    </script>