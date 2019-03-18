<?php include_once("Vistas/header.php"); ?>

 <div class="class1">
                      
                            <h2><b><center> Listado De Documentos</b></center></h2>
 
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th >id</th>
                        <th >Tipo</th>
                        <th >Fecha Renovacion</th>
                        <th >Fecha Vencimiento</th>
                        <th >Numero</th>
                        <th >Vehiculo</th>
                        <th >Acciones</th>
                
                        </tr>
                        <?php foreach ($Documento as $doc) {?>



            <tr> 
            <td><?= $doc->idDocumento; ?></td>
            <td><?= $doc->Tipo;?></td>
            <td><?= $doc->FechaRenovacion;?></td>
            <td><?= $doc->FechaVencimiento;?></td>
            <td><?= $doc->Numero;?></td>
            <td><?= $doc->vehi->Modelo;?></td>
            
            <td >
             
            <button>
                <a href="index.php?c=Documento&a=update&id=<?= $doc->idDocumento; ?>">Editar</a>
                 
            </button>
            <button>
                <a href="index.php?c=Documento&a=delete&id=<?=$doc->idDocumento; ?>">Eliminar</a>
                 
            </button>

      
            </td>
            </tr>

    <?php } ?>
       
	</table>
</div>    
<?php include_once("Vistas/footer.php"); ?>