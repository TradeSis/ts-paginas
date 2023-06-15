<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-4" style="margin-top: 10px">
        <label>textoFooter1</label>
        <input type="text" name="textoFooter1" class="form-control" value="<?php echo $parametros["textoFooter1"] ?>">
    </div>
    <div class="col-sm-8" style="margin-top: 10px">
        <label>textoFooter2</label>
        <input type="text" name="textoFooter2" class="form-control" value="<?php echo $parametros["textoFooter2"] ?>">
    </div>
</div>

