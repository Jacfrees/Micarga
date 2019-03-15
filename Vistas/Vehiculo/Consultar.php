<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar</title>
</head>
<body>
<br><br>
<center><a href="index.php?c=Vehiculo&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">id</th> 
      <th scope="col">PlacaCabezote</th> 
      <th scope="col">Modelo</th> 
      <th scope="col">Color</th> 
      <th scope="col">PlacaRemolque</th> 
      <th scope="col">CapacidadTanque</th>
      <th scope="col">CartaPropiedad</th> 
      <th scope="col">Seccional</th>
     
      
    </tr> 
    	    <?php foreach ($vehiculo as $veh) {?> 
    <tr> 
      <th scope="row"><?= $veh->idVehiculo; ?></th> 
      <td><?= $veh->PlacaCabezote; ?></td> 
      <td><?= $veh->Modelo; ?></td> 
      <td><?= $veh->Color; ?></td> 
      <td><?= $veh->PlacaRemolque; ?></td> 
      <td><?= $veh->CapacidadTanque; ?></td>
      <td><?= $veh->CartaPropiedad; ?></td>
      <td><?= $veh->Seccional; ?></td>
       
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>