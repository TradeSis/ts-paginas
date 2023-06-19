<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-6">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
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
    <div class="col-sm-12">
        <label>tituloLinks</label>
        <input type="text" name="tituloLinks" class="form-control" value="<?php echo $parametros["tituloLinks"] ?>">
    </div>
    <div class="col-sm-4">
        <label>lik 1</label>
        <input type="text" name="nome1" class="form-control" value="<?php echo $parametros["nome1"] ?>">
        <input type="text" name="href1" class="form-control" value="<?php echo $parametros["href1"] ?>">
    </div>
    <div class="col-sm-4">
        <label>lik 2</label>
        <input type="text" name="nome2" class="form-control" value="<?php echo $parametros["nome2"] ?>">
        <input type="text" name="href2" class="form-control" value="<?php echo $parametros["href2"] ?>">
    </div>
    <div class="col-sm-4">
        <label>lik 3</label>
        <input type="text" name="nome3" class="form-control" value="<?php echo $parametros["nome3"] ?>">
        <input type="text" name="href3" class="form-control" value="<?php echo $parametros["href3"] ?>">
    </div>
</div>

<div class="row mt-4">
    <div class="col-sm-3">
        <label>tituloContato</label>
        <input type="text" name="tituloContato" class="form-control" value="<?php echo $parametros["tituloContato"] ?>">
    </div>
    <div class="col-sm-3">
        <label>textoEndereco</label>
        <input type="text" name="textoEndereco" class="form-control" value="<?php echo $parametros["textoEndereco"] ?>">
    </div>
    <div class="col-sm-3">
        <label>textoWhatsapp</label>
        <input type="text" name="textoWhatsapp" class="form-control" value="<?php echo $parametros["textoWhatsapp"] ?>">
    </div>
    <div class="col-sm-3">
        <label>textoEmail</label>
        <input type="text" name="textoEmail" class="form-control" value="<?php echo $parametros["textoEmail"] ?>">
    </div>
</div>
<div class="row mt-2">
    <div class="col-sm-12">
        <label>textoFinal</label>
        <input type="text" name="textoFinal" class="form-control" value="<?php echo $parametros["textoFinal"] ?>">
    </div>

</div>
