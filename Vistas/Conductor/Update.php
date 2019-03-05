<!DOCTYPE>
<html>
<head>
	<title>EDITAR CONDUCTOR</title>
<body>
<a href="index.php?c=Conductor&a=admin"><h4>Volver</h4></a>
<h2 align="center" >Actualizar Conductor></h2>



<form method="post">
<center>
                            <br>
                            <br>
                            <br>
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
                            <input maxlength="45" type="text"  name="Conductor[VenLicencia]"   
                            value="<?= $Conductor->VenLicencia ?>" required/>
                              <br>
                           
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                        </form>
                        <br><br><br>
 
      

</body>
</html>