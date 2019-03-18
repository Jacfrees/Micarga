<?php include_once("Vistas/header.php"); ?>

 <div class="class1">

<form method="post" autocomplete="off" class="container">

                            <h2><b><center> Registrar Documento</b></center></h2>
                            <label >Tipo</label>
                            <input maxlength="45" type="text"  name="Documento[Tipo]"   value="" required/>
                            <br>
                            <label >Fecha Renovacion</label>
                            <input maxlength="45" type="date"  name="Documento[FechaRenovacion]"   value="" required/>
                            <br>
                            <label >Fecha Vencimiento</label>
                            <input maxlength="45" type="date"  name="Documento[FechaVencimiento]"   value="" required/>
                            <br>  
                            <label >Numero</label>
                            <input maxlength="45" type="text"  name="Documento[Numero]"   value="" required/>
                            <br>                            
                            <label>Vehiculo</label>
                            <select name="Documento[Vehiculo_idVehiculo]"required="" >
                               <option>Vehiculo</option>
                                <?php foreach ($vehiculo as $vehi ) {?>
                                    <option value="<?= $vehi->idVehiculo ?>"><?= $vehi->Tipo ?></option>
                                   
                             <?php   } ?>
                            </select>
                            <br>
                    
                            <button type="reset" >Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
</div>
<?php include_once("Vistas/footer.php"); ?>
