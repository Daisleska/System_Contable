<p style="margin-left: 1cm;">Campos obligatorios (*)</p>


<div class="row" style="margin-left: 1cm;">                   

                    <div class="form-group mb-3">
                        <label style="margin-left: 0.3cm;">Nombre de la Empresa *</label>
                            <input style="width: 310px; margin-left: 0.3cm; " type="text" name="nombre" class="form-control" placeholder="" title="Ingrese el nombre del proveedor" required>
                            <div class="valid-feedback">
                            </div>
                    </div>
</div>

<div class="row" style="margin-left: 1cm;">  
                    <div class="form-group mb-3">
                        <label style="width: 60px; margin-left: 0.3cm; ">RIF *</label>
                        <select name="tipo_documento" data-plugin="customselect" class="form-control" data-placeholder="" required="required" title="Seleccione el tipo de documento" style="width: 80px; margin-left: 0.3cm; " >
                                  
                                  <option value="C">C</option>
                                  <option value="E">E</option>
                                  <option value="J">J</option>
                                  <option value="P">P</option>
                                  
                                  
                                </select>
                            <div class="valid-feedback">
                            </div>
                    </div>



                    <div class="form-group mb-3">
                    <label style="color: white;" >...</label>    
                        <input style="width: 220px; margin-left: 0.3cm;" type="text" class="form-control" title="Ingrese el RUT" name="ruf" placeholder="" required>
                        <div class="valid-feedback">
                        </div>

                    </div>
   </div>

     <div class="row" style="margin-left: 1cm;"> 
                  <div class="form-group mb-3">
                        <label style="margin-left: 0.3cm;">Representante *</label>
                            <input style="width: 310px; margin-left: 0.3cm; "  type="text" name="representante" class="form-control" title="Ingrese el nombre del representante"  placeholder="" required>
                            <div class="valid-feedback">
                            </div>
                    </div>
    </div>

     <div class="row" style="margin-left: 1cm;"> 
                    <div class="form-group mb-3">
                        <label style="margin-left: 0.3cm;">Dirección *</label>
                            <input style="width: 310px; margin-left: 0.3cm; "  type="text" class="form-control" title="Ingrese la dirección" name="direccion" placeholder="" required>
                            <div class="valid-feedback">
                            </div>
                    </div>
    </div>


       <div class="row" style="margin-left: 1cm;">                
                       <div class="form-group mb-3">
                        <label style="margin-left: 0.3cm;">Correo *</label>
                        <input style="width: 310px; margin-left: 0.3cm; " type="email" class="form-control"  title="Ingrese el correo" name="correo" placeholder="correo@gmail.com" required>
                        <div class="valid-feedback">
                       
                        </div>
                    </div>
        </div>

        <div class="row" style="margin-left: 1cm;">
                    <div class="form-group mb-3">
                        <label style="margin-left: 0.3cm;">Teléfono *</label>
                    
                            <select name="codigo" data-plugin="customselect" class="form-control" data-placeholder="" title="Seleccione el código" required="required" style="width: 80px; margin-left: 0.3cm; " >
                                  
                                  <option value="51">+51</option>
                                  <option value="54">+54</option>
                                  <option value="55">+55</option>
                                  <option value="56">+56</option>
                                  <option value="57">+57</option>
                                  <option value="58">+58</option>
                                  <option value="591">+591</option>
                                  <option value="593">+593</option>
                                  <option value="595">+595</option>
                                  <option value="598">+598</option>
                                  
                                </select></th>
                            <div class="valid-feedback">
                            </div>
                    </div>

                 <div class="form-group mb-3">
                        <label style="color: white;" >...</label>
                        <input style="width: 220px; margin-left: 0.3cm; "type="number" name="telefono" title="Ingrese el número de teléfono" class="form-control" placeholder="" required>
                        <div class="valid-feedback">
                       
                        </div>
                    </div>
</div>
          
        
                    
                    <div class="border-top">
                        <div class="card-body" align="right">
                            <button style="align-content: center;" type="reset" class="btn btn-dark">Borrar</button>
                            <button style="align-content: center;" type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>




