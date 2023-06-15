<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Sub-Titulo</label>
        <input type="text" name="subTitulo" class="form-control" value="<?php echo $parametros["subTitulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Texto Botão</label>
        <input type="text" name="textoBotao" class="form-control" value="<?php echo $parametros["textoBotao"] ?>">
    </div>
</div>