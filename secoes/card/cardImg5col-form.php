<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="container" style="margin-top: 10px">

    <div class="row form-group">
        <div class="col-sm-6">
            <label class='control-label' for='inputNormal' style="margin-top: 4px;">Cards</label>
            <textarea name="listas" id="" cols="130" rows="7"><?php echo $secoesPagina['listas'] ?></textarea>
        </div>
    </div>

</div>