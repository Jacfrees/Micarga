<!DOCTYPE>
<html>
<head>
	<title>EDITAR DOCUMENTO</title>
<body>
<a href="index.php?c=Documento&a=admin"><h4>Volver</h4></a>
<h2 align="center" >Actualizar Vehiculo</h2>

<form method="post">
<center>
                          
                            <label >Tipo</label>
                            <input maxlength="45" type="text"  name="Documento[Tipo]" 
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
                            <input maxlength="45" type="text"  name="Documento[Numero]"   
                            value="<?= $Documento->Numero ?>" required/>
                            <br>
                            
                            <label >Vehiculo</label>    
                            <select name="Documento[Vehiculo_idVehiculo]"required="" value="<?= $Documento->Vehiculo_idVehiculo ?>">
                            <option value="<?= $veh->idVehiculo ?>"> <?= $veh->Modelo ?></option>
                            <?php foreach ($vehiculo as $vehi ) {?>
                            <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->Modelo ?></option>
                                   
                             <?php   } ?>
                            </select>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                        </form>
                        <br><br><br>
 
      

</body>
</html>