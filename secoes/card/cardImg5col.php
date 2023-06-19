<?php
$parametros = json_decode($secaoPagina["parametros"], true);

?>

<section>
  <div class="container-flex" data-aos="zoom-out">

    <div class="row g-0 d-flex justify-content-center">

      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $parametros["href1"] ?>"><img class="card-img-top" src="<?php echo URLROOT . $parametros["pastaImg"] . $parametros["img1"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $parametros["tituloCard1"] ?>
          </h6>
        </div>
      </div>

      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $parametros["href2"] ?>"><img class="card-img-top" src="<?php echo URLROOT . $parametros["pastaImg"] . $parametros["img2"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $parametros["tituloCard2"] ?>
          </h6>
        </div>
      </div>

      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $parametros["href3"] ?>"><img class="card-img-top" src="<?php echo URLROOT . $parametros["pastaImg"] . $parametros["img3"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $parametros["tituloCard3"] ?>
          </h6>
        </div>
      </div>

      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $parametros["href4"] ?>"><img class="card-img-top" src="<?php echo URLROOT . $parametros["pastaImg"] . $parametros["img4"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $parametros["tituloCard4"] ?>
          </h6>
        </div>
      </div>

      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $parametros["href5"] ?>"><img class="card-img-top" src="<?php echo URLROOT . $parametros["pastaImg"] . $parametros["img5"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $parametros["tituloCard5"] ?>
          </h6>
        </div>
      </div>

    </div>

  </div>
</section>