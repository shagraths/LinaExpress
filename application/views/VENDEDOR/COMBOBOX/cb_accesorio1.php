<?php foreach ($datos as $fila):?>
<option value="<?=$fila->Codigo_acc?>"><?=$fila->Descripcion?> $<?=$fila->Precio?></option>
<?php endforeach; ?>
