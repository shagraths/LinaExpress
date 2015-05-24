<? if ($cantidad == 0): ?>
    <label>no registra Facturas!!</label>
<? else: ?>
    <table>
        <thead align="center">
        <th>Codigo</th>
        <th>Fecha de compra</th>
        <th>Cliente</th>
        <th>Marca auto</th>
        <th>Modelo</th>
        <th>Color</th>   
        <th>Valor</th>
        <th>Estado FACTURA</th>
    </thead>
    <tbody>
        <? $i = 0; ?>        
        <?php foreach ($ventas as $filas): ?> 
        <? $i++; ?>
            <? if ($i % 2 == 0): ?>
                                <tr align="center">
                    <td><?= $filas->Codigo_f; ?></td>
                    <td><?= $filas->Fecha_Compra; ?></td>
                    <td><?= $filas->Nombre; ?> <?= $filas->Apellido_P; ?> <?= $filas->Apellido_M; ?></td>
                    <td><?= $filas->Marca; ?></td>
                    <td><?= $filas->Modelo; ?></td>
                    <td><?= $filas->Color; ?></td>
                    <td>$<?= $filas->Precio_a; ?></td>                    
                    <td><?= $filas->Estado_f; ?></td>
                </tr>
            <? else: ?>
                <tr align="center" class="alt">
                    <td><?= $filas->Codigo_f; ?></td>
                    <td><?= $filas->Fecha_Compra; ?></td>
                    <td><?= $filas->Nombre; ?> <?= $filas->Apellido_P; ?> <?= $filas->Apellido_M; ?></td>
                    <td><?= $filas->Marca; ?></td>
                    <td><?= $filas->Modelo; ?></td>
                    <td><?= $filas->Color; ?></td>
                    <td>$<?= $filas->Precio_a; ?></td>                    
                    <td><?= $filas->Estado_f; ?></td>
                </tr>
            <? endif; ?>
        <?php endforeach; ?>
    </tbody>
    </table>
<? endif; ?>
