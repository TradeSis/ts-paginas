<?php 
$perfil = buscaPerfil();
?>
<div class="container-fluid" id="faixaDeCima">
  <div class="row">
    <div class="col-sm-10 mt-2">
      <a>Telefone: <?php echo $perfil['telefone']?></a>
      <a>Email: <?php echo $perfil['email']?></a>
    </div>
    <div class="col-sm-2 mt-2">
      <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a>
      <a href="https://www.facebook.com/<?php echo $perfil['facebook']?>"><i class="bi bi-facebook"></i></a>
      <a href="https://wa.me/55<?php echo $perfil['whatsapp']?>"><i class="bi bi-whatsapp"></i></a>
    </div>
  </div>
   
   
</div>
<div class="root">
  <header>
    <div class="container-header">
    
      <a href="<?php echo URLROOT?>"><img class="logo" src="<?php echo URLROOT?>/img/brand/white.png" alt="" ></a>
      <nav>
        <li><a href="#quem_somos" class="active">Quem somos</a></li>
        <li><a href="#servicos" class="active">Serviços</a></li>
        <li><a href="#contato" class="active">Contato</a></li>
      </nav>


      <div class="mobile-menu">
      <span class="material-symbols-outlined">
menu
</span>
      </div>
    </div>

    
  </header>

  <div class="container">
    <!-- Conteudo aqui -->
  </div>
</div>
 
<div class="container-flex mobile-conteudo" style="text-align:center; background-color: #0C2D4C; ">
    <div>
      <a href="#quem_somos" class="active">Quem somos</a>
      <a href="#servicos">Serviços</a>
      <a href="#contato">Contato</a>
   </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>