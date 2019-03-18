<?php include_once("Vistas/header.php"); ?>

<div class="class1">
                        <h2><b><center> Listado De Cursos</b></center></h2>
   
                        <table align="center"  border="1" class="container">
                        <tr>
                        <th>id</th>
                        <th >Nombre</th>
                        <th >Fecha Inicio</th>
                        <th >Fecha Vencimiento</th>
                         <th>Conductor</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach($Curso as $ss) {?>

    <tr> 
    <td><?$ss->idCurso;?></td>
    <td><?= $ss->Nombre;?></td>
    <td><?= $ss->FechaInicio;?></td>
    <td><?= $ss->FechaVencimiento;?></td>
    <td><?= $ss->Conduc->Cedula;?></td>
   
    <td >

       

            <button>
                <a href="index.php?c=Curso&a=update&id=<?= $ss->idCurso; ?>"> Editar</a>
                
            </button>
            <button>
                <a href="index.php?c=Curso&a=delete&id=<?=$ss->idCurso; ?>"> Eliminar</a>
            </button>
          
            </td>
    </tr>

    <?php } ?>
       
	</table>
    </div>
 
<?php include_once("Vistas/footer.php"); ?>
