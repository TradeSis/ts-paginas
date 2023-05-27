<?php

$secoesPaginas= buscaSecaoPagina($paginaDados['idPagina']);

// Secoes antes da pagina
$ordem = 0;
foreach ($secoesPaginas as $secaoPagina){
      
   if($secaoPagina["arquivoFonte"]=="pagina") {
      break;
    }

    include 'secoes/' . $secaoPagina["tipoSecao"] . "/" . $secaoPagina["arquivoFonte"];
    $ordem = $secaoPagina["ordem"];

}


?>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="margin-top:50px;background-color: #D1D0D7 ; height:500px"> <!-- #24AAC3 #bec3bc -->
      <div class="container" data-aos="fade-up" style=" height:500px">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100" >
            <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <h1 style="font-weight: 900; color: #333333">Sistema de Controle</h1>
              <p class="fst-italic">
              <br>
              <br>
              <br>
              </p>
              </p>
            </div>
          </div>

          <div class="col-lg-6 position-relative">
           <!--  <img src="<?php echo URLROOT?>/img/brand/temp2.png" class="img-fluid" alt=""> -->
           <div class="content d-flex flex-column justify-content-center h-100" >
              <h1>IMAGEM IMAGEM IMAGEM IMAGEM</h1>
             
            </div>
          </div>
        </div>
        
      </div>
    </section>


    <!-- ======= Features Section ======= -->
    <section id="quem_somos" class="features" style=" margin-top:20px"> <!-- #24AAC3 #bec3bc -->
      <div class="container" data-aos="fade-up">
        <div class="about row g-0">
          <div class="col-lg-4 pt-4 mb-4">
            <div class="content d-flex flex-column  h-100" >
            <a href="#" class="btn btn-primary p-3"><span>Sistema de Controle</span>&#32;<i class="bi bi-arrow-right"></i></a>
              <br>
              <a href="#" class="btn btn-primary p-3"><span>Multi-Server</span>&#32;<i class="bi bi-arrow-right"></i></a>
              <br>
              <a href="#" class="btn btn-primary p-3"><span>Sustentação</span>&#32;<i class="bi bi-arrow-right"></i></a>
              <br>
              
            </div>
          </div>

          <div class="col-lg-8  position-relative">
           <!--  <img src="<?php echo URLROOT?>/img/brand/temp2.png" class="img-fluid" alt=""> -->
           <div class="content d-flex flex-column justify-content-center h-100" >
           <img src="<?php echo URLROOT?>/img/brand/temp1.png">
           
            </div>
          </div>

          <div class="col-lg-12 ">
            <div class="content d-flex flex-column h-100" >
            <h1 style="font-weight: 900; color: #333333">Sistema de Controle</h1>
              <p class="fst-italic">
              <i class="bi bi-arrow-right-circle"></i>&#32;Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nobis voluptates pariatur dolores similique et reprehenderit aperiam reiciendis nisi repudiandae mollitia in, hic eligendi obcaecati, deleniti iure repellendus! Quia, rem!<br>
              <br>
              <i class="bi bi-arrow-right-circle"></i>&#32;Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
              <br>
              <i class="bi bi-arrow-right-circle"></i>&#32;Lorem ipsum dolor sit amet consectetur adipisicing elit. , deleniti iure repellendus! Quia, rem!<br>
              <br>

            </div>
          </div>
         
        </div>
        
      </div>
    </section><!-- End Features Section -->




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
