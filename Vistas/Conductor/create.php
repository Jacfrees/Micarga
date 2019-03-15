<?php include_once("Vistas/header.php"); ?>

    <div class="class1">
                             <h2><b><center> Registrar Conductor</b></center></h2>

                            <form action="" method="post" class="container">
                            
                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Conductor[Nombre]"   value="" required="" autocomplete="off">
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"  name="Conductor[Documento]"   value="" required/ autocomplete="off">
                            <br>
                            <label >Numero Celular</label>
                            <div><input maxlength="45" type="text"  name="Conductor[NumCelular]"   value="" required/ autocomplete="off"></div>
                            <br>  
                            <label >Licencia Conduccion</label>
                            <input maxlength="45" type="text"  name="Conductor[LicConduccion]"   value="" required/ autocomplete="off">
                            <br>
                            <label>Vencimiento Licencia</label>
                            <input maxlength="45" type="date"  name="Conductor[VenLicencia]"   value="" required/ autocomplete="off">
                            <br>

                            
                        <button type="reset" >Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </form> 
                    </div>
                        

<?php include_once("Vistas/footer.php"); ?>