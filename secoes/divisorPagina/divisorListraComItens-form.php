<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);

?>

<div class="row">
    <div class="col-sm-12" style="margin-top: 10px">
        <label>Titulo</label>
        <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
    </div>
    <div class="col-sm-12" style="margin-top: 10px">
        <label>item 1</label>
        <input type="text" name="item1" class="form-control" value="<?php echo $parametros["item1"] ?>">
    </div>
    <div class="col-sm-12" style="margin-top: 10px">
        <label>item 2</label>
        <input type="text" name="item2" class="form-control" value="<?php echo $parametros["item2"] ?>">
    </div>
    <div class="col-sm-12" style="margin-top: 10px">
        <label>item 3</label>
        <input type="text" name="item3" class="form-control" value="<?php echo $parametros["item3"] ?>">
    </div>
    <div class="col-sm-12" style="margin-top: 10px">
        <label>item 4</label>
        <input type="text" name="item4" class="form-control" value="<?php echo $parametros["item4"] ?>">
    </div>
    <div class="col-sm-12" style="margin-top: 10px">
        <label>item 5</label>
        <input type="text" name="item5" class="form-control" value="<?php echo $parametros["item5"] ?>">
    </div>

</div>
