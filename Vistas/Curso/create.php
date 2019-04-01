<?php include_once("Vistas/header.php"); ?>

    <div class="class1">
                             <h2><b><center> Registrar Cursos</b></center></h2>

                            <form action="" method="post" class="container">
                            
                            <label >Nombre</label>
                            <input maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Curso[Nombre]"   value="" required="" autocomplete="off">
                            <br>
                            <label >Fecha Inicio</label>
                            <input maxlength="45" type="date"  name="Curso[FechaInicio]"   value="" required/ autocomplete="off">
                            <br>
                            <label >Fecha Vencimiento</label>
                            <div><input maxlength="45" type="date"  name="Curso[FechaVencimiento]"   value="" required/ autocomplete="off"></div>
                            <br> 

                            <label>Conductor</label>
                            <select name="Curso[Conductor_idConductor]"required="" >
                            <option>Conductor</option>
                            <?php foreach ($conductor as $conduc ) {?>
                            <option value="<?= $conduc->idConductor ?>"><?= $conduc->Documento ?></option>
                                   
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