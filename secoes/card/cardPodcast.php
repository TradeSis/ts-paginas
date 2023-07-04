<?php
include_once(ROOT . '/sistema/database/eventos.php');
$visitacoes = buscaEventosPodcasts();

include_once(ROOT . '/sistema/database/marcas.php');
$marcas = buscaMarcas();
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

    .card-deck .card{
        border: none;
    }
    .card-deck .cardPodcast{
        /* background-color: red; */
        align-items: center;
    }
    .card-deck .cardPodcast img{
       
        width: 150px;
        height: 150px;
    }
</style>


<div class="container-fluid" style="margin-top: 10px;">
    <div class="row titulo">
            <h2>Podcasts</h2>
        </div>
        <hr>
    


    <div class="row">

    <?php foreach ($marcas as $marcas) {  ?>
  <div class="col-sm-2" data-aos="fade-up" data-aos-delay="200">
    <div class="box text-center">
      <img src="<?php echo URLROOT ?>/img/<?php echo $marcas['imgMarca'] ?>" class="img-fluid" alt="">
      <p><?php echo $marcas['nomeMarca'] ?></p>
      
    </div>
  </div>
<?php } ?>
</div>

</div>


<!-- <div class="container-fluid" style="margin-top: 10px;">
    <div class="row titulo">
            <h2>Visitações</h2>
        </div>
        <hr>
    <div class="card-deck" style="margin-top: 30px;">
        <?php foreach ($noticias as $noticia) {  ?>
            <div class="card" style="width: 50px;">
                <center>
                    <p>data</p>
                </center>
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $noticia['imgNoticia'] ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title" href="noticias/<?php echo $noticia['tituloNoticia'] ?>"><?php echo $noticia['tituloNoticia'] ?></h5>
                    <p>local</p>
                </div>

            </div>
        <?php } ?>
    </div>
</div> -->
