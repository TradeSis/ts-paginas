<?php

/* include_once '../conexao.php'; */
include_once 'database/secaoServicos.php';

$servicos = buscaServicos();
/* echo json_encode($servicos); */
?>

<?php foreach ($servicos as $servico); ?>


<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">


        <div class="section-header">
        

          <h2><?php echo $servico["titulo"] ?></h2>
          <p><?php echo $servico["descricao"] ?></p>
          
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img" style="height: 200px; width:350px">
                <!-- <img src="assets/img/<?php echo $servico["imgCard1"] ?>" class="img-fluid" alt=""> -->
                <!-- <img src="assets/img/services-1.jpg" class="img-fluid" alt="">  -->
                <img src="admin/imgServicos/<?php echo $servico["imgCard1"] ?>" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-activity"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3><?php echo $servico["tituloCard1"] ?></h3>
                </a>
                <p><?php echo $servico["descricaoCard1"] ?>.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img" style="height: 200px; width:350px">
                <!-- <img src="assets/img/<?php echo $servico["imgCard2"] ?>" class="img-fluid" alt=""> -->
                <!-- <img src="assets/img/services-2.jpg" class="img-fluid" alt=""> -->
                <img src="admin/imgServicos/<?php echo $servico["imgCard2"] ?>" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3><?php echo $servico["tituloCard2"] ?></h3>
                </a>
                <p><?php echo $servico["descricaoCard2"] ?>.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="img" style="height: 200px; width:350px">
                <!-- <img src="assets/img/<?php echo $servico["imgCard3"] ?>" class="img-fluid" alt=""> -->
                <!-- <img src="imagens/sem_foto.png" class="img-fluid" alt=""> -->
                <img src="admin/imgServicos/<?php echo $servico["imgCard3"] ?>" class="img-fluid" alt="" >
              
              </div>
              <div class="details position-relative">
                <div class="icon">
                  <i class="bi bi-easel"></i>
                </div>
                <a href="#" class="stretched-link">
                  <h3><?php echo $servico["tituloCard3"] ?></h3>
                </a>
                <p><?php echo $servico["descricaoCard3"] ?>.</p>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->