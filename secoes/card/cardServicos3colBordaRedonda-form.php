<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="row">
    <div class="col-sm-6" style="margin-top: 10px">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-6" style="margin-top: 10px">
        <label>Descrição</label>
        <input type="text" name="descricao" class="form-control" value="<?php echo $parametros["descricao"] ?>">
    </div>
</div>
<div class="row">
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Pasta Imagem</label>
        <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>texto Botão</label>
        <input type="color" name="corCard" value="<?php echo $parametros["corCard"] ?>">
    </div>
</div>