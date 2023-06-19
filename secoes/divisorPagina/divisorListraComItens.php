<?php

$parametro = json_decode($secaoPagina["parametros"], true);


?>
<style>
    .list-group{
        background-color: var(--color-fundo-primary);
    }
    .list-group-item{
        background-color: var(--color-fundo-primary);
        border: none;
        color: var(--color-h2);
        font-weight: 500;
    }
    .container-fluid{
        padding: 20px;
        background-color: var(--color-fundo-primary);
    }
    .bi-check-lg{
        color: var(--color-fundo-secondary);
        padding-right: 10px;
        font-size: large;
    }
    
    h2{
        color: var(--color-h2);
    }

</style>
<section>
    <div class="container-fluid" data-aos="zoom-out">
        <div class="row g-0 d-flex justify-content-center">
            <h2><?php echo $parametro["titulo"] ?></h2>
        </div>
        <div class="row justify-content-center">
            <ul class="list-group">
                
                <li class="list-group-item"><i class="bi bi-check-lg"></i><?php echo $parametro["item1"] ?></li>
                <li class="list-group-item"><i class="bi bi-check-lg"></i><?php echo $parametro["item2"] ?></li>
                <li class="list-group-item"><i class="bi bi-check-lg"></i><?php echo $parametro["item3"] ?></li>
                <li class="list-group-item"><i class="bi bi-check-lg"></i><?php echo $parametro["item4"] ?></li>
                <li class="list-group-item"><i class="bi bi-check-lg"></i><?php echo $parametro["item5"] ?></li>
              
            </ul>
        </div>  

    </div>
</section>