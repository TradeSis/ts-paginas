<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="container" style="margin-top: 10px">

    <div class="row form-group">
        <div class="col-sm-4" style="margin-top: 10px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">Titulo</label>
            <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
        </div>
        <div class="col-sm-4" style="margin-top: 10px">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">subTitulo</label>
            <input type="text" name="subTitulo" class="form-control" value="<?php echo $parametros["subTitulo"] ?>">
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-sm-6">
            <label class='control-label' for='inputNormal' style="margin-top: -20px;">imagens</label>
            <textarea name="listas" id="" cols="130" rows="7"><?php echo $secoesPagina['listas'] ?></textarea>
        </div>
    </div>


</div>