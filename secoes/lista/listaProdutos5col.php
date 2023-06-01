<?php

$produtos = buscaProdutos();

?>


<section style="margin-left: 400px;">
  <h4>Card Produtos</h4>
  <div class="container-flex text-center" style="width:1000px; height: 420px ;display: flex; margin-left: 20px">
    <div class="row">
      <?php foreach ($produtos as $produto) { ?>
        <div class="card" style="width: 18rem; ">
          <img class="card-img-top" src="admin/imgProdutos/<?php echo $produto["fotoProduto"] ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $produto["nomeProduto"] ?>
            </h5>
            <!-- <p class="card-text"><?php echo $produto["valorProduto"] ?>.</p> -->
            <a href="#" class="btn btn-primary">
              <?php echo $produto["valorProduto"] ?>
            </a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>