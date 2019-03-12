<!DOCTYPE>
<html>
<head>
	<title>EDITAR VEHICULO</title>
<body>
<a href="index.php?c=Vehiculo&a=admin"><h4>Volver</h4></a>
<h2 align="center" >Actualizar Vehiculo</h2>

<form method="post">
<center>
                          
                            <label >Placa Cabezote</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaCabezote]" 
                            value="<?= $Vehiculo->PlacaCabezote ?>" required/>
                            <br>
                            <label >Modelo</label>
                            <input maxlength="45" type="text" name="Vehiculo[Modelo]"   
                            value="<?= $Vehiculo->Modelo ?>" required/>
                             <br>
                           <label >Color</label>
                            <input maxlength="45" type="text"  name="Vehiculo[Color]"  
                            value="<?= $Vehiculo->Color ?>" required/>
                            <br>
                            <label >Placa Remolque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaRemolque]"   
                            value="<?= $Vehiculo->PlacaRemolque ?>" required/>
                              <br>
                            <label >Capacidad Tanque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[CapacidadTanque]"   
                            value="<?= $Vehiculo->CapacidadTanque ?>" required/>
                              <br>
                            <label >Carta Propiedad</label>
                            <input maxlength="45" type="text"  name="Vehiculo[CartaPropiedad]"   
                            value="<?= $Vehiculo->CartaPropiedad ?>" required/>
                             <br>

                            <select name="Vehiculo[Conductor_idConductor]"required="">
                                <option value="<?= $con->idConductor ?>"> <?= $con->Cedula ?></option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Cedula ?></option>
                                   
                             <?php   } ?>
                            </select>

                           
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                        </form>
                        <br><br><br>
 
      

</body>
</html>