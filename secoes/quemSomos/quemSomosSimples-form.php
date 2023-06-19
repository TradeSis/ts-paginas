<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
  <div class="col-sm-6">
    <label>nome Imagem</label>
    <input type="text" name="nomeImg" class="form-control" value="<?php echo $parametros["nomeImg"] ?>">
  </div>
  <div class="col-sm-6">
    <label>pasta Imagem</label>
    <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
  </div>
</div>

<div class="row mt-2">
  <div class="col-sm-6">
    <label>titulo</label>
    <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
  </div>
</div>
<div class="row  mt-2">
  <div class="col-sm-3">
     <label>Descrição</label>
    <textarea name="descricao" id="" cols="140" rows="15"><?php echo $parametros["descricao"] ?></textarea>
  </div>
</div>