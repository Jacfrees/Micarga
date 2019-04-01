<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container">

                            <h2><b><center> Registrar Documento</b></center></h2>
                            <label >Tipo</label>
                            <input maxlength="45" type="text" onkeypress="return soloLetras(event)" name="Documento[Tipo]"   value="" required/>
                            <br>
                            <label >Fecha Renovacion</label>
                            <input maxlength="45" type="date"  name="Documento[FechaRenovacion]"   value="" required/>
                            <br>
                            <label >Fecha Vencimiento</label>
                            <input maxlength="45" type="date"  name="Documento[FechaVencimiento]"   value="" required/>
                            <br>  
                            <label >Numero</label>
                            <input maxlength="45" type="text"  name="Documento[Numero]"onkeypress="return numeros(event)"   value="" required/>
                            <br>                            
                            <label>Vehiculo</label>
                            <select name="Documento[Vehiculo_idVehiculo]"required="" >
                            <option>Vehiculo</option>
                            <?php foreach ($vehiculo as $vehi ) {?>
                            <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->Modelo ?></option>
                                   
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
