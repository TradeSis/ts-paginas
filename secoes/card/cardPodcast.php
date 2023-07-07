<?php
include_once(ROOT . '/sistema/database/eventos.php');
$parametros = json_decode($secaoPagina["parametros"], true);
$visitacoes = buscaEventosPodcasts();
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
            <h2><?php echo $parametros['titulo'] ?></h2>
        </div>
        <hr>
    <div class="card-deck" style="margin-top: 30px;">
        <?php foreach ($visitacoes as $visitacao) {  ?>
            <div class="card cardPodcast">
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $visitacao['capaEvento'] ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title" href="noticias/<?php echo $visitacao['nomeEvento'] ?>"><?php echo $visitacao['nomeEvento'] ?></h5>
                    <p><?php echo $visitacao['localEvento'] ?></p>
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
