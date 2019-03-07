<!DOCTYPE html>
<html>
<head>
<body>

 
                            <br><br><br>
                            <h2><b><center> Listado De Vehiculos</b></center></h2>
                            <br>
 
                        <table align="center"  border="1" >
                        <tr>
                        <th >id</th>
                        <th >Placa Cabezote</th>
                        <th >Modelo</th>
                        <th >Color</th>
                        <th >Placa Remolque</th>
                        <th >Capacidad Tanque</th>
                        <th >Carta Propiedad</th>
                        <th >Conductor</th>
                        <th >Acciones</th>
                
                        </tr>
                        <?php foreach ($vehiculo as $veh) {?>



            <tr> 
            <td><?= $veh->idVehiculo; ?></td>
            <td><?= $veh->PlacaCabezote;?></td>
            <td><?= $veh->Modelo;?></td>
            <td><?= $veh->Color;?></td>
            <td><?= $veh->PlacaRemolque;?></td>
            <td><?= $veh->CapacidadTanque;?></td>
            <td><?= $veh->CartaPropiedad;?></td>
            <td><?= $veh->Conductor_idConductor;?></td>
            
            <td >
             
            <button>
                <a href="index.php?c=Vehiculo&a=update&id=<?= $veh->idVehiculo; ?>">Editar</a>
                 
            </button>
            <button>
                <a href="index.php?c=Vehiculo&a=delete&id=<?=$veh->idVehiculo; ?>">Eliminar</a>
                 
            </button>

      
            </td>
            </tr>

    <?php } ?>
       
	</table>
</body>
</html>