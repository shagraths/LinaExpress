<? if ($cantidad == 0): ?>
    <table>
        <thead align="center">
            <th>No registra Archivos!!</th>    
        </thead>
    </table>    
<? else: ?>
    <table>
        <thead align="center">
        <th>N°</th>    
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Fecha Subida</th>
        <th>Usuario Encargado</th> 
        <th>Estado</th>    
        <th>Borrar</th> 
        <th>Ver Planilla</th> 
    </thead>
    <tbody>
        <? $i = 0; ?>        
        <?php foreach ($archivos as $filas): ?>           
            <? $i++; ?>
            <? if ($i % 2 == 0): ?>
            <tr align="center">
                <td><?= $i;?></td>
                <td><?= $filas->Id_ExcelCliente; ?></td>        
                <td><?= $filas->NombreArchivo; ?></td>
                <td><?= $filas->FechaSubida; ?></td>
                <td><?= $filas->Nombres; ?></td>
                <td><?= $filas->Estado; ?></td>

                <td><button onclick="eliminarArchivo(<?= $filas->Id_ExcelCliente; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>        
                <td><button onclick="pdf_excelClientePlanilla('<?= $filas->NombreArchivo; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
            <? else: ?>
            <tr align="center" class="alt">
                <td><?= $i;?></td>
                <td><?= $filas->Id_ExcelCliente; ?></td>        
                <td><?= $filas->NombreArchivo; ?></td>
                <td><?= $filas->FechaSubida; ?></td>
                <td><?= $filas->Nombres; ?></td>
                <td><?= $filas->Estado; ?></td>        
                <td><button onclick="eliminarArchivo(<?= $filas->Id_ExcelCliente; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>        
                <td><button onclick="pdf_excelClientePlanilla('<?= $filas->NombreArchivo; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
           <? endif; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
<? endif;
