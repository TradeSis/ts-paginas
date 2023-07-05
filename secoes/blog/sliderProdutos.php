<?php
    include_once(ROOT . '/sistema/database/produtos.php');
    $produtos = buscaCardProdutos();
   //echo json_encode($produtos);
?>
<style>


</style>
<?php foreach($produtos as $produto){ ?>
  <?php } ?>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo URLROOT ?>/img/logo_comcacau.png" alt="First slide">
    </div>
    <?php foreach($produtos as $produto){ ?>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT ?>/img/<?php echo $produto['imgProduto'] ?>" alt="Second slide">
    </div>
    <?php } ?>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="sidebar-item mt-2 shadow">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo URLROOT ?>/img/marcas.svg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT ?>/img/eventos.svg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo URLROOT ?>/img/noticias.svg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<center>
  <br>
<hr>
  <p>titulo do produto</p>
</center>
</div>

