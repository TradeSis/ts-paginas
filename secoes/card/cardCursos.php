<?php
include_once(ROOT . '/sistema/database/eventos.php');
$eventos = buscaEventosCursos();
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
            <h2>Cursos</h2>
        </div>
        <hr>
    <div class="card-deck" style="margin-top: 30px;">
        <?php foreach ($eventos as $evento) {  ?>
            <div class="card">
                <center>
                    <h5><?php echo date('d/m/Y', strtotime($evento['dataEvento']))?></h5>
                </center>
                <img class="card-img-top" src="<?php echo URLROOT ?>/img/<?php echo $evento['capaEvento'] ?>" alt="Card image cap">
                <div class="card-body text-center">
                    <h5 class="card-title" href="noticias/<?php echo $evento['nomeEvento'] ?>"><?php echo $evento['nomeEvento'] ?></h5>
                    <p><?php echo $evento['localEvento'] ?></p>
                </div>

            </div>
        <?php } ?>
    </div>
</div>
