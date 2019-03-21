<?php include_once("Vistas/header.php"); ?>

<div class="class1">
                        <h2><b><center> Listado De Conductores</b></center></h2>
   
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th >Nombre</th>
                        <th >Documento</th>
                        <th >Numero Celular</th>
                        <th >Licencia Conduccion</th>
                        <th >Vencimiento Licencia</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach($ms as $ss) {?>

    <tr> 
    <td><?= $ss->Nombre;?></td>
    <td><?= $ss->Documento;?></td>
    <td><?= $ss->NumCelular;?></td>
    <td><?= $ss->LicConduccion;?></td>
    <td><?= $ss->VenLicencia;?></td>
    <td >

                <a href="index.php?c=Conductor&a=update&id=<?= $ss->idConductor; ?>" class="boton_personalizado2"> Editar</a>
                
                <a href="index.php?c=Conductor&a=delete&id=<?=$ss->idConductor; ?>" class="boton_personalizado1"> Eliminar</a>
          
            </td>
    </tr>

    <?php } ?>
       
	</table>
     <script type="text/javascript" >
            function eliminar(id){
                swal({
                    title: "Esta seguro?",
                    text: "Esta empresa se eliminara!",
                    icon: "error",
                    buttons: true,
                    dangerMode: true
                  }).then((willDelete) => {
                    if (willDelete) {
                        swal("Muy bien!", "Se ha eliminado","success");
                        setTimeout(function(){
                        location.href="index.php?c=clientes&a=delete&id="+id;
                    }, 1000);
                    }
                  });
            }
             
    </script>
</div>
 
<?php include_once("Vistas/footer.php"); ?>