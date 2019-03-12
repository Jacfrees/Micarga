<?php include_once("Vistas/header.php"); ?>


<div class="class1">
    <a href="index.php?c=Curso&a=admin"><h4>Volver</h4></a>
    <h2 align="center" >Actualizar Curso</h2>

    <form method="post" class="container" autocomplete="off">
    <center>
                                <label >Nombre</label>
                                <input maxlength="45" type="text"  name="Curso[Nombre]" 
                                value="<?= $Curso->Nombre ?>" required/>
                                <br>
                                <label >Fecha Inicio</label>
                                <input maxlength="45" type="date"  name="Curso[FechaInicio]"   
                                value="<?= $Curso->FechaInicio ?>" required/>
                                 <br>
                               <label > Fecha Vencimiento</label>
                                <input maxlength="45" type="date"  name="Curso[FechaVencimiento]" 
                                value="<?= $Curso->FechaVencimiento ?>" required/>
                                <br>
                                 <select name="Vehiculo[Conductor_idConductor]"required="">
                                <option value="<?= $con->idConductor ?>"> <?= $con->Nombre ?></option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Nombre ?></option>
                                   
                             <?php   } ?>
                            </select>
                               
                               
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
</div>
 
<?php include_once("Vistas/footer.php"); ?> 