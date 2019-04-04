<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container" action="" enctype="multipart/form-data">

                            <h2><b><center> Registrar Propietario</b></center></h2>
                            <label >Nombre</label>
                            <input maxlength="45" type="text" name="Propietario[Nombre]"onkeypress="return letras(event)" placeholder="acepta solo letras"value="" required/>
                            <br>
                            <label >Direccion</label>
                            <input maxlength="45" type="text"  name="Propietario[Direccion]" placeholder="acepta numeros y letras"value="" required/>
                            <br>
                            
                            <label >Documento</label>
                            <input maxlength="45" type="text" onkeypress="return numeros(event)" name="Propietario[Documento]" placeholder="Solo acepta numeros"value="" required/>
                            <br>  
                            <label >Celular</label>
                            <input maxlength="45" type="text"  name="Propietario[Celular]"onkeypress="return numeros(event)" placeholder="Solo acepta numeros"value="" required/>
                            <br>
                           
                            <label>Vehiculo</label>
                            <select name="Propietario[id_vehiculo]"required="" >
                                <option>Vehiculo</option>

                                <?php foreach ($Vehiculo as $vehic ) {?>
                                    <option value="<?= $vehic->id_vehiculo ?>"><?= $vehic->Vehiculo ?></option>
                                   
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