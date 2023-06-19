<?php
$parametro = json_decode($secaoPagina["parametros"],true);
?>

<section id="servicos" class="values">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2><?php echo $parametro['titulo'] ?></h2>
      <h4><?php echo $parametro['subTitulo'] ?></h4>
    </div>

    <div class="row">

    
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div >
            
            <a href="<?php echo $parametro['href1'] ?>"><img src="<?php echo URLROOT .$parametro['pastaImg']. $parametro['img1'] ?>" class="img-fluid" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div >
            
            <a href="<?php echo $parametro['href2'] ?>"><img src="<?php echo URLROOT .$parametro['pastaImg']. $parametro['img2'] ?>" class="img-fluid" alt=""></a>
            
          </div>
        </div>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div >
            
            <a href="<?php echo $parametro['href3'] ?>"><img src="<?php echo URLROOT .$parametro['pastaImg']. $parametro['img3'] ?>" class="img-fluid" alt=""></a>
            
          </div>
        </div>
        

    </div>

  </div>

</section>