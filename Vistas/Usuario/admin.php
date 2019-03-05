<!DOCTYPE html>
<html>
<head>
<body>
 
                        <h2><b><center> Listado De Usuarios</b></center></h2>
                        <br>
   
                        <table align="center"  border="1" >
                        <tr>
                        <th >id</th>
                        <th >Nombre</th>
                        <th >Documento</th>
                        <th >Telefono</th>
                        <th >Perfil</th>
                        <th >Password</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach ($usu as $usua) {?>

    <tr> 
    <td><?= $usu->idUsuario; ?></td>
    <td><?= $usu->Nombre;?></td>
    <td><?= $usu->Documento;?></td>
    <td><?= $usu->Telefono;?></td>
    <td><?= $usu->Perfil;?></td>
    <td><?= $usu->Password;?></td>
    <td >

       

            <button>
                <a href="index.php?c=Usuario&a=update&id=<?= $usu->idUsuario; ?>"> Editar</a>
                
            </button>
            <button>
                <a href="index.php?c=Usuario&a=delete&id=<?=$usu->idUsuario; ?>"> Eliminar</a>
            </button>
          
            </td>
    </tr>

    <?php } ?>
       
	</table>
 
</body>
</html>