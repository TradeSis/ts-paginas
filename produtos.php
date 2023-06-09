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