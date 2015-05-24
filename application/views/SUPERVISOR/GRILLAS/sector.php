<? if ($cantidad == 0): ?>
    <label>no registra sectores!!</label>
<? else: ?>
    <table>
        <thead align="center">
        <th>N°</th>    
        <th>Nombre</th>
        <th>Ciudad</th>
        <th>Observacion</th>
        <th>Estado</th>    
        <th>Borrar</th> 
        <th>Cargar</th> 
    </thead>
    <tbody>
        <? $i = 0; ?>
        <?php foreach ($sectores as $filas): ?>
            <? $i++; ?>
            <? if ($i % 2 == 0): ?>
            <tr align="center">
                <td><?= $filas->id_sector; ?></td>        
                <td><?= $filas->nombre_sector; ?></td>
                <td><?= $filas->nombre_ciudad; ?></td>
                <td><?= $filas->observacion; ?></td>
                <td><?= $filas->estado; ?></td>        
                <td><button onclick="eliminar_sector(<?= $filas->id_sector; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>        
                <td><button onclick="cargar_sector(<?= $filas->id_sector; ?>, '<?= $filas->nombre_sector; ?>', '<?= $filas->nombre_ciudad; ?>', '<?= $filas->observacion; ?>', '<?= $filas->estado; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
            <? else: ?>
            <tr align="center" class="alt">
                <td><?= $filas->id_sector; ?></td>        
                <td><?= $filas->nombre_sector; ?></td>
                <td><?= $filas->nombre_ciudad; ?></td>
                <td><?= $filas->observacion; ?></td>
                <td><?= $filas->estado; ?></td>        
                <td><button onclick="eliminar_sector(<?= $filas->id_sector; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>        
                <td><button onclick="cargar_sector(<?= $filas->id_sector; ?>, '<?= $filas->nombre_sector; ?>', '<?= $filas->nombre_ciudad; ?>', '<?= $filas->observacion; ?>', '<?= $filas->estado; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
           <? endif; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
<? endif;
