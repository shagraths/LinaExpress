<table>    
    <thead align="center">
        <th>N°</th>
        <th>Fecha Entrega</th>
        <th>Tipo Carta</th>
        <th>Numero Carta</th>
        <th>Rit</th>
        <th>Nombre Receptor</th>
        <th>Dirección</th>
        <th>Ciudad</th>
        <th>Tipo Destino</th>
        <th>Telefono</th>
    </thead>
    <tbody>
    <? $i = 0; ?>     
    <?php foreach($excel as $row) : ?> 
        <? if ($i == 0): ?>
            <td><?$i++ ?></td>
        <? else: ?>
                <? if ($i % 2 == 0): ?>            
                 <tr align="center">
                    <td><?= $i++ ?></td>
                    <?php foreach ($row as $col) : ?>
                        <td><?=$col?></td>
                    <?php endforeach; ?>
                 </tr>               
            <? else: ?>    
                <tr align="center" class="alt">
                     <td><?= $i++ ?></td>
                    <?php foreach ($row as $col) : ?>
                        <td><?=$col?></td>
                    <?php endforeach; ?>
                </tr> 
             <? endif; ?> 
        <? endif;?>
        
    <?php endforeach; ?>
</table>