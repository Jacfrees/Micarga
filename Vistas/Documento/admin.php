<?php include_once("Vistas/header.php"); ?>

 <div class="class1">
 <form role="form" >
                        <h2><b><center> Listado De Documentos</b></center></h2>
    
            <div >
             
                <input class="container" autocomplete="off"  id="searchTerm" type="text" onkeyup="doSearch()" name="query" placeholder="Buscar"onkeypress="return runScript(event)">
              
            </div>
  </form>
                      
                        <table align="center" id="datos" border="1" class="container">
                        <tr>
                        <th >Tipo</th>
                        <th >Fecha Renovacion</th>
                        <th >Fecha Vencimiento</th>
                        <th >Numero</th>
                        <th >Vehiculo</th>
                        <th >Estado</th>
                        <th >Acciones</th>
                
                        </tr>
                        <?php foreach ($Documento as $doc) {?>



            <tr> 
            <td><?= $doc->Tipo;?></td>
            <td><?= $doc->FechaRenovacion;?></td>
            <td><?= $doc->FechaVencimiento;?></td>
            <td><?= $doc->Numero;?></td>
            <td><?= $doc->vehi->Modelo;?></td>
            <td>
        <?php
            $hoy = date("Y-m-d");
            $proxVencer = date("Y-m-d",strtotime($doc->FechaVencimiento."- 8 days"));


            if($hoy>=date("Y-m-d",strtotime($doc->FechaVencimiento))){
                echo "<span title='Documento Vencido'><img src='images/icons/cancelar.png' /></span>";
            }else if($hoy>=$proxVencer){
                echo "<span title='Próximo a Vencer'><img src='images/icons/aler.png' /></span>";
            }else{
                echo "<span title='Correcto'><img src='images/icons/comprobado.png' /></span>";
            }
        ?>
    </td>
            
            <td >
                <a href="index.php?c=Documento&a=update&id=<?= $doc->idDocumento; ?>" class="boton_personalizado2">Editar</a>
           
                <a href="index.php?c=Documento&a=delete&id=<?=$doc->idDocumento; ?>" class="boton_personalizado1">Eliminar</a>
            
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