
<div class="row">
 <table style="margin-left: 1cm; margin-right: 1cm;" id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>

          
                             <tr>
                                <th>Fecha</th>
                                <th><input style="width: 160px;" readonly="readonly"  type="date" name="fecha" class="form-control"  value="<?php echo date("Y-m-d");?>"  required></th>

              

     <?php 

                                use App\facturac;

                                $factura=DB::table ('facturac')->select('id')->take(1)->orderBy('id', 'desc')->first();

                                 if($factura) {
                            ?>

                                <th>N° Factura</th>
                                <th><input style="width: 100px;" type="text" readonly="readonly" name="n_factura" class="form-control" value="000<?php  echo $factura->id +1; ?>"></th>



                          
                            </tr>
                          <?php }else{
                            ?>
                                
                                <th>N° Factura</th>
                                <th><input style="width: 160px;" type="text" readonly="readonly" name="n_factura" class="form-control" value="0001"></th>

                                
                            </tr>
                            <?php
                          }?>          
                               
                            <tr>

                                <th>RUF</th>
                                <th><input style="width: 200px;"  type="text" id="ruf" name="ruf" class="form-control" ></th>
                                <small><span id="mensaje" style="color:red"></span></small>

                                 <th>N°control</th>
                                <th><input style="width: 160px;" type="number" name="n_control" class="form-control"  required></th>
                            </tr>


                            <tr>
                                <th>Nombre</th>
                                <th><input style="width: 350px;" type="text" id="nomb" readonly="readonly" name="nombre" class="form-control"  value=""></th>
                                <th colspan="2"></th>


                            </tr>
                            <tr>
                                <th>Dirección</th>
                                <th><input style="width: 350px;" type="text" id="dir" readonly="readonly"  class="form-control"  value=""></th><th colspan="2"></th>
                            </tr>
                            <input type="hidden" name="proveedores_id" id="proveedores_id">
                            
                          
                        </tbody>
                </table>


</div>
<div class="row">

     <table style="margin-left: 1cm; margin-right: 1cm;" id="basic-datatable" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Domicilio</th>
                                <th><input style="width: 150px;"  type="text" name="domicilio" id="domi" class="form-control"  value="" required></th>
                                <th>Forma de pago</th>
                                <th>
                            <select required="required" name="f_pago" data-plugin="customselect" class="form-control" data-placeholder="Elige">
                                  
                                  <option value="transferencia" selected="selected">Tranferencia</option>
                                  <option value="efectivo">Efectivo</option>
                                  <option value="cheque">Cheque</option>
                                </select></th>

                                <th>Divisa</th>
                                <th><select style="width: 50" name="divisas" class="form-control">
                                <option value="Bs.S">VEF</option>
                                <option value="£">GBP</option>
                                <option value="¥">JPY</option>
                               <option value="¥">CNY</option>
                               <option value="€">EUR</option>
                               <option selected="selected" value="$">USD</option>
     
                                </select></th>
                            

                            
                            </tr>
                        </thead>
                    
                </table>
</div>

<div class="row">
       <table style="margin-left: 1cm; margin-right: 1cm;" id="tablaprueba" class="table dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descripción producto</th>
                                <th>Cantidad</th>
                                <th>Valor de unidad</th>
                                <th>Importe</th>
                                <th>Agregar</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                           
                <tr>
                  <td><input style="width: 100px;" type="text"  id="cod" class="form-control"  value=""><small><span id="mensaje2" style="color:red"></span></small></td>
                  <td><input style="width: 180px;" type="text"  id="producto"  class="form-control"  value="" readonly="readonly"></td>
                  <td><input id="cantidad"  style="width: 100px;" type="number" name="cantidad" class="form-control" ><small><span id="mensaje3" style="color:red"></span></small></td>
                  <td><input id="precio" readonly="readonly" style="width: 100px;" type="text"  class="form-control"  value=""></td>
                  <td><input style="width: 100px;" type="text" name="importe" id="importe" readonly="readonly"  class="form-control"></td>
                  <input type="hidden" name="productos_id" id="productos_id">

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
                    <td><input id="Cant_art" style="width: 100px;" type="number" readonly="readonly" name="cantidad_articulos" class="form-control"></td>
                    <td><strong style="text-align: left;">SUBTOTAL</strong></td>
                    <td><input style="width: 100px;" id="sub_total" type="number" name="sub_total" readonly="readonly"  class="form-control"  ></td>
                    <td></td>
                    

                    
                </tr>
               <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    @foreach($iva as $key)

                    <td align="left"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#bs-example-modal-sm">I.V.A {{$key->porcentaje}} %</button></td>
                    
                    <td><input style="width: 100px;" type="text" name="iva" id="IVA" class="form-control" readonly="readonly" value=""></td>
                    <input type="hidden" name="p_iva" id="iva" value="{{$key->porcentaje}}">
                    <td></td>

                      @endforeach
              
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td align="left"><strong>TOTAL</strong></td>
                    <td><input id="total_final" style="width: 100px;" type="number" name="total" readonly="readonly" class="form-control"></td></td>
                  {{--  --}}
                    <td></td>
                </tr>
             
                          
                        </tbody>

                </table>  



                    
                    <button disabled="disabled" class="btn btn-primary" id="guardar" type="submit">Guardar</button>


<script>
function agregarFila(){
  document.getElementById("tablaprueba").insertRow(-1).innerHTML = '<td><input style="width: 100px;" type="text" name="codigo" class="form-control" id="cod" for="cod" value=""></td><td><input style="width: 180px;" type="text" name="nombre" readonly="readonly" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="cantidad" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="precio" readonly="readonly" class="form-control"  value=""></td><td><input style="width: 100px;" type="text" name="importe" readonly="readonly" class="form-control"  value=""></td><td><button onclick="eliminarFila()" type="button" class="btn btn-danger btn-sm">-</button></td>';
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

{{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script> --}}
<script>

feather.replace();

   
//funcion buscar 'proveedor'-------------------------------------------

      $("#ruf").on('keyup',function (event) {
        var ruf = event.target.value;
   
    var proveedor=$("#ruf").val();
    if(proveedor>6){
       /*console.log(cliente);*/
    
    $.get('/proveedores/'+proveedor+'/buscar_proveedor',function(data){
        
      var result = data;
      console.log(result);
      if (result<=0) {
        $("#mensaje").text('Los datos no existen en el registro');
      } else {
        $("#mensaje").text('');
        $('#proveedores_id').val(result[0].id);
        $('#nomb').val(result[0].nombre);
        $('#dir').val(result[0].direccion);
      
      }
    });
    }else{
      $('#nomb').val('');
        $('#dir').val('');
    }
  });

//Funcion buscar producto--------------------------------------------
           $("#cod").on('keyup',function (event) {
        //asignar evento a la variable ruf
        var cod = event.target.value;
     
    var product = $("#cod").val();
    if(product.length>3){
       console.log(product);
    $.get('/productos/'+product+'/buscar_producto',function(data){
 
      var res = data;
    
      if (res<=0) {
        $("#mensaje2").text('No existe es producto registrado');
      } else {
        $("#mensaje2").text('');
        $('#producto').val(res[0].nombre);
        $('#valor').val(res[0].unidad);
        $('#precio').val(res[0].precio);
        $('#productos_id').val(res[0].id);
      }
    });
    }else{
        $('#producto').val('');
        $('#valor').val('');
        $('#precio').val('');
    }
  });

//calcular factura

//--------campo cantidad de productos-----------------------------
    $("#cantidad").on('keyup',function (event)  {

     var cantidad = event.target.value;
    var cantidad = $("#cantidad").val();

    console.log(cantidad);
    
//'-------------campo precio por unidad----------------------------'
 var preciot =$("#precio").val();
  

          
    console.log(preciot);
//----------importe-------------------       
var total = cantidad*preciot;




/*console.log(total);*/

    if(total>0){
        $('#importe').val(total);
      } else {
        $("#mensaje2").text('Debe Ingresar la cantidad');
        $('#importe').val('');
       
      }

  //----------------cantidad de articulos-------------------
  var cantidades = $("#cantidad").val();
   var iva =$("#iva").val();

   if(cantidades>0){
    $('#Cant_art').val(cantidades);
   }
  //------------Sub total-----------------------------------
  var sub_total = cantidad*preciot;


   //iva 
   iva=iva*sub_total/100;


/*console.log(sub_total);*/

    if(sub_total>0){
        $('#sub_total').val(sub_total);
        $('#IVA').val(iva);
      } else {
        $("#mensaje2").text('Debe Ingresar la cantidad');
        $('#sub_total').val('');
        $('#IVA').val('');

      }


  //----------TOTAL A PAGAR-------------------       
var total_pagar = sub_total+iva;

/*console.log(total_pagar);*/

    if(total_pagar>0){
        $('#total_final').val(total_pagar);
          $('#guardar').prop('disabled',false);
      } else {
        $("#mensaje2").text('Debe Ingresar la cantidad');
        $('#total_final').val('');
          $('#guardar').prop('disabled',true);
       
      }
  });



//=========STOCK DISPONIBLE --------------------------------
    $("#cod").on('keyup',function (event) {
        //asignar evento a la variable ruf
        var cod = event.target.value;
     
    var product = $("#cod").val();
    if(product.length>3){
    $.get('/productos/'+product+'/buscar_producto',function(data){
 
      var res = data;
    
      if (res<=0) {
        $("#mensaje2").text('No existe es producto registrado');
      } else {
        $("#mensaje2").text('');
        var existencia = res[0].existencia;
        var stock_max = res[0].stock_max;

        var nueva_existencia = event.target.value;
        var nueva_existencia = $("#cantidad").val();

         var suma= parseInt(nueva_existencia) + parseInt(existencia);
         console.log(suma);

         if (suma > stock_max) {
          $("#mensaje3").text('la cantidad supera el stock');
          $('#guardar').prop('disabled',true);
         }else{   
           $('#guardar').prop('disabled',false);
        }
      }
    });
    }
  });

    </script>
