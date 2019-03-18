<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar</title>
</head>
<body>
<br><br>
<center><a href="index.php?c=Curso&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">id</th> 
      <th scope="col">Nombre</th> 
      <th scope="col">FechaInicio</th> 
      <th scope="col">FechaVencimiento</th> 
      
     
    </tr> 
    	   <?php foreach($Curso as $ss) {?>
    <tr> 
      <th scope="row"><?= $ss->idCurso; ?></th> 
      <td><?= $ss->Nombre; ?></td> 
      <td><?= $ss->FechaInicio; ?></td> 
      <td><?= $ss->FechaVencimiento; ?></td> 
      
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>