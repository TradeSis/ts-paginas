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


$produtos = buscaTodosProdutos();

?>



<section style="margin-left: 120px">
  <h4>Lista Produtos</h4>
  <div class="container-flex text-center" style="align-items: center ;width:1600px ;display: flex; margin-left: 20px">
    <div class="row">
      <?php foreach ($produtos as $produto) { ?>
        <div class="card mt-3 mr-2" style="width: 18rem;">
          <img class="card-img-top" src="img/imgProdutos/<?php echo $produto["fotoProduto"] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $produto["nomeProduto"] ?>
            </h5>
            <!-- <p class="card-text"><?php echo $produto["valorProduto"] ?>.</p> -->
            <a href="#" class="btn btn-primary">
              <?php echo $produto["valorProduto"] ?>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php
// Secoes depois da pagina
foreach ($secoesPaginas as $secaoPagina) {

  if ($secaoPagina["ordem"] <= $ordem) {
    continue;
  }
  
  if ($secaoPagina["arquivoFonte"] == "pagina") {
    continue;
  }

  
  include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
}
?>