<?php
$parametro = json_decode($secaoPagina["parametros"],true);

?>
<!-- ======= Features Section ======= -->
    <section id="quem_somos" class="features" style="background-color: #D1D0D7"> <!-- #24AAC3 #bec3bc -->
      <div class="container" data-aos="fade-up">
        <div class="about row g-0">

            <div class="col-lg-6  position-relative">
           <div class="content d-flex flex-column justify-content-center h-100" >
           <!-- <img src="<?php echo URLROOT?>/img/brand/temp1.png"> -->
           <img src="<?php echo URLROOT. $parametro['pastaimg']?>/temp1.png" alt="">
             
            </div>
          </div>

          <div class="col-lg-6 ">
            <div class="content d-flex flex-column justify-content-center h-100" >
              <h1 style="font-weight: 900; color: #333333"><?php echo $parametro['titulo'] ?></h1>
              <p class="fst-italic">
              <br>
              <br>
              <br>
              </p>
              <p>
                <?php echo $parametro['descritivo'] ?>
              </p>
              
              <a href="#" class="btn btn-primary"><span><?php echo $parametro['textoBotao'] ?></span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          
        </div>
        
      </div>
    </section><!-- End Features Section -->