<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar</title>
</head>
<body>
<br><br>
<center><a href="index.php?c=Conductor&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">id</th> 
      <th scope="col">Nombre</th> 
      <th scope="col">Documento</th> 
      <th scope="col">NumCelular</th> 
      <th scope="col">LicConduccion</th> 
      <th scope="col">VenLicencia</th> 
     
      
    </tr> 
    	   <?php foreach($ms as $ss) {?>
    <tr> 
      <th scope="row"><?= $ss->idConductor; ?></th> 
      <td><?= $ss->Nombre; ?></td> 
      <td><?= $ss->Documento; ?></td> 
      <td><?= $ss->NumCelular; ?></td> 
      <td><?= $ss->LicConduccion; ?></td> 
      <td><?= $ss->VenLicencia; ?></td> 
       
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>