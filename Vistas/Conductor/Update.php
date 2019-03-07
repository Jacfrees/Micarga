<?php include_once("Vistas/header.php"); ?>


<div class="class1">
    
    <h2 align="center" >Actualizar Conductor</h2>

    <form method="post" class="container" autocomplete="off">
                                <label >Nombre</label>
                                <input maxlength="45" type="text"  name="Conductor[Nombre]" 
                                value="<?= $Conductor->Nombre ?>" required/>
                                <br>
                                <label >Cedula</label>
                                <input maxlength="45" type="text"  name="Conductor[Cedula]"   
                                value="<?= $Conductor->Cedula ?>" required/>
                                 <br>
                               <label >Numero Celular</label>
                                <input maxlength="45" type="text"  name="Conductor[NumCelular]"  
                                value="<?= $Conductor->NumCelular ?>" required/>
                                <br>
                                 <label >Licencia Conduccion</label>
                                <input maxlength="45" type="text"  name="Conductor[LicConduccion]"   
                                value="<?= $Conductor->LicConduccion ?>" required/>
                                  <br>
                                 <label > Vencimiento Licencia</label>
                                <input maxlength="45" type="date"  name="Conductor[VenLicencia]"   
                                value="<?= $Conductor->VenLicencia ?>" >
                                  <br>
                               
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
</div>
 
<?php include_once("Vistas/footer.php"); ?>     

