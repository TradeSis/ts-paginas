<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="container" style="margin-top: 10px">
    
        <div class="row">
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Pasta Imagem</label>
                <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>Titulo Card 1</label>
                <input type="text" name="tituloCard1" class="form-control" value="<?php echo $parametros["tituloCard1"] ?>">
            </div>
            <div class="col-sm-3">
                <label>Imagem 1</label>
                <input type="text" name="img1" class="form-control" value="<?php echo $parametros["img1"] ?>">
            </div>
            <div class="col-sm-3">
                <label>link 1</label>
                <input type="text" name="href1" class="form-control" value="<?php echo $parametros["href1"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>Titulo Card 2</label>
                <input type="text" name="tituloCard2" class="form-control" value="<?php echo $parametros["tituloCard2"] ?>">
            </div>
            <div class="col-sm-3">
                <label>Imagem 2</label>
                <input type="text" name="img2" class="form-control" value="<?php echo $parametros["img2"] ?>">
            </div>
            <div class="col-sm-3">
                <label>link 2</label>
                <input type="text" name="href2" class="form-control" value="<?php echo $parametros["href2"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>Titulo Card 3</label>
                <input type="text" name="tituloCard3" class="form-control" value="<?php echo $parametros["tituloCard3"] ?>">
            </div>
            <div class="col-sm-3">
                <label>Imagem 3</label>
                <input type="text" name="img3" class="form-control" value="<?php echo $parametros["img3"] ?>">
            </div>
            <div class="col-sm-3">
                <label>link 3</label>
                <input type="text" name="href3" class="form-control" value="<?php echo $parametros["href3"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>Titulo Card 4</label>
                <input type="text" name="tituloCard4" class="form-control" value="<?php echo $parametros["tituloCard4"] ?>">
            </div>
            <div class="col-sm-3">
                <label>Imagem 4</label>
                <input type="text" name="img4" class="form-control" value="<?php echo $parametros["img4"] ?>">
            </div>
            <div class="col-sm-3">
                <label>link 4</label>
                <input type="text" name="href4" class="form-control" value="<?php echo $parametros["href4"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <label>Titulo Card 5</label>
                <input type="text" name="tituloCard5" class="form-control" value="<?php echo $parametros["tituloCard5"] ?>">
            </div>
            <div class="col-sm-3">
                <label>Imagem 5</label>
                <input type="text" name="img5" class="form-control" value="<?php echo $parametros["img5"] ?>">
            </div>
            <div class="col-sm-3">
                <label>link 5</label>
                <input type="text" name="href5" class="form-control" value="<?php echo $parametros["href5"] ?>">
            </div>
        </div>

 
</div>
