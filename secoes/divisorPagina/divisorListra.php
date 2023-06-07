
<?php

$parametro = json_decode($secaoPagina["parametros"],true);

/*
Exemplo
$json = '{"cor":"#686868"}';

*/

?>
<section id="cta" class="cta" style="margin-top: 0px;">
      <div class="container-fluid shadow" data-aos="zoom-out" style="background-color: <?php echo $parametro['cor']; ?>">

        <div class="row g-0">

       <p></p>

        </div>

      </div>
    </section>