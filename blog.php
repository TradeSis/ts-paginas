<?php

$secoesPaginas = buscaSecaoPagina($paginaDados['idPagina']);
$recentes = buscaPostsRecentes();

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina) {

  if ($secaoPagina["arquivoFonte"] == "pagina") {
    break;
  }

  include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
  $ordem = $secaoPagina["ordem"];
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

<body>



  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">
              <?php foreach ($posts as $post) { ?>

                <div class="col-lg-6 mt-4">
                  <article class="d-flex flex-column">
                    <div class="post-img">
                      <img src="img/imgPosts/<?php echo $post["imgDestaque"] ?>" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">
                      <a href="blog-details.html"><?php echo $post["titulo"] ?></a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <div class="row">
                          <div class="col">
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href=""><?php echo $post["autor"] ?></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href=""><?php echo $post["comentarios"] ?></a></li>
                          </div>
                          <div class="col">
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href=""><time><?php echo date('d/m/Y', strtotime($post['data'])) ?></time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-tag"></i> <a href=""><?php echo $post["categoria"] ?></a></li>
                          </div>
                        </div>
                      </ul>
                    </div>

                    <div class="content">
                      <p><?php echo $post["textoIntro"] ?>.</p>
                    </div>

                    <div class="read-more mt-auto align-self-end">
                      <a href="blog/<?php echo $post['slug'] ?>">Ler mais</a>
                    </div>
                  </article>
                </div>

              <?php } ?>
            </div>

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div>

          <div class="col-lg-4">
            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Pesquisar titulo do Post</h3>
                <form action="" method="get" class="mt-3">
                  <input type="text" name="titulo">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categorias</h3>
                <select name="categoria" id="categoria">
                  <option onclick="searchData()">Categorias</option>
                  <option value="tecnologia">Tecnologia</option>
                  <option value="informacao">Informacão</option>
                  <option value="novidade">Novidade</option>
                </select>
              </div>

              <div style="text-align: right;">
                <a href="blog" role="button" class="btn btn-sm mt-2" style="background-color: #3EB5CA;color: #fff">Limpar</a>
              </div>

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Posts Recentes</h3>
                <div class="mt-3">
                  <?php foreach ($recentes as $recente) { ?>
                    <div class="post-item mt-3">
                      <img src="img/imgPosts/<?php echo $recente['imgDestaque'] ?>" alt="" class="flex-shrink-0" width="40px" height="60px">
                      <div>
                        <h4><a href="blog-post.html"><?php echo $recente['titulo'] ?></a></h4>
                        <time><?php echo date('d/m/Y', strtotime($recente['data'])) ?></time>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>

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

  if ($secaoPagina["ordem"] <= $ordem) {
    continue;
  }

  if ($secaoPagina["arquivoFonte"] == "pagina") {
    continue;
  }

  include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
}
?>