<?php

$servicos = buscaServicosCards();

?>

<section id="servicos" class="values">

  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Nossos Serviços</h2>
      <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
    </div>

    <div class="row">

      <?php foreach ($servicos as $servico) { ?>
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <img src="<?php echo URLROOT ?>/img/brand/<?php echo $servico['imgServico'] ?>" class="img-fluid" alt="">
            <h3><?php echo $servico['nomeServico'] ?></h3>
            <p><?php echo $servico['descricaoServico'] ?></p>
            <div class="read-more mt-auto align-self-end">
              <a href="<?php echo $servico['linkServico'] ?>">Saiba mais</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>

</section>