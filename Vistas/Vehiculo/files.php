<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>files</title>
    <link rel="stylesheet" type="text" href="">
    <link rel="stylesheet" type="text" href="">
</head>

    <center><blockquote class="blockquote text-center">
    <h1  class="display-5">Guardar pdf</h1> 
    </blockquote></center>
    
    <?php 
     $resultado = null;

     if(isset($_POST['formulario']))
     {
        $name = $_FILES['pdf']['name'];
        $tmp_name = $_FILES['pdf']['tmp_name'];
        $error = $_FILES['pdf']['error'];
        $size = $_FILES['pdf']['size'];
        $max_size = 2048 * 2048 * 2 ;
        $type = $_FILES['pdf']['type'];

        if($error)
        {
            $resultado = "ha ocurrido un error";
        }
        else if ($size > $max_size)
         {
            $resultado = "el tamaño supera  el maximo permitido. 79,4 KB";
        }
        else if ($type != 'Adobe Acrobat Document/pdf') 
         {
            $resultado = "archivos permitidos pdf";
        }
        else
        {
            $ruta = "file/$name";
            move_uploaded_file($tmp_name, $ruta);
            $resultado = "el pdf '$name' ha sido guardado";
        }
     }
 ?>
<center><strong><?php echo $resultado;  ?></strong>
 <form method="POST" enctype="multipart/form-data" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
    Subir pdf: <input type="file" name="pdf">
    <input type="hidden" name="formulario">
    <input type="submit" name="Subir"><br><br>
    
 </form></center>

 <center><a href="/Micarga/index.php?c=Vehiculo&a=admin" class="btn btn-outline-danger">volver</a></center>
</html>
