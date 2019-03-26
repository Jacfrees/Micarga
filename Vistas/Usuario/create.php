<?php include_once("Vistas/header.php"); ?>  

 <div class="class1">
                                <h2><b><center> Registrar Usuario</b></center></h2>

                            <form action="" method="post" class="container" autocomplete="off">

                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Usuario[Nombre]"   value="" required/>
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"  name="Usuario[Documento]"   value="" required/>
                            <br>
                            <label >Telefono</label>
                            <input maxlength="45" type="text"  name="Usuario[Telefono]"   value="" required/>
                            <br>  
                            <label >Perfil</label>
                            <input maxlength="45" type="text"  name="Usuario[Perfil]"   value="" required/>
                            <br>
                            <label>Password</label>
                            <input maxlength="45" type="Password"  name="Usuario[Password]"   value="" required/>
                            <br>
                           
                            
                        <button type="reset" class="boton_personalizado4">Cancelar</button>
                        <button type="submit" class="boton_personalizado3">Guardar</button>
                        </form>

    <script>
    function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

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
//valida que no se repita un mismo registro
function valida () {
   
    
}
</script>
</div>                          

  <?php include_once("Vistas/footer.php"); ?>                      