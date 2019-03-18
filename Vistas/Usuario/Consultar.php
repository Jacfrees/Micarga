<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar</title>
</head>
<body>
<br><br>
<center><a href="index.php?c=Usuario&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">id</th> 
      <th scope="col">Nombre</th> 
      <th scope="col">Documento</th> 
      <th scope="col">Telefono</th> 
      <th scope="col">Perfil</th> 
      <th scope="col">Password</th> 
     
      
    </tr> 
    	   <?php foreach ($usua as $us) {?> 
    <tr> 
      <th scope="row"><?= $us->idUsuario; ?></th> 
      <td><?= $us->Nombre; ?></td> 
      <td><?= $us->Documento; ?></td> 
      <td><?= $us->Telefono; ?></td> 
      <td><?= $us->Perfil; ?></td> 
      <td><?= $us->Password; ?></td> 
       
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>