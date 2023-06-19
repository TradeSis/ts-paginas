<?php
include_once('../head.php');
include_once('../database/secaoPagina.php');

$parametros = json_decode($secoesPagina['parametros'], true);
?>

<div class="container" style="margin-top: 10px">
    
        <div class="row">
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Titulo</label>
                <input type="text" name="titulo" class="form-control" value="<?php echo $parametros["titulo"] ?>">
            </div>
            <div class="col-sm-4" style="margin-top: 10px">
                <label>subTitulo</label>
                <input type="text" name="subTitulo" class="form-control" value="<?php echo $parametros["subTitulo"] ?>">
            </div>
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Pasta Imagem</label>
                <input type="text" name="pastaImg" class="form-control" value="<?php echo $parametros["pastaImg"] ?>">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Imagem 1</label>
                <input type="text" name="img1" class="form-control" value="<?php echo $parametros["img1"] ?>">
                <label>link 1</label>
                <input type="text" name="href1" class="form-control" value="<?php echo $parametros["href1"] ?>">
            </div>
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Imagem 2</label>
                <input type="text" name="img2" class="form-control" value="<?php echo $parametros["img2"] ?>">
                <label>link 2</label>
                <input type="text" name="href2" class="form-control" value="<?php echo $parametros["href2"] ?>">
            </div>
            <div class="col-sm-4" style="margin-top: 10px">
                <label>Imagem 3</label>
                <input type="text" name="img3" class="form-control" value="<?php echo $parametros["img3"] ?>">
                <label>link 3</label>
                <input type="text" name="href3" class="form-control" value="<?php echo $parametros["href3"] ?>">
            </div>
           
        </div>

 
</div>
