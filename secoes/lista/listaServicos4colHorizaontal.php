<?php

$servicos = buscaServicos();
// busca parametros da secao
$parametro = json_decode($secaoPagina["parametros"],true);

/*
Exemplo
$json = '{"titulo":"estes sao nossos servicos","pastaImg":"/brand/imgServicos/","descritivo":"esee é o Descritivo","textoBotao":"Saiba mais."}';

*/

?>

<section id="servicos" class="values">

  <div class="container-fuid " data-aos="fade-up" style="align-items: center;">

    <div class="section-header ">
      <h2><?php echo $parametro['titulo'] ?></h2>
      <p><?php echo $parametro['descritivo'] ?></p>
    </div>

    <div class="row d-flex text-center">

      <?php foreach ($servicos as $servico) { ?>
        <div class=" card col-sm-3 p-4" data-aos="fade-up" data-aos-delay="200">
        <div class="row">
  
           
              <div class="col">
                <img src="<?php echo URLROOT. $parametro['pastaImg'] . $servico['imgServico'] ?>" class="img-fluid" alt="">
              </div>

              <div class="col">
                <h3><?php echo $servico['nomeServico'] ?></h3>
                <p><?php echo $servico['descricaoServico'] ?></p>
                <div class="read-more mt-auto align-self-end">
                  <a href="<?php echo $servico['linkServico'] ?>"><?php echo $parametro['textoBotao'] ?></a>
                </div>
              </div>
           
            
          </div>
        </div>
      <?php } ?>
    </div>

  </div>

</section>