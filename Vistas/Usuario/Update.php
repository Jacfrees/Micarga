<?php include_once("Vistas/header.php"); ?>

<div class="class1">

<h2 align="center" >Actualizar Usuario</h2>

<form method="post" autocomplete="off" class="container">
                           
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
                        </form>
</div>                        
 
      
<?php include_once("Vistas/footer.php"); ?>