<!DOCTYPE html>
<html>
<head>
    <title>LISTADO DE VEHICULOS</title>
<body>

<form action="index.php?c=Vehiculo&a=create" method="post" autocomplete="off" enctype="multipart/form-data">

                            
                            <label >Placa Cabezote</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaCabezote]"   value="" required/>
                            <br>
                            <label >Modelo</label>
                            <input maxlength="45" type="text"  name="Vehiculo[Modelo]"   value="" required/>
                            <br>
                            <label >Color</label>
                            <input maxlength="45" type="text"  name="Vehiculo[Color]"   value="" required/>
                            <br>  
                            <label >Placa Remolque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[PlacaRemolque]"   value="" required/>
                            <br>
                            <label>Capacidad Tanque</label>
                            <input maxlength="45" type="text"  name="Vehiculo[CapacidadTanque]"   value="" required/>
                            <br>
                            <label>Carta Propiedad</label>
                            <input maxlength="45" type="text"  name="Vehiculo[CartaPropiedad]"   value="" required/>
                            <br>                            <br>
                            <label>Conductor</label>
                            <select name="Vehiculo[Vehiculo_idVehiculo]"required="" class="custom-señect">
                                <option name="Vehiculo[Conductor]">Conductor</option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Nombre ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                    
                            <button type="reset" >Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
</body>
</head>
</html>