<?php
$parametro = json_decode($secaoPagina["parametros"],true);

/* json{
          "titulo" : "",
          "subTitulo" : "",
          "textoBotao" : "",
          "pastaImg" : "",
          "nomeImg": "temp2.png",
        } 
*/

?>

<section id="home" class="onfocus mt-4" ><!--  style=" height:70vh" -->
      <div class="container-fluid p-0" data-aos="fade-up" >

        <div class="row g-0">
          <div class="col-lg-6">
            <div class="content d-flex flex-column justify-content-center h-100" >
              <h1 style="font-weight: 900; color: #333333"><?php echo $parametro['titulo'] ?></h1>
              <p class="fst-italic">
              <?php echo $parametro['subTitulo'] ?>
            
              </p>
              
              <a href="#contato" class="read-more align-self-start" style="background-color: <?php echo $parametro['corBotao'] ?>;"><span><?php echo $parametro['textoBotao'] ?></span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>

          <div class="col-lg-6 position-relative">
           <!--  <img src="<?php echo URLROOT?>/img/brand/temp2.png" class="img-fluid" alt=""> -->
           <div class="content d-flex flex-column justify-content-center h-100" >
           <!-- <img src="<?php echo URLROOT?>/img/brand/temp2.png"> -->
           <img src="<?php echo URLROOT. $parametro['pastaImg'] . $parametro['nomeImg'] ?>" alt="">
             
            </div>
          </div>
        </div>

      </div>
    </section>