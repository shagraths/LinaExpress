<? if ($cantidad == 0): ?>
    <label>no registra ciudades!!</label>
<? else: ?>
    <table>
        <thead align="center">
        <th>N°</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Observacion</th>
        <th>Estado</th>
        <th>Borrar</th>
        <th>Cargar</th>
    </thead>
    <tbody>
        <? $i = 0; ?>
        <?php foreach ($ciudades as $filas): ?>
            <? $i++; ?>
            <? if ($i % 2 == 0): ?>
            <tr align="center">
                <td><?= $filas->id_ciudad; ?></td>
                <td><?= $filas->nombre_ciudad; ?></td>        
                <td><?= $filas->tipo_ciudad; ?></td> 
                <td><?= $filas->observacion; ?></td>
                <td><?= $filas->estado; ?></td>        
                <td><button onclick="eliminar_ciudad(<?= $filas->id_ciudad; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>
                <td><button onclick="cargar_ciudad(<?= $filas->id_ciudad; ?>, '<?= $filas->nombre_ciudad; ?>', '<?= $filas->observacion; ?>', '<?= $filas->estado; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
            <? else: ?>
            <tr align="center" class="alt">
                <td><?= $filas->id_ciudad; ?></td>
                <td><?= $filas->nombre_ciudad; ?></td>        
                <td><?= $filas->tipo_ciudad; ?></td> 
                <td><?= $filas->observacion; ?></td>
                <td><?= $filas->estado; ?></td>        
                <td><button onclick="eliminar_ciudad(<?= $filas->id_ciudad; ?>)"><span class="ui-icon ui-icon-trash"></span></button></td>
                <td><button onclick="cargar_ciudad(<?= $filas->id_ciudad; ?>, '<?= $filas->nombre_ciudad; ?>', '<?= $filas->observacion; ?>', '<?= $filas->estado; ?>')"><span class="ui-icon ui-icon-circle-arrow-n"></span></button></td>    
            </tr>
        <? endif; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
<? endif;