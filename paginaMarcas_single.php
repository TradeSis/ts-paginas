<?php //paginaPostSingle
$post = buscaMarcasSlug($slugSingle); //buscaPost_slug
//echo json_encode($post);
$paginaSlug = buscaPagina($paginaDados['arquivoSingle']);

$secoesPaginas= buscaSecaoPagina($paginaSlug['idPagina']);
//echo json_encode($paginaDados['idPagina']);
$recentes = buscaPostsRecentes();
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
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet"> 
<body>

 

MODELO DE SINGLE ESTILO PERFIL
<h1><?php echo $post['nomeMarca'] ?></h1>



  <div class="container shadow ml-3 p-3 float-left" data-aos="fade-up">
    <div class="post-img">
      <img src="<?php echo URLROOT ?>/img/<?php echo $post['imgMarca'] ?>" alt="" class="img-fluid">
    </div>

    <h2 class="title text-center"><?php echo $post['nomeMarca'] ?></h2>

    <div class="content">
            

            <p>
              <?php echo $post['descricaoMarca'] ?>.
            </p>

          

          </div>
    

  </div>





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