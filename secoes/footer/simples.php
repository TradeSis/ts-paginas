<?php


$perfis = buscaPerfil();

?>
 
<?php foreach ($perfis as $perfil); ?>

 <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="footer-info">
            <img src="img/imgPerfil/<?php echo $perfil["logo"] ?>" alt="" width="300" height="120">
            
              <br>
              <br>
              <br>
              
            </div> 
          </div>

          
          <div class="col-lg-4 col-md-4 footer-newsletter">
            <h4>Contato</h4>
              <strong>Whatsapp:</strong>&nbsp;<?php echo $perfil["whatsapp"] ?><br>
              <br>
              <strong>Email:</strong>&nbsp;<?php echo $perfil["email"] ?><br>
                

          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
             Confira nossas redes sociais:
          </div>

        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          
            <a href="<?php echo $perfil["twitter"] ?>" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="<?php echo $perfil["facebook"] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="<?php echo $perfil["instagram"] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
         

          <!-- <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->