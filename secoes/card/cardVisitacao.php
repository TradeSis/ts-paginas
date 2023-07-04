<?php
include_once(ROOT . '/sistema/database/eventos.php');
$visitacoes = buscaVisitacaoEventos();
//echo json_encode($eventos);
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
</style>

<div class="container-fluid" style="margin-top: 10px;">
    <div class="row titulo">
            <h2>Visitações</h2>
        </div>
        <hr>
    <div class="card-deck" style="margin-top: 30px;">
        <?php foreach ($visitacoes as $visitacao) {  ?>
            <div class="card">
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $visitacao['capaEvento'] ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title" href="noticias/<?php echo $visitacao['nomeEvento'] ?>"><?php echo $visitacao['nomeEvento'] ?></h5>
                    <p><?php echo $visitacao['localEvento'] ?></p>
                </div>

            </div>
        <?php } ?>
    </div>
</div>

