<!DOCTYPE>
<html>
<head>
    <title>EDITAR USUARIO</title>
<body>
<a href="index.php?c=Usuario&a=admin"><h4>Volver</h4></a>
<h2 align="center" >Actualizar Usuario></h2>



<form method="post">
<center>
                            <br>
                            <br>
                            <br>
                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Usuario[Nombre]" 
                            value="<?= $Usuario->Nombre ?>" required/>
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"  name="Usuario[Documento]"   
                            value="<?= $Usuario->Documento ?>" required/>
                             <br>
                           <label >Telefono</label>
                            <input maxlength="45" type="text"  name="Usuario[Telefono]"  
                            value="<?= $Usuario->Telefono ?>" required/>
                            <br>
                             <label >Perfil</label>
                            <input maxlength="45" type="text"  name="Usuario[Perfil]"   
                            value="<?= $Usuario->Perfil ?>" required/>
                              <br>
                             <label > Password</label>
                            <input maxlength="45" type="text"  name="Usuario[Password]"   
                            value="<?= $Usuario->Password ?>" required/>
                              <br>
                           
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </center>
                        </form>
                        <br><br><br>
 
      

</body>
</html>