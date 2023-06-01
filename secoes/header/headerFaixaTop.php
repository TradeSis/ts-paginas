

<div class="container-fluid" id="faixaDeCima">
    <a href=""><i class="bi bi-instagram"></i></a>
    <a href="">Email: tradesis@tradesis.com.br</a>
    <a href="">Telefone: (51) 99999-9999</a>
   
</div>
<div class="root">
  <header>
    <div class="container-header">

      <a href="<?php echo URLROOT?>"><img class="logo" src="<?php echo URLROOT?>/img/brand/logo.png" alt="" ></a>
      

      <nav>
        <li><a href="#quem_somos" class="active">Quem somos</a></li>
        <li><a href="#servicos" >Serviços</a></li>
        <li><a href="#contato" >Contato</a></li>
      </nav>

<!--       <div class="search-container">
        <p></p>
      </div> -->


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
 
<div class="container-flex mobile-conteudo" style="text-align:center; background-color: #D1D0D7; ">
    <div>
      <a href="#quem_somos" class="active">quem somos</a>
      <a href="#servicos" >serviços</a>
      <a href="#contato" >Contato</a>
   </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>