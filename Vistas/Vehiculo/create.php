<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container">

                            <h2><b><center> Registrar Vehiculo</b></center></h2>
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
                            
                            <label>Seccional:</label>
                            <select name="Vehiculo[Seccional]" value="" required="">
                            <option value="">Seleccione una seccional</option>
                            <option value="Sogamoso">Sogamoso</option>
                            <option value="Corrales">Corrales</option>
                            <option value="Yopal">Yopal</option>

                            </select><br><br>   

                            <br>                            
                            <label>Conductor</label>
                            <select name="Vehiculo[Conductor_idConductor]"required="" >
                                <option>Conductor</option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Documento ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                    
                            <button type="reset" class="boton_personalizado4">Cancelar</button>
                            <button type="submit" class="boton_personalizado3">Guardar</button>
                            </form>
</div>
<?php include_once("Vistas/footer.php"); ?>