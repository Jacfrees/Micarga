<?php include_once("Vistas/header.php"); ?>

<div class="class1">
                        <h2><b><center> Listado De Usuarios</b></center></h2>
                        <br>
   
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th >Nombre</th>
                        <th >Documento</th>
                        <th >Telefono</th>
                        <th >Perfil</th>
                        <th >Password</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach ($usua as $us) {?>

    <tr> 
    <td><?= $us->Nombre;?></td>
    <td><?= $us->Documento;?></td>
    <td><?= $us->Telefono;?></td>
    <td><?= $us->Perfil;?></td>
    <td><?= $us->Password;?></td>
    <td >

       

            <button>
                <a href="index.php?c=Usuario&a=update&id=<?= $us->idUsuario; ?>"> Editar</a>
                
            </button>
            <button>
                <a href="index.php?c=Usuario&a=delete&id=<?=$us->idUsuario; ?>"> Eliminar</a>
            </button>
          
            </td>
    </tr>

    <?php } ?>
       
	</table>
</div>    
 
<?php include_once("Vistas/footer.php"); ?>