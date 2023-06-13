<?php
$parametros = json_decode($secaoPagina["parametros"],true);
$cards = $parametros["cards"];
?>

<section>
      <div class="container-flex" data-aos="zoom-out">

        <div class="row g-0 d-flex justify-content-center">
        <?php foreach ($cards as $card) { ?>
        <div class=" mt-3 mr-2" style="width: 18rem;">
          <a href="<?php echo $card["href"] ?>"><img class="card-img-top" src="<?php echo URLROOT .$parametros["pastaImg"] . $card["img"] ?>" alt="Card image cap"></a>
          <div class="card-body">
            <h6 class="card-title">
              <?php echo $card["textoCard"] ?>
            </h6>
          </div>
        </div>
      <?php } ?>
        </div>

      </div>
</section>