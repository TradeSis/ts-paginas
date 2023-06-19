<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-4" style="margin-top: 10px">
        <label>texto1</label>
        <input type="text" name="texto1" class="form-control" value="<?php echo $parametros["texto1"] ?>">
    </div>
    <div class="col-sm-8" style="margin-top: 10px">
        <label>texto2</label>
        <input type="text" name="texto2" class="form-control" value="<?php echo $parametros["texto2"] ?>">
    </div>
</div>

