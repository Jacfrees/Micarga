<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar</title>
</head>
<body>
<br><br>
<center><a href="index.php?c=Documento&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">id</th> 
      <th scope="col">Tipo</th> 
      <th scope="col">FechaRenovacion</th> 
      <th scope="col">FechaVencimiento</th> 
      <th scope="col">Numero</th> 
      
     
      
    </tr> 
    	    <?php foreach ($Documento as $doc) {?>
    <tr> 
      <th scope="row"><?= $doc->idDocumento; ?></th> 
      <td><?= $doc->Tipo; ?></td> 
      <td><?= $doc->FechaRenovacion; ?></td> 
      <td><?= $doc->FechaVencimiento; ?></td> 
      <td><?= $us->Numero; ?></td> 
      
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>