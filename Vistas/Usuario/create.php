<?php include_once("Vistas/header.php"); ?>  

 <div class="class1">
                                <h2><b><center> Registrar Usuario</b></center></h2>

                            <form action="" method="post" class="container" autocomplete="off">

                            <label >Nombre</label>
                            <input maxlength="45" type="text" onkeypress="return soloLetras(event)"name="Usuario[Nombre]" placeholder="Por favor ingrese letras" value="" required/>
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text" name="Usuario[Documento]"onkeypress="return numeros(event)" placeholder="Por favor ingrese numeros" value="" required/>

                            <br>
                            <label >Telefono</label>
                            <input maxlength="45" type="text"  name="Usuario[Telefono]"onkeypress="return numeros(event)" placeholder="Por favor ingrese numeros"  value="" required/>
                            <br>  
                            <label>Perfil:</label>
                            <select name="Usuario[Perfil]" value="" required="">
                            <option value="">Seleccione un perfil</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Empleado">Empleado</option>
                            </select><br>
                            <br>
                            <label>Password</label>
                            <input maxlength="45" type="Password"  name="Usuario[Password]"   value="" required/>
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

</script>

      
</div>                          

  <?php include_once("Vistas/footer.php"); ?>                      