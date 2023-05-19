<?php

include_once 'database/secaoMarcas.php';

$marcas = buscaMarcas();
/* echo json_encode($marcas); */
?>

<!-- ======= About Section/MARCAS ======= -->
    <section id="marcas" class="marcas">
<center>
  <h1>Marcas</h1>
</center>
    </section><!-- End About Section -->

    <!-- ======= Clients Section/MARCAS ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-out">

      

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">

          <?php 
          foreach ($marcas as $marca) { 
          ?>
    
            <div class="swiper-slide"><img src="admin/imgMarcas/<?php echo $marca["imgMarca"] ?>" class="img-fluid" alt=""></div>

          <?php } ?>

          </div>
        </div>

      </div>
    </section><!-- End Clients Section -->