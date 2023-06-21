<?php
$parametro = json_decode($secaoPagina["parametros"], true);
$listas = json_decode($secaoPagina["listas"], true);
?>

<section id="servicos" class="values">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2><?php echo $parametro['titulo'] ?></h2>
      <h4><?php echo $parametro['subTitulo'] ?></h4>
    </div>

    <div class="row">

      <?php foreach ($listas as $lista) { ?>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div>
            <a href="<?php echo $lista['href'] ?>"><img src="<?php echo URLROOT ?>/img/<?php echo $lista['img'] ?>" class="img-fluid" alt=""></a>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>

</section>