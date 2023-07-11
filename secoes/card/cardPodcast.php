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

    .card-deck .card {
        border: none;
    }

    .card-deck .cardPodcast {
        align-items: center;
    }

    .card-deck .cardPodcast img {

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
                <a href="eventos/<?php echo $visitacao['slug'] ?>"><img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $visitacao['capaEvento'] ?>" alt="Card image cap"></a>
                <div class="card-body text-center">
                    <a href="eventos/<?php echo $visitacao['slug'] ?>">
                        <h5 class="card-title"><?php echo $visitacao['nomeEvento'] ?></h5>
                    </a>
                    <p><?php echo $visitacao['localEvento'] ?></p>
                </div>

            </div>
        <?php } ?>
    </div>
</div>