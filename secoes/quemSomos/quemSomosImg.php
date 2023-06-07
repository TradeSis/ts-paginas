<?php
$parametro = json_decode($secaoPagina["parametros"],true);

?>
<style>
  p{
    color: #ffffff;
  }
  h1{
    color: #ffffff;
    font-weight: 900
  }

  #quem_somos{
    background-image: url('<?php echo URLROOT?>/img/brand/fundoQuemSomos.png');
  }
</style>
<!-- ======= Features Section ======= -->
    <section id="quem_somos" class="features">
      <div class="container" data-aos="fade-up">
        <div class="about row g-0">

            <div class="col-lg-6  position-relative">
           <div class="content d-flex flex-column justify-content-center h-100" >
           <img src="<?php echo URLROOT. $parametro['pastaimg']?>/temp1.png" alt="">
             
            </div>
          </div>

          <div class="col-lg-6 ">
            <div class="content d-flex flex-column justify-content-center h-100" >
              <h1><?php echo $parametro['titulo'] ?></h1>
              <p class="fst-italic">
              <br>
              <br>
              <br>
              </p>
              <p><?php echo $parametro['descritivo'] ?></p>
              <br>
              <p><?php echo $parametro['paragrafo1'] ?></p>
              <br>
              <p><?php echo $parametro['paragrafo2'] ?></p>
              <br>
              <p><?php echo $parametro['paragrafo3'] ?></p>
              <br>
              
            </div>
          </div>

          
        </div>
        
      </div>
    </section><!-- End Features Section -->