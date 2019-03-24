<?php include_once("Vistas/header.php"); ?>
<div class="class1">
<form role="form" >
            <div >
             
                <input width="10px;" height="10px;" autocomplete="off"  id="searchTerm" type="text" onkeyup="doSearch()" name="query" placeholder="Buscar">
              
            </div>
  </form>

                        <h2><b><center> Listado De Usuarios</b></center></h2>
                        <br>
                       
                        <table align="center" id="datos" border="1" class="container">
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
  </script>
</div>    
 
<?php include_once("Vistas/footer.php"); ?>