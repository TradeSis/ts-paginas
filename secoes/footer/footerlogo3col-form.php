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
        <label>tituloContato</label>
        <input type="text" name="tituloContato" class="form-control" value="<?php echo $parametros["tituloContato"] ?>">
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
    <div class="col-sm-4">
        <label>tituloEndereco</label>
        <input type="text" name="tituloEndereco" class="form-control" value="<?php echo $parametros["tituloEndereco"] ?>">
    </div>
    <div class="col-sm-2">
        <label>textoEndereco</label>
        <input type="text" name="textoEndereco" class="form-control" value="<?php echo $parametros["textoEndereco"] ?>">
    </div>
    <div class="col-sm-2">
        <label>textoBairro</label>
        <input type="text" name="textoBairro" class="form-control" value="<?php echo $parametros["textoBairro"] ?>">
    </div>
    <div class="col-sm-2">
        <label>textoCep</label>
        <input type="text" name="textoCep" class="form-control" value="<?php echo $parametros["textoCep"] ?>">
    </div>
    <div class="col-sm-2">
        <label>textoCidade</label>
        <input type="text" name="textoCidade" class="form-control" value="<?php echo $parametros["textoCidade"] ?>">
    </div>
</div>
<div class="row mt-2">
    <div class="col-sm-4">
        <label>textoRedesSociais</label>
        <input type="text" name="textoRedesSociais" class="form-control" value="<?php echo $parametros["textoRedesSociais"] ?>">
    </div>

</div>

