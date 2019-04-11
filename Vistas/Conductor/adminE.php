<?php include_once("Vistas/headerE.php"); ?>

<div class="class1">
     <?php
    if (isset($_GET["error"])){
        echo "<h3>Este Conductor ya existe</h3>";
        }
        ?>
<form role="form" >
<h2><b><center> Listado De Conductores</b></center></h2>


<script type="text/javascript" src="https://unpkg.com/rmodal/dist/rmodal.js"></script>
    
    
             
                <input class="container" autocomplete="off"  id="searchTerm" type="text" onkeyup="doSearch()" name="query" placeholder="Buscar"onkeypress="return runScript(event)">
              
 </form>
   
                        <table align="center" id="datos" border="1" class="container">
                        <tr>
                        <th >Nombre</th>
                        <th >Apellido</th>
                        <th >Documento</th>
                        <th >Numero Celular</th>
                        <th >Licencia Conduccion</th>
                        <th >Vencimiento Licencia</th>
                        <th >Acciones</th>
                        </tr>
            <?php foreach($ms as $ss) {?>

    <tr> 
    <td><?= $ss->Nombre;?></td>
    <td><?= $ss->Apellido;?></td>
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
    <script type="text/javascript">
        function doSearch()
        {
            var tableReg = document.getElementById('datos');
            var searchText = document.getElementById('searchTerm').value.toLowerCase();
            var cellsOfRow="";
            var found=false;
            var compareWith="";
 
            // Recorremos todas las filas con contenido de la tabla
            for (var i = 1; i < tableReg.rows.length; i++)
            {
                cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
                found = false;
                // Recorremos todas las celdas
                for (var j = 0; j < cellsOfRow.length && !found; j++)
                {
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();
                    // Buscamos el texto en el contenido de la celda
                    if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
                    {
                        found = true;
                    }
                }
                if(found)
                {
                    tableReg.rows[i].style.display = '';
                } else {
                    // si no ha encontrado ninguna coincidencia, esconde la
                    // fila de la tabla
                    tableReg.rows[i].style.display = 'none';
                }
            }
        }
     function runScript(e) {
    //See notes about 'which' and 'key'
    if (e.keyCode == 13) {
        var tb = document.getElementById("searchTerm");
        eval(tb.value);
        return false;
    }
}
  </script>

     
</div>
 
<?php include_once("Vistas/footer.php"); ?>