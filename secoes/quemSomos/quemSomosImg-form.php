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
</div>

<div class="row">
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Pasta Imagem</label>
        <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Nome Imagem</label>
        <input type="text" name="nomeImg" class="form-control" value="<?php echo $parametros["nomeImg"] ?>">
    </div>
    <div class="col-sm-4" style="margin-top: 10px">
        <label>Imagem Fundo</label>
        <input type="text" name="nomeImgFundo" class="form-control" value="<?php echo $parametros["nomeImgFundo"] ?>">
    </div>
</div>

<div class="row  mt-2">
  <div class="col-sm-3">
     <label>Descrição</label>
    <textarea name="descricao" id="" cols="140" rows="15"><?php echo $parametros["descricao"] ?></textarea>
  </div>
</div>
