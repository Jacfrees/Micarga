<?php include_once("Vistas/header.php"); ?>
<link rel="stylesheet" href="https://unpkg.com/rmodal/dist/rmodal.css" type="text/css" />
<script type="text/javascript" src="https://unpkg.com/rmodal/dist/rmodal.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div class="class1">

                        <h2><b><center> Listado De Usuarios</b></center></h2>
                        <br>
                        <form method="post" action="index.php?c=Usuario&a=view" autocomplete="off" > 
                        </form>
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th >Nombre</th>
                        <th >Documento</th>
                        <th >Telefono</th>
                        <th >Perfil</th>
                        <th >Password</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach ($usua as $us) {?>

    <tr> 
    <td><?= $us->Nombre;?></td>
    <td><?= $us->Documento;?></td>
    <td><?= $us->Telefono;?></td>
    <td><?= $us->Perfil;?></td>
    <td><?= $us->Password;?></td>
    <td >
                <a href="index.php?c=Usuario&a=update&id=<?= $us->idUsuario; ?>" class="boton_personalizado2"> Editar</a>
                <a href="index.php?c=Usuario&a=delete&id=<?=$us->idUsuario; ?>" class="boton_personalizado1"> Eliminar</a>
    </td>
    </tr>

    <?php } ?>
       
	</table>
     <script type="text/javascript" >
            function eliminar(id){
                swal({
                    title: "Esta seguro?",
                    text: "Esta ususario se eliminara!",
                    icon: "error",
                    buttons: true,
                    dangerMode: true
                  }).then((willDelete) => {
                    if (willDelete) {
                        swal("Muy bien!", "Se ha eliminado","success");
                        setTimeout(function(){
                        location.href="index.php?c=Usuario&a=delete&id="+id;
                    }, 1000);
                    }
                  });
            }
            
  </script>
</div>    
 
<?php include_once("Vistas/footer.php"); ?>