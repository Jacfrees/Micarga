<!DOCTYPE html>
<html>
<head>
<body>

                        <h2><b><center> Listado De Conductores</b></center></h2>
                        <br>
   
                        <table align="center"  border="1" >
                        <tr>
                        <th >id</th>
                        <th >Nombre</th>
                        <th >Cedula</th>
                        <th >Numero Celular</th>
                        <th >Licencia Conduccion</th>
                        <th >Vencimiento Licencia</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach($ms as $ss) {?>

    <tr> 
    <td><?= $ss->idConductor; ?></td>
    <td><?= $ss->Nombre;?></td>
    <td><?= $ss->Cedula;?></td>
    <td><?= $ss->NumCelular;?></td>
    <td><?= $ss->LicConduccion;?></td>
    <td><?= $ss->VenLicencia;?></td>
    <td >

       

            <button>
                <a href="index.php?c=Conductor&a=update&id=<?= $ss->idConductor; ?>"> Editar</a>
                
            </button>
            <button>
                <a href="index.php?c=Conductor&a=delete&id=<?=$ss->idConductor; ?>"> Eliminar</a>
            </button>
          
            </td>
    </tr>

    <?php } ?>
       
	</table>
 
</body>
</html>