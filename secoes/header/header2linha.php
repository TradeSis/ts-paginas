<?php 
$parametro = json_decode($secaoPagina["parametros"],true);
$temas = buscaTemas($paginaDados['idTema']);
$menus = json_decode($temas['menu'],true);
$perfil = json_decode($temas['perfil'],true);
?>
<style>
  #faixaDeCima i{
    font-size: 20px;
  }



  @import url('https://fonts.googleapis.com/css?family=Montserrat');

.container p {
  font-size: 7rem;
  /* padding: 0.5rem; */
  font-weight: bold;
  letter-spacing: 0.1rem;
  text-align: center;
  /* overflow: hidden; */
}
.container p span.typed-text {
  font-weight: normal;
  color: #dd7732;
  padding-top: 15px;
}
.container p span.cursor {
  /* display: inline-block; */
  background-color: #ccc;
 /*  margin-left: 0.1rem; */
 /*  width: 3px; */
  animation: blink 1s infinite;
  padding-top: 15px;
}
.container p span.cursor.typing {
  animation: none;
  padding-top: 15px;
}
@keyframes blink {
  0%  { background-color: #ccc; }
  49% { background-color: #ccc; }
  50% { background-color: transparent; }
  99% { background-color: transparent; }
  100%  { background-color: #ccc; }
}
/* #faixaDeCima .dataHeader{
  text-align: right;
} */

#faixaDeCima .dataHeader p{
  margin-top: -10px;
}
</style>

<div class="container-fluid" id="faixaDeCima">
  <div class="row">
    <!-- <div class="col-sm-2"></div> -->

    <div class="col-sm-4">
      <a href="" class="dataHeader"><p>quarta-feira, 28 junho, 2023</p></a>
      
    </div>
    <div class="col-sm-6 mt-3 p-0">
    <p><span class="typed-text"></span><span class="cursor">&nbsp;</span>_</p>
    </div>
    <div class="col-sm-2 mt-2">
      <!-- <a href="https://www.instagram.com/<?php echo $perfil['instagram']?>"><i class="bi bi-instagram"></i></a> -->
      <a href="<?php echo $perfil['facebook']?>"><i class="bi bi-person-fill"></i></a> Lucas <i class="bi bi-box-arrow-right"></i>
      
    </div>
  </div>
   
   
</div>
<div class="root">
  <header>
    <div class="container container-header">
    
      <a href="<?php echo URLROOT?>"><img class="logo" src="<?php echo URLROOT ?>/img/<?php echo $parametro['logo']?>" alt="" ></a>
      <nav>
        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['href']?>" class="menuHeader"><?php echo $menu['menu']?></a></li>
        <?php } ?>
        
        
      </nav>


      <div class="mobile-menu">
      <span class="material-symbols-outlined">
menu
</span>
      </div>
    </div>

    
  </header>

</div>
 
<div class="container-flex mobile-conteudo" style="text-align:center; background-color: #0C2D4C; ">
    <div>
        <?php 
          foreach($menus as $menu){
        ?>
          <li><a href="<?php echo $menu['href']?>" class="active"><?php echo $menu['menu']?></a></li>
        <?php } ?>
   </div>

</div>



<script>const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["todas as marcas em um único lugar", "veja os eventos da semana"];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});

  $('.mobile-menu').click(function(){
    $('.mobile-conteudo').toggleClass('mostra');
    
});
</script>