<?php 
$perfil = buscaPerfil();

$parametro = json_decode($secaoPagina["parametros"],true);

/* Exemplo json:
    {"titulo":"Tradesis","textoFinal":"Tradesis - Soluções em Sistemas"} 
*/
?>



<style>
    .footer-legal{
        background-color: #091D3E;
        
    }
    .footer .footer-content{
        background-image: url('<?php echo URLROOT?>/img/brand/imgFooter.png');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <div class="footer-info">
                        <span style="font-size: 40px; font-weight:600;"><?php echo $parametro['titulo']?></span>
                        <br>
                        <br>
                        <br>

                    </div>
                </div>


                <div class="col-lg-4 col-md-4 footer-newsletter">
                    <h4>Links</h4>
                    <strong><a href="#home">Inicio</a></strong><br>
                    <br>
                    <strong><a href="#quem_somos">Quem Somos</a></strong><br>
                    <br>
                    <strong><a href="#servicos">Serviços</a></strong><br>


                </div>

                <div class="col-lg-4 col-md-4 footer-newsletter">
                    <h4>Contato</h4>
                    <i class="bi bi-geo-alt"></i>&nbsp;<strong><?php echo $perfil['cidade']?>/<?php echo $perfil['estado']?></strong> &nbsp; - &nbsp;
                    <strong>Endereço:</strong>&nbsp;<?php echo $perfil['endereco']?><br>
                    <br>
                    <i class="bi bi-telephone"></i>&nbsp;<strong>Whatsapp:</strong>&nbsp;<?php echo $perfil["whatsapp"] ?><br>
                    <br>
                    <i class="bi bi-envelope"></i>&nbsp;<strong>Email:</strong>&nbsp;<?php echo $perfil["email"] ?><br>


                </div>


            </div>
        </div>
    </div>

    <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

            <div class="d-flex flex-column align-items-center align-items-lg-start">
                <div class="copyright">

                </div>

            </div>

            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">

                <samp><?php echo $parametro['textoFinal']?></samp>

            </div>
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">

            </div>

        </div>
    </div>

</footer><!-- End Footer -->
<a href="#" class="scroll-top d-flex align-items-center justify-content-center" style="background-color: #16448F;"><i class="bi bi-arrow-up-short"></i></a>