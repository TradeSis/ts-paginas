<?php
$parametros = json_decode($secaoPagina["parametros"], true);
$listas = json_decode($secaoPagina["listas"], true);
?>

<section>
  <div class="container-flex" data-aos="zoom-out">

    <div class="row g-0 d-flex justify-content-center">
    <?php foreach ($listas as $lista) { ?>
      <div class=" mt-3 mr-2" style="width: 18rem;">
        <a href="<?php echo $lista["href"] ?>"><img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $lista["img"] ?>" alt="Card image cap"></a>
        <div class="card-body">
          <h6 class="card-title">
            <?php echo $lista["tituloCard"] ?>
          </h6>
        </div>
      </div>
      <?php } ?>
     
    </div>

  </div>
</section>