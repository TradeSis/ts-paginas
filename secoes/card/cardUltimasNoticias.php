<?php
    include_once(ROOT . '/sistema/database/noticias.php');
    $noticias = buscaUltimasNoticias();
?>
<style>
  a {
    color: #1B4D60;
    /* var(--color-btn-text) */
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 500;
  }

  hr {
    background-color: #3B3D42;
    margin-top: -10px;
    font-size: 14px;
  }

  h2 {
    color: #060944;
    font-size: 36px;
  }

  .titulo {
    margin-left: 5px;
  }
</style>


<section>
<div class="container-fluid">
<div class="row titulo" style="margin-top: -50px;">
      <h2>Ultimas noticias</h2>
    </div>
    <hr>
    <div class="row p-0" >
        
        <?php foreach($noticias as $noticia) {  ?>
            <div class="col-sm-6 mt-4">
            <div class="card shadow" style="width: 450px;">
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $noticia['imgNoticia'] ?>" alt="Card image cap">
                <div class="card-body">
                <a href="noticias/<?php echo $noticia['tituloNoticia'] ?>"><?php echo $noticia['tituloNoticia'] ?></a>
                    <!-- <p class="card-text"><?php echo $noticia['tituloNoticia'] ?></p> -->
                </div>
            </div>
        
        </div>
        <?php } ?>
       
    </div>
</div>

</section>