<?php

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina){
      
   if($secaoPagina["arquivoFonte"]=="pagina") {
      break;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];

}

?>

    <!-- ======= Features Section ======= -->
<!--     <section id="features" class="principalServicos" style="background-image: url('<?php echo URLROOT?>/img/brand/fundoServicos.png');">
      <div class="container" data-aos="fade-up">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100" >
            <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <h1 style="font-weight: 900; color: #FFFFFF">Conheça Nossos Serviços</h1>
              <p class="fst-italic">
              <br>
              <br>
              <br>
              </p>
              </p>
            </div>
          </div>

        </div>
        
      </div>
    </section> -->




<?php
// Secoes depois da pagina
foreach ($secoesPaginas as $secaoPagina){
    
  if($secaoPagina["ordem"]<=$ordem) {
    continue;
  }
 
    if($secaoPagina["arquivoFonte"]=="pagina") {
      continue;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }
?>
