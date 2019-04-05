<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container" action="" enctype="multipart/form-data">

                            <h2><b><center> Registrar Vehiculo</b></center></h2>
                            <label >Placa Cabezote</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaCabezote]" placeholder="Por favor ingrese numeros y letras"value="" required/>
                            <br>
                            <label >Modelo</label>
                            <input maxlength="45" type="text"  name="Vehiculo[Modelo]"onkeypress="return numeros(event)" placeholder="Por favor ingrese numeros"value="" required/>
                            <br>
                            
                            <label >Color</label>
                            <input maxlength="45" type="text" onkeypress="return soloLetras(event)" name="Vehiculo[Color]" placeholder="Por favor ingrese letras"value="" required/>
                            <br>  
                            <label >Placa Remolque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaRemolque]" placeholder="Por favor ingrese numeros y letras"value="" required/>
                            <br>
                            <label>Capacidad Tanque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[CapacidadTanque]"onkeypress="return numeros(event)" placeholder="Por favor ingrese numeros"value="" required/>
                            <br>
                            
                            <label>Seccional:</label>
                            <select name="Vehiculo[Seccional]" value="" required="">
                            <option value="">Seleccione una seccional</option>
                            <option value="Sogamoso">Sogamoso</option>
                            <option value="Corrales">Corrales</option>
                            <option value="Yopal">Yopal</option>
                            </select><br>

                            <label>Subir carta propiedad:</label>
                            <input type="file" name="userfile"> 
                            <br>
                                                        
                            <label>Conductor</label>
                            <select name="Vehiculo[Conductor_idConductor]"required="" >
                                <option>Conductor</option>

                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Documento ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>

                            <label>Propietario</label>
                            <select name="Vehiculo[Propietario_idPropietario]"required="" >
                                <option>Propietario</option>

                                <?php foreach ($propietario as $conduc ) {?>
                                    <option value="<?= $conduc->idPropietario ?>"><?= $conduc->Documento ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                    
                            <button type="reset" class="boton_personalizado4">Cancelar</button>
                            <button type="submit" class="boton_personalizado3">Guardar</button>
                            </form>
                            <script>
                            function numeros(e){
                            key = e.keyCode || e.which;
                            tecla = String.fromCharCode(key).toLowerCase();
                            letras = " 0123456789";
                            especiales = [8,37,39,46];
 
                            tecla_especial = false
                            for(var i in especiales){
                            if(key == especiales[i]){
                            tecla_especial = true;
                             break;
                         } 
                       }
 
                            if(letras.indexOf(tecla)==-1 && !tecla_especial)
                            return false;
                            }
             
                            </script>
                            <script>
    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
</script>

                         
</div>
<?php include_once("Vistas/footer.php"); ?>