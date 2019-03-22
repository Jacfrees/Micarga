<?php include_once("Vistas/header.php"); ?>

 <div class="class1">
                      
                            <h2><b><center> Listado De Vehiculos</b></center></h2>
 
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th>Placa Cabezote</th>
                        <th>Modelo</th>
                        <th>Color</th>
                        <th>Placa Remolque</th>
                        <th>Capacidad Tanque</th>
                        <th>Carta Propiedad</th>
                        <th>Seccional</th>
                        <th>Conductor</th>
                        <th>Acciones</th>
                
                        </tr>
                        <?php foreach ($vehiculo as $veh) {?>



            <tr> 
            <td><?= $veh->PlacaCabezote;?></td>
            <td><?= $veh->Modelo;?></td>
            <td><?= $veh->Color;?></td>
            <td><?= $veh->PlacaRemolque;?></td>
            <td><?= $veh->CapacidadTanque;?></td>
            <td><?= $veh->CartaPropiedad;?></td>
            <td><?= $veh->Seccional;?></td>
            <td><?= $veh->Conduc->Documento;?></td>
            
            <td >
                <a href="index.php?c=Vehiculo&a=update&id=<?= $veh->idVehiculo; ?>" class="boton_personalizado2">Editar</a>
                <a href="index.php?c=Vehiculo&a=delete&id=<?=$veh->idVehiculo; ?>" class="boton_personalizado1">Eliminar</a>
            </td>
            </tr>

    <?php } ?>
       
	</table>
</div>    
<?php include_once("Vistas/footer.php"); ?>