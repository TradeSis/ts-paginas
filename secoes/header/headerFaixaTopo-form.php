<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="container" style="margin-top: 10px">
    
        <div class="row">
            <div class="col-sm-6" style="margin-top: 10px">
                <label>Pasta Imagem</label>
                <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
            </div>
            <div class="col-sm-6" style="margin-top: 10px">
                <label>Nome Imagem</label>
                <input type="text" name="nomeImg" class="form-control" value="<?php echo $parametros["nomeImg"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>textoWhatsapp</label>
                <input type="text" name="textoWhatsapp" class="form-control" value="<?php echo $parametros["textoWhatsapp"] ?>">
            </div>
            <div class="col-sm-6">
                <label>textoEmail</label>
                <input type="text" name="textoEmail" class="form-control" value="<?php echo $parametros["textoEmail"] ?>">
            </div>
        </div>



 
</div>
