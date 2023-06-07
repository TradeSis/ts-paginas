<?php 
$perfil = buscaPerfil();

$parametro = json_decode($secaoPagina["parametros"],true);

/* Exemplo de json
{"menu1":"Quem Somos","href1":"#quem_somos","menu2":"Serviços","href2":"#servicos","menu3":"Contato","href3":"#contato","menu4":"","href4":"","menu5":"","href5":"",
"menu6":"","href6":""} */
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
        <li><a href="<?php echo $parametro['href1']?>" class="active"><?php echo $parametro['menu1']?></a></li>
        <li><a href="<?php echo $parametro['href2']?>" class="active"><?php echo $parametro['menu2']?></a></li>
        <li><a href="<?php echo $parametro['href3']?>" class="active"><?php echo $parametro['menu3']?></a></li>
        <li><a href="<?php echo $parametro['href4']?>" class="active"><?php echo $parametro['menu4']?></a></li>
        <li><a href="<?php echo $parametro['href5']?>" class="active"><?php echo $parametro['menu5']?></a></li>
        <li><a href="<?php echo $parametro['href6']?>" class="active"><?php echo $parametro['menu6']?></a></li>
        
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
      <a href="<?php echo $parametro['href1']?>" class="active"><?php echo $parametro['menu1']?></a>
      <a href="<?php echo $parametro['href2']?>" class="active"><?php echo $parametro['menu2']?></a>
      <a href="<?php echo $parametro['href3']?>" class="active"><?php echo $parametro['menu3']?></a>
      <a href="<?php echo $parametro['href4']?>" class="active"><?php echo $parametro['menu4']?></a>
      <a href="<?php echo $parametro['href5']?>" class="active"><?php echo $parametro['menu5']?></a>
      <a href="<?php echo $parametro['href6']?>" class="active"><?php echo $parametro['menu6']?></a>
   </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>