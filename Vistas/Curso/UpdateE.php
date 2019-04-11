<?php include_once("Vistas/headerE.php"); ?>


<div class="class1">
    <h2 align="center" >Actualizar Curso</h2>

    <form method="post" class="container" autocomplete="off">

                               <label>Nombre Curso:</label>
                               <select name="Curso[Nombre]"  required="">
                               <option value="<?= $Curso->Nombre ?>"><?= $Curso->Nombre ?></option>
                               <option value="Manejo Defensivo">Manejo Defensivo</option>
                               <option value="Manejo De Extintores">Manejo De Extintores</option>
                               <option value="Sustancias Peligrosas">Sustancias Peligrosas</option>
                               <option value="Primeros Auxilios">Primeros Auxilios</option>
                               <option value="Trabajo En Alturas">Trabajo En Alturas</option>
                               <option value="Mecanica Basica">Mecanica Basica</option>
                               <option value="Examen De Aptitud">Examen De Aptitud</option>
                               </select>
                               <br>
                                <label >Fecha Inicio</label>
                                <input maxlength="45" type="date"  name="Curso[FechaInicio]"   
                                value="<?= $Curso->FechaInicio ?>" required/>
                                 <br>
                                <label > Fecha Vencimiento</label>
                                <input maxlength="45" type="date"  name="Curso[FechaVencimiento]" 
                                value="<?= $Curso->FechaVencimiento ?>" required/>
                                <br>

                                <label>Conductor</label>
                                <select name="Curso[Conductor_idConductor]"required="" value="<?=$Curso->Conductor_idConductor ?>">
                                 <option value="<?= $con->idConductor ?>"> <?= $con->Documento ?></option>
                                <?php foreach ($conductor as $conduc ) {?>
                                    <option value="<?= $conduc->idConductor ?>"><?= $conduc->Documento ?></option>
                                   
                             <?php   } ?>
                            </select>
                               
                               
                            <button type="submit" class="boton_personalizado4">Guardar</button>
                            </form>
</div>
 
<?php include_once("Vistas/footer.php"); ?> 