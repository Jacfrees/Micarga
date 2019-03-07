<?php include_once("Vistas/header.php"); ?>

    <div class="container">
                             <title>LISTADO DE CONDUCTORES</title>

                            <form action="" method="post" class="">
                            
                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Conductor[Nombre]"   value="" required/>
                            <br>
                            <label >Cedula</label>
                            <input maxlength="45" type="text"  name="Conductor[Cedula]"   value="" required/>
                            <br>
                            <label >Numero Celular</label>
                            <div class="col-8 col-12-xsmall"><input maxlength="45" type="text"  name="Conductor[NumCelular]"   value="" required/></div>
                            <br>  
                            <label >Licencia Conduccion</label>
                            <input maxlength="45" type="text"  name="Conductor[LicConduccion]"   value="" required/>
                            <br>
                            <label>Vencimiento Licencia</label>
                            <input maxlength="45" type="date"  name="Conductor[VenLicencia]"   value="" required/>
                            <br>

                            
                        <button type="reset" >Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </form> 
                    </div>
                        

<?php include_once("Vistas/footer.php"); ?>