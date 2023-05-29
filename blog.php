<?php 

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);
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

if (isset($_GET['titulo'])) {
  
  $titulo = $_GET['titulo'];
} else {
  $titulo = null;
}

$posts = buscaPosts(null, $titulo);
//echo json_encode($posts);

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

            <?php foreach($posts as $post){ ?>

              <div class="col-lg-6 mt-4">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="../img/imgPosts/<?php echo $post["imgDestaque"] ?>" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.html"><?php echo $post["titulo"] ?></a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo $post["autor"] ?></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01"><?php echo $post["data"] ?></time></a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html"><?php echo $post["comentarios"] ?></a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                    <?php echo $post["textoIntro"] ?>.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="blog/<?php echo $post['slug'] ?>">Ler mais</a>
                  </div>

                </article>
              </div><!-- End post list item -->

            <?php } ?>
              

              
              

            </div><!-- End blog posts list -->

            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4">

            <div class="sidebar">

              <div class="sidebar-item search-form">
                <h3 class="sidebar-title">Pesquisar titulo do Post</h3>
                <form action="" method="get" class="mt-3">
                  <input type="text" name="titulo">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
               
                <a href="blog" role="button" class="btn btn-sm btn-primary mt-2"><i class="bi bi-x-circle-fill"></i>&#32;Limpar</a>
              </div><!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categories</h3>
                <ul class="mt-3">
                  <li><a href="#">General <span>(25)</span></a></li>
                  <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <li><a href="#">Travel <span>(5)</span></a></li>
                  <li><a href="#">Design <span>(22)</span></a></li>
                  <li><a href="#">Creative <span>(8)</span></a></li>
                  <li><a href="#">Educaion <span>(14)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Posts Recentes</h3>

                <div class="mt-3">

                <?php foreach($recentes as $recente){ ?>
                  <div class="post-item mt-3">
                    <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="blog-post.html"><?php echo $recente['titulo'] ?></a></h4>
                      <time datetime="2020-01-01"><?php echo $recente['data'] ?></time>
                    </div>
                  </div>
                <?php } ?>

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->



</body>

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