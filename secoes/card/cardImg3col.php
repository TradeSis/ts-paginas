<?php
$parametro = json_decode($secaoPagina["parametros"],true);
$cardImgs = $parametro["cardImgs"];
?>

<section id="servicos" class="values">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2><?php echo $parametro['titulo'] ?></h2>
    </div>

    <div class="row">

      <?php foreach ($cardImgs as $cardImg) { ?>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div >
            
            <a href="<?php echo $cardImg['href'] ?>"><img src="<?php echo URLROOT .$parametro['pastaImg']. $cardImg['nome'] ?>" class="img-fluid" alt=""></a>
            
          </div>
        </div>
      <?php } ?>
    </div>

  </div>

</section>