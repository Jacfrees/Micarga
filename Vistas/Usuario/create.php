<?php include_once("Vistas/header.php"); ?>  

 <div class="class1">
                                <h2><b><center> Registrar Conductor</b></center></h2>

                            <form action="" method="post" class="container" autocomplete="off">

                            <label >Nombre</label>
                            <input maxlength="45" type="text"  name="Usuario[Nombre]"   value="" required/>
                            <br>
                            <label >Documento</label>
                            <input maxlength="45" type="text"  name="Usuario[Documento]"   value="" required/>
                            <br>
                            <label >Telefono</label>
                            <input maxlength="45" type="text"  name="Usuario[Telefono]"   value="" required/>
                            <br>  
                            <label >Perfil</label>
                            <input maxlength="45" type="text"  name="Usuario[Perfil]"   value="" required/>
                            <br>
                            <label>Password</label>
                            <input maxlength="45" type="text"  name="Usuario[Password]"   value="" required/>
                            <br>
                           
                            
                        <button type="reset" >Cancelar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
</div>                          

  <?php include_once("Vistas/footer.php"); ?>                      