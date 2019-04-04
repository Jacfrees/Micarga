<?php include_once("Vistas/header.php"); ?>
<div class="class1">

<h2 align="center" >Actualizar Propietario</h2>

<form method="post" class="container">
                          
                            <label >Nombre</label>
                            <input maxlength="45" type="text" onkeypress="return soloLetras(event)" name="Propietario[Nombre]" 
                            value="<?= $Propietario->Nombre ?>" required/>
                            <br>
                            <label >Direccion</label>
                            <input maxlength="45" type="text" name="Propietario[Direccion]"
                            value="<?= $Propietario->Direccion ?>" required/>
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"onkeypress="return solonumeros(event)"  name="Propietario[Documento]"  
                            value="<?= $Propietario->Documento ?>" required/>
                            <br>
                            <label >Celular</label>
                            <input maxlength="45" type="text" onkeypress="return solonumeros(event)"  name="Propietario[Celular]"   
                            value="<?= $Propietario->Celular ?>" required/>
                            <br>
                            
                            <label>Vehiculo:</label>
                            <select name="Propietario[id_vehiculo]"required="" value="<?= $Propietario->id_vehiculo ?>">
                                <option value="<?= $veh->id_vehiculo ?>"> <?= $veh->Vehiculo ?></option>
                                
                                <?php foreach ($Vehiculo as $vehic ) {?>
                                    <option value="<?= $vehic->id_vehiculo ?>"><?= $vehic->Vehiculo ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                           
                        <button type="submit" class="boton_personalizado4">Guardar</button>
                        
                        </form>
                        
 </div>
      <?php include_once("Vistas/footer.php"); ?>
