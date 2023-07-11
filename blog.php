<?php

$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);
$recentes = buscaPostsRecentes();

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == "") {
    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];
  }
  if ($secaoPagina["arquivoFonte"] == "pagina") {
    break;
  }

}

if (isset($_GET['titulo'])) {
  $titulo = $_GET['titulo'];
} else {
  $titulo = null;
}

if (isset($_GET['categoria'])) {
  $categoria = $_GET['categoria'];
} else {
  $categoria = null;
}
$posts = buscaPosts(null, $titulo, $categoria);
//echo json_encode(URLROOT);

?>
<link href="<?php echo URLROOT ?>/paginas/css/<?php echo $paginaDados["css"]; ?>" rel="stylesheet">

<body>



  <main id="main">
    <!-- ======= Blog Section ======= -->
    <section style="margin-top: -30px;">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-9"> <!-- parte 1 -->

            <div class="row p-0">
              <?php

              foreach ($secoesPaginas as $secaoPagina) {
                if ($secaoPagina["coluna"] == 1) {
                  include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
                }

                if ($secaoPagina["ordem"] <= $ordem) {
                  continue;
                }

                if ($secaoPagina["arquivoFonte"] == "pagina") {
                  continue;
                }
              }
              ?>
            </div>

          </div>

          <div class="col-lg-3"> <!-- parte 2 -->
            <div class="sidebar">

              <?php
              foreach ($secoesPaginas as $secaoPagina) {
                if ($secaoPagina["coluna"] == 2) {
                  include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
                }

                if ($secaoPagina["ordem"] <= $ordem) {
                  continue;
                }

                if ($secaoPagina["arquivoFonte"] == "pagina") {
                  continue;
                }
              }
              ?>

            </div>
          </div>

        </div>

      </div>
    </section>
  </main>


  <script>
    var select = document.getElementById('categoria')

    select.addEventListener('change', function() {
      /*  console.log(select.value) */
      window.location = 'blog?categoria=' + select.value;
    })

    function searchData() {
      window.location = 'blog';
    }
  </script>
</body>

<?php
// Secoes depois da pagina
foreach ($secoesPaginas as $secaoPagina) {
  if ($secaoPagina["coluna"] == "") {
    if ($secaoPagina["ordem"] <= $ordem) {
      continue;
    }

    if ($secaoPagina["arquivoFonte"] == "pagina") {
      continue;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  }
}
?>