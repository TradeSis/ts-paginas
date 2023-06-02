
<!DOCTYPE html>
<html>

<?php
include_once ROOT. "/vendor/vendor.php";
?>

<?php

include_once(ROOT . '/sistema/database/temas.php');
include_once(ROOT . '/sistema/database/paginas.php');
include_once(ROOT . '/sistema/database/secaoPagina.php');
include_once(ROOT . '/sistema/database/perfil.php');
include_once(ROOT . '/sistema/database/banners.php');
include_once(ROOT . '/sistema/database/posts.php');
include_once(ROOT . '/sistema/database/produtos.php');
include_once(ROOT . '/sistema/database/servicos.php');

$tema = buscatema();
$perfil = buscaPerfil();


?>
<body>

<link href="/ts/paginas/css/main.css" rel="stylesheet"> <!--Estilo da pg principal -->
<script src="/ts/paginas/js/main.js"></script>

<link href="/ts/paginas/css/<?php echo $tema["css"]; ?>" rel="stylesheet">


<?php
/*
// default <link href="css/variables.css" rel="stylesheet">


<script src="js/jquery.flexslider.js"></script>
<link href="css/flexslider.css" rel="stylesheet">

<script src="<?php echo URLROOT ?>/vendor/php-email-form/validate.js"></script>

*/
$pagina = 'home';
$slugSingle = null;

if (isset($_GET['parametros'])) {
  $paginas = explode('/', $_GET['parametros']);


  $pagina = $paginas[0];

  if (isset($paginas[1])) {
    $slugSingle = $paginas[1];
  }

}

$paginaDados = buscaPagina($pagina);

if ($paginaDados['arquivoFonte'] !== 'index.php') {

  if (isset($paginaDados['arquivoSingle']) && !$slugSingle == null) {
    include 'paginas/' . $paginaDados['arquivoSingle'];
  } else {
    include 'paginas/' . $paginaDados['arquivoFonte'];
  }
  return;
}

$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);


foreach ($secoesPaginas as $secaoPagina) {
    
    include 'paginas/secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
}


?>







</body>

</html>