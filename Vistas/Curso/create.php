<?php include_once("Vistas/header.php"); ?>

    <div class="class1">
                             <h2><b><center> Registrar Cursos</b></center></h2>

                           <form method="post" autocomplete="off" class="container" action="" enctype="multipart/form-data">
                            <label>Nombre Curso:</label>
                            <select name="Curso[Nombre]" value="" required="">
                            <option value="">Seleccione nombre de curso</option>
                            <option value="Manejo Defensivo">Manejo Defensivo</option>
                            <option value="Manejo De Extintores">Manejo De Extintores</option>
                            <option value="Sustancias Peligrosas">Sustancias Peligrosas</option>
                            <option value="Primeros Auxilios">Primeros Auxilios</option>
                            <option value="Trabajo En Alturas">Trabajo En Alturas</option>
                            <option value="Mecanica Basica">Mecanica Basica</option>
                            <option value="Examen De Aptitud">Examen De Aptitud</option>
                            </select><br>

                            <label >Fecha Inicio</label>
                            <input maxlength="45" type="date"  name="Curso[FechaInicio]"   value="" required/ autocomplete="off">
                            <br>
                            <label >Fecha Vencimiento</label>
                            <div><input maxlength="45" type="date"  name="Curso[FechaVencimiento]"   value="" required/ autocomplete="off"></div>
                            <br> 
                            
                            <label>Subir Curso:</label>
                            <input type="file" name="userfile"> 
                            <br><br>

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