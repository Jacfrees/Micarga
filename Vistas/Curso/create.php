<?php include_once("Vistas/header.php"); ?>

    <div class="class1">
                             <h2><b><center> Registrar Cursos</b></center></h2>

                            <form action="" method="post" class="container">
                            
                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Curso[Nombre]"   value="" required="" autocomplete="off">
                            <br>
                            <label >Fecha Inicio</label>
                            <input maxlength="45" type="date"  name="Curso[FechaInicio]"   value="" required/ autocomplete="off">
                            <br>
                            <label >Fecha Vencimiento</label>
                            <div><input maxlength="45" type="date"  name="Curso[FechaVencimiento]"   value="" required/ autocomplete="off"></div>
                            <br> 

                            <label>Conductor</label>
                            <select name="Curso[Conductor_idConductor]"required="" >
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