<?php include_once("Vistas/headerE.php"); ?>

 <div class="class1">

<form action="" method="post"  class="container">

                            <h2><b><center> Registrar Propietario</b></center></h2>
                            <label >Nombre</label>
                            <input title="Por favor ingrese letras"maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Propietario[Nombre]" value="" required="" autocomplete="off">
                            <br>
                            <label >Apellido</label>
                            <input title="Por favor ingrese letras"maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Propietario[Apellido]" value="" required="" autocomplete="off">
                            <br>
                            <label >Direccion</label>
                            <input maxlength="45" type="text"  name="Propietario[Direccion]" value="" required/>
                            <br>
                            
                            <label >Documento</label>
                            <input title="Por favor ingrese numeros"maxlength="45" type="text" onkeypress="return numeros(event)" name="Propietario[Documento]" value="" required/>
                            <br>  
                            <label >Celular</label>
                            <input title="Por favor ingrese numeros"maxlength="45" type="text" onkeypress="return numeros(event)"   name="Propietario[Celular]" value="" required/>
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

<script>
function limpia() {
    var val = document.getElementById("miInput").value;
    var tam = val.length;
    for(i = 0; i < tam; i++) {
        if(!isNaN(val[i]))
            document.getElementById("miInput").value = '';
    }
}
</script>
                            

                            
</div>
<?php include_once("Vistas/footer.php"); ?>