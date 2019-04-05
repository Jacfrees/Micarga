<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form action="" method="post"  class="container">

                            <h2><b><center> Registrar Propietario</b></center></h2>
                            <label >Nombre</label>
                            <input maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Propietario[Nombre]" placeholder="Por favor ingrese letras" value="" required="" autocomplete="off">
                            <br>
                            <label >Direccion</label>
                            <input maxlength="45" type="text"  name="Propietario[Direccion]" placeholder="Por favor ingrese numeros y letras"value="" required/>
                            <br>
                            
                            <label >Documento</label>
                            <input maxlength="45" type="text" onkeypress="return numeros(event)" name="Propietario[Documento]" placeholder="Solo acepta numeros"value="" required/>
                            <br>  
                            <label >Celular</label>
                            <input maxlength="45" type="text" onkeypress="return numeros(event)"   name="Propietario[Celular]" placeholder="Por favor ingrese numeros"value="" required/>
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