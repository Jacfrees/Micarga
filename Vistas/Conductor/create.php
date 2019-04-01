<?php include_once("Vistas/header.php"); ?>

    <div class="class1">
                             <h2><b><center> Registrar Conductor</b></center></h2>

                            <form action="" method="post" class="container">
                            
                            <label >Nombre</label>
                            <input maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Conductor[Nombre]"   value="" required="" autocomplete="off">
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"  name="Conductor[Documento]"onkeypress="return numeros(event)"   value="" required/ autocomplete="off">
                            <br>
                            <label >Numero Celular</label>
                            <div><input maxlength="45" type="text"  name="Conductor[NumCelular]"onkeypress="return numeros(event)"   value="" required/ autocomplete="off"></div>
                            <br>  
                            <label >Licencia Conduccion</label>
                            <input maxlength="45" type="text"  name="Conductor[LicConduccion]"onkeypress="return numeros(event)"   value="" required/ autocomplete="off">
                            <br>
                            <label>Vencimiento Licencia</label>
                            <input maxlength="45" type="date"  name="Conductor[VenLicencia]"   value="" required/ autocomplete="off">
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