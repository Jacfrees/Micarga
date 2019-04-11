<?php include_once("Vistas/headerE.php"); ?>

<div class="class1">

<h2 align="center" >Actualizar Documentos</h2>

<form method="post" autocomplete="off" class="container">
                          
                            <label >Tipo</label>
                            <select name="Documento[Tipo]" value="" required="">
                            <option value="">Seleccione Tipo Documento</option>
                            <option value="Soat">Soat</option>
                            <option value="Tecnomecanica">Tecnomecanica</option>
                            <option value="Poliza Hidrocarburos">Poliza Hidrocarburos</option>
                            <option value="Poliza Extracontractua">Poliza Extracontractua</option>
                            <option value="Prueba Hidrostatica">Prueba Hidrostatica</option>
                            <option value="Quing Pim">Quing Pim</option>
                            <option value="Quimmta Rueda">Quimmta Rueda</option>
                            <option value="Tabla De Aforo">Tabla De Aforo</option>
                            <option value="Licencia Conduccion">Licencia Conduccion</option>
                            </select><br>

                            <label >Numero</label>
                            <input maxlength="45" type="text"  name="Documento[Numero]"onkeypress="return numeros(event)"   
                            value="<?= $Documento->Numero ?>" required/>
                            <br>
                            <label >Fecha Renovacion</label>
                            <input maxlength="45" type="date" name="Documento[FechaRenovacion]"   
                            value="<?= $Documento->FechaRenovacion ?>" required/>
                            <br>
                            <label >Fecha Vencimiento</label>
                            <input maxlength="45" type="date"  name="Documento[FechaVencimiento]"  
                            value="<?= $Documento->FechaVencimiento ?>" required/>
                            <br>
                            
                            <label >Vehiculo</label>    
                            <select name="Documento[Vehiculo_idVehiculo]"required="" value="<?= $Documento->Vehiculo_idVehiculo ?>">
                            <option value="<?= $veh->idVehiculo ?>"> <?= $veh->ModeloCabezote ?></option>
                            <?php foreach ($vehiculo as $vehi ) {?>
                            <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->ModeloCabezote ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>

                        <button type="submit" class="boton_personalizado4">Guardar</button>
                        </form>
</div>                       
 
<?php include_once("Vistas/footer.php"); ?>