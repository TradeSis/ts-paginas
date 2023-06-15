<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
$cards = $parametros["cardImgs"];
?>

<div class="row">
    <div class="col-sm-8" style="margin-top: 10px">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Pasta Imagem</label>
        <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-12" style="margin-top: 10px">
        <label>cardImgs</label>
      
        <textarea name="parametrosVariados" id="" cols="130" rows="5"></textarea>
    </div>
</div>