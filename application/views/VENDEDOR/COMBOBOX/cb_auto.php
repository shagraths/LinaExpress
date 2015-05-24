<?php foreach ($datos as $fila):?>
<option value="<?=$fila->Codigo_a?>"><?=$fila->Marca?> <?=$fila->Modelo?> <?=$fila->Color?> $<?=$fila->Precio_a?></option>
<?php endforeach; ?>
