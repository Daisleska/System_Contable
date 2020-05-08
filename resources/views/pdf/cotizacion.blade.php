<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('../resources/views/pdf/boostrap/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />




    <style>
        img {
            width: 10%;
            margin-left: 11cm;
      


        }
     

        #alto {
          
          /* Alto de las celdas */
          height: 40px;
        }

        body {
          font-family: "Times New Roman", serif;
          margin: 0mm 1.2cm 1cm 1cm;
         }


        h3 {
            text-align: center;
        }

        small {
            margin-top: 20%;
        }

        #titulo {
            text-align: center;

        }

        #membrete {
            text-align: center;
            margin-top: 35px;
        }

        #l {
            text-align: left;
            margin-left: 4cm;

        }

        #c{
            text-align:center;
            height: 40px;
        }

        


        @font-face {
            font-family: 'Times-Bold';
            src:"{{ public_path('../storage/fonts/Times-Bold') }}"
        }

        body {
            font-family: 'Times-Bold';
        }

        table {
           
            border-collapse: collapse;

        }

        #tabla {

            margin-top: -150px;

        }

        #a{
            text-align: right;
           margin-right: 2cm; 
        }

        .circular--square {
       border-radius: 60%;
         }

    </style>
</head>

<body>
    <div class="row">

        
        
        <h3 class="float-center" id="titulo">_________________________   COTIZACIÓN ___________________________</h3>
     
      
  
     @foreach($empresa as $key)
     @foreach($cotizacion as $val)
   

      
      <table>
      
      <tr>  

            <th style="text-align: right;">
            Número: {{$val->n_cotizacion}}
           <br>
           Fecha: {{$val->fecha}} 
           
           </th>

            
            
      </tr>
      <tr>
            
          <th style="text-align: left;">
           {{$key->nombre}}
           <br>
           {{$key->tipo_documento}}-{{$key->ruf}}
           <br>
           {{$key->direccion}}
           <br>
           {{$key->email}}
           
           </th> 
           <th><img class="circular--square" src="../public/{{ $key->url_image }}"></th>  
           
            
            
      </tr>      
      </table>
    
     
        <hr>
        <br>
        <table>

        <tr>

         
         <th id="l">CLIENTE</th>
        
        </tr>
         <tr>
        
           
           <th id="l">{{$val->nombre}}</th>
          
                
        </tr>
        <tr>
        
           
           <th id="l">{{$val->direccion}}</th>
                
        </tr>
        
        <tr>
        
           
           <th id="l">{{$val->email}}</th>
                
        </tr>
        @endforeach
        @endforeach  

        </table>
        <br><br>
        
        <table border="1"  width="470">
         
                <thead>
                <tr style="background-color:#008080;">
                   <th id="alto">Producto</th>
                   <th id="alto">Descripción</th>
                   <th id="alto">Cantidad</th>
                   <th id="alto">Precio</th> 
                   <th id="alto">Importe</th>
                </tr>

                </thead>
                <tbody>
                @foreach($cotizacion as $key)
                <tr>
                  <td id="c">{{$key->producto}}</td>
                  <td id="c">{{$key->descripcion}}</td>
                  <td id="c">{{$key->cantidad}}</td>
                  <td id="c">{{number_format($key->precio,2,',','.')}} </td>
                  <td id="c">{{number_format($key->importe,2,',','.')}} </td>
                </tr>

                <tr>
                    <th id="alto" scope="row" colspan="3"></td>
                    <td id="c"><strong>SUB TOTAL</strong></td>
                    <td id="c">{{number_format($key->sub_total,2,',','.')}} </td>
                    
                </tr>
                @foreach($iva as $k)
                <tr>
                  <th scope="row" colspan="3" id="alto" ></td>
                  <td id="c"><strong>I.V.A {{$k->porcentaje}} %</strong></td>
                  <td scope="row" id="c">{{number_format($key->iva,2,',','.')}} </td>
                </tr>
                 @endforeach 
                
                @foreach($descuento as $v)
                <tr>
                  <th scope="row" colspan="3" id="alto" ></td>
                  <td id="c"><strong>Descuento {{$v->porcen}} %</strong></td>
                  <td scope="row" id="c">{{number_format($key->descuento,2,',','.')}} </td>
                </tr>
                @endforeach
                <tr>
                  <th scope="row" colspan="3" id="alto" ></td>
                  <td id="c"><strong>TOTAL</strong></td>
                  <td scope="row" id="c">{{number_format($key->total,2,',','.')}} </td>
                </tr>
                 
                  @endforeach                                 
                </tbody>
                </table>
       
        

    </div>


</body>

</html>
