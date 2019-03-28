<?php include_once("Vistas/header.php"); ?>
<div class="class1">

<h2 align="center" >Actualizar Vehiculo</h2>

<form method="post" class="container">
                          
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
                            
                            <label>Seccional:</label>
                            <select name="Vehiculo[Seccional]" value="" required="">
                            <option value="">Seleccione una seccional</option>
                            <option value="<?= $Vehiculo->Seccional ?>">Sogamoso</option>
                            <option value="<?= $Vehiculo->Seccional ?>">Corrales</option>
                            <option value="<?= $Vehiculo->Seccional ?>">Yopal</option>
                            </select>
                             <br>

                            <label>Conductor:</label>
                            <select name="Vehiculo[Conductor_idConductor]"required="" value="<?= $Vehiculo->Conductor_idConductor ?>">
                                <option value="<?= $con->idConductor ?>"> <?= $con->Documento ?></option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Documento ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                           
                        <button type="submit" class="boton_personalizado4">Guardar</button>
                        
                        </form>
                        
 </div>
      <?php include_once("Vistas/footer.php"); ?>
