<?php 

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);
$recentes = buscaPostsRecentes();
/* echo json_encode($recentes);
return; */
// Secoes antes da pagina
/* $ordem = 0;
foreach ($secoesPaginas as $secaoPagina){
      
   if($secaoPagina["arquivoFonte"]=="pagina") {
      break;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];

} */

$post = buscaSlug($slugSingle);
echo json_encode($post);

?>
<div class="container">
    <h1><?php echo $parametros['titulo'] ?></h1>
</div>

