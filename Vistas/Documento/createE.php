<?php include_once("Vistas/headerE.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container" action="" enctype="multipart/form-data">

                            <h2><b><center> Registrar Documento</b></center></h2>
                            <label >Tipo</label>
                            <select name="Documento[Tipo]" value="" required="">
                            <option value="">Seleccione Tipo Documento</option>
                            <option value="Soat">Soat</option>
                            <option value="Tecnomecanica">Tecnomecanica</option>
                            <option value="Poliza Hidrocarburos">Poliza Hidrocarburos</option>
                            <option value="Poliza Extracontractua">Poliza Extracontractua</option>
                            <option value="Prueba Hidrostatica">Prueba Hidrostatica</option>
                            <option value="Quing Pim">Quing Pim</option>
                            <option value="Quimmta Rueda">Quimmta Rueda</option>
                            <option value="Tabla De Aforo">Tabla De Aforo</option>
                            <option value="Licencia Conduccion">Licencia Conduccion</option>
                            </select><br>

                            <label >Numero</label>
                            <input title="Por favor ingrese numeros" maxlength="45" type="text"  name="Documento[Numero]"onkeypress="return numeros(event)" value="" required/>
                            <br>  
                            <label >Fecha Renovacion</label>
                            <input maxlength="45" type="date"  name="Documento[FechaRenovacion]"   value="" required/>
                            <br>
                            <label >Fecha Vencimiento</label>
                            <input maxlength="45" type="date"  name="Documento[FechaVencimiento]"   value="" required/>
                            <br>  

                            <label>Subir Documento:</label>
                            <input type="file" name="userfile"> 
                            <br><br>
                           
                            <label>Vehiculo</label>
                            <select name="Documento[Vehiculo_idVehiculo]"required="" >
                            <option>Vehiculo</option>
                            <?php foreach ($vehiculo as $vehi ) {?>
                            <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->PlacaCabezote ?></option>
                                   
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
