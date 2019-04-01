<?php include_once("Vistas/header.php"); ?>

<div class="class1">

<h2 align="center" >Actualizar Documentos</h2>

<form method="post" autocomplete="off" class="container">
                          
                            <label >Tipo</label>
                            <input maxlength="45" type="text"onkeypress="return soloLetras(event)"  name="Documento[Tipo]" 
                            value="<?= $Documento->Tipo ?>" required/>
                            <br>
                            <label >Fecha Renovacion</label>
                            <input maxlength="45" type="text" name="Documento[FechaRenovacion]"   
                            value="<?= $Documento->FechaRenovacion ?>" required/>
                            <br>
                            <label >Fecha Vencimiento</label>
                            <input maxlength="45" type="text"  name="Documento[FechaVencimiento]"  
                            value="<?= $Documento->FechaVencimiento ?>" required/>
                            <br>
                            <label >Numero</label>
                            <input maxlength="45" type="text"  name="Documento[Numero]"onkeypress="return numeros(event)"   
                            value="<?= $Documento->Numero ?>" required/>
                            <br>
                            
                            <label >Vehiculo</label>    
                            <select name="Documento[Vehiculo_idVehiculo]"required="" value="<?= $Documento->Vehiculo_idVehiculo ?>">
                            <option value="<?= $veh->idVehiculo ?>"> <?= $veh->Modelo ?></option>
                            <?php foreach ($vehiculo as $vehi ) {?>
                            <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->Modelo ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>

                        <button type="submit" class="boton_personalizado4">Guardar</button>
                        </form>
</div>                       
 
<?php include_once("Vistas/footer.php"); ?>