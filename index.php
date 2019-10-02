<!DOCTYPE html>
<html>
<head>
    <title>Envío de mails con PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<style>
  .img-back{
     background-repeat:no-repeat;
            -o-background-size: 100% 100%, auto;
  -moz-background-size: 100% 100%, auto;
  -webkit-background-size: 100% 100%, auto;
  background-size: 100% 100%, auto;
    background-image: url('http://eligetuapartamento.wiwa.co/img/Banner1.jpg');
    height: 100vh;
    position: absolute;
    width: 100%;
  } 
.img-back-2{
   background-repeat:no-repeat;
            -o-background-size: 100% 100%, auto;
  -moz-background-size: 100% 100%, auto;
  -webkit-background-size: 100% 100%, auto;
  background-size: 100% 100%, auto;
    background-image: url('http://eligetuapartamento.wiwa.co/img/Banner2.jpg');
    height: 100vh;
    position: absolute;
    width: 100%;
  } 
  .img-back-3{
   background-repeat:no-repeat;
            -o-background-size: 100% 100%, auto;
  -moz-background-size: 100% 100%, auto;
  -webkit-background-size: 100% 100%, auto;
  background-size: 100% 100%, auto;
    background-image: url('http://eligetuapartamento.wiwa.co/img/Banner1.jpg');
    height: 100vh;
    position: absolute;
    width: 100%;
  }
  .fondo-white{
    margin-top: 23%;
  }
  .titulo-piso{
        text-align: center;
    margin-top: 15%;
    position: relative;
    z-index: 1000;
    margin-bottom: 3%;
}
  .caja{
    height: 210px;
    margin-top: 12%;
    border-radius: 5px;
    background: #fff;
  }
  .btn-aling{
    float: right;
    width: 100%;
    margin-bottom: 10px;
  }
  .titulo-piso-modal{
    color:darkblue;
  }
  .subtitle{
    color:darkblue;

  }
  @media (min-width: 576px){
    .modal-dialog {
      max-width: 970px;
      margin: 30px auto;
    }
  }
  @charset "UTF-8";
.navigation {
  height: 110px;
  background: #0e5bc2;
}

.brand {
  position: absolute;
  padding-left: 35px;
  float: left;
  line-height: 70px;
  text-transform: uppercase;
  font-size: 1.4em;
  margin-top: 15px;
}
.brand a,
.brand a:visited {
  color: #ffffff;
  text-decoration: none;
}

.nav-container {

  margin: 0 80PX;
}

nav {
  float: right;
  margin-top: 15px;
}
nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 13px;
}
nav ul li {
  float: left;
  position: relative;
  font-size: 13px;
}
nav ul li a,
nav ul li a:visited {
  display: block;
  padding: 0 20px;
  line-height: 70px;
  background: #0e5bc2;
  color: #ffffff;
  text-decoration: none;
  font-size: 13px;
  text-transform: uppercase;
}
nav ul li a:hover,
nav ul li a:visited:hover {
  color: #808080;
  font-size: 13px;
  text-transform: uppercase;
  text-decoration: none;
}
nav ul li a:not(:only-child):after,
nav ul li a:visited:not(:only-child):after {
  padding-left: 4px;
  content: ' ▾';
}
nav ul li ul li {
  min-width: 190px;
  font-size: 13px;
  text-transform: uppercase;
}
nav ul li ul li a {
  padding: 15px;
  line-height: 20px;
  font-size: 13px;
  text-transform: uppercase;
}

.nav-dropdown {
  position: absolute;
  display: none;
  z-index: 1;
  box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
}

/* Mobile navigation */
.nav-mobile {
  display: none;
  position: absolute;
  top: 0;
  right: 0;
  background: #0e5bc2;
  height: 70px;
  width: 70px;
}

@media only screen and (max-width: 798px) {
  .nav-mobile {
    display: block;
  }

  nav {
    width: 100%;
    padding: 70px 0 15px;
  }
  nav ul {
    display: none;
  }
  nav ul li {
    float: none;
  }
  nav ul li a {
    padding: 15px;
    line-height: 20px;
  }
  nav ul li ul li a {
    padding-left: 30px;
  }

  .nav-dropdown {
    position: static;
  }
}
@media screen and (min-width: 799px) {
  .nav-list {
    display: block !important;
  }
}
#nav-toggle {
  position: absolute;
  left: 18px;
  top: 22px;
  cursor: pointer;
  padding: 10px 35px 16px 0px;
}
#nav-toggle span,
#nav-toggle span:before,
#nav-toggle span:after {
  cursor: pointer;
  border-radius: 1px;
  height: 5px;
  width: 35px;
  background: #ffffff;
  position: absolute;
  display: block;
  content: '';
  transition: all 300ms ease-in-out;
}
#nav-toggle span:before {
  top: -10px;
}
#nav-toggle span:after {
  bottom: -10px;
}
#nav-toggle.active span {
  background-color: transparent;
}
#nav-toggle.active span:before, #nav-toggle.active span:after {
  top: 0;
}
#nav-toggle.active span:before {
  transform: rotate(45deg);
}
#nav-toggle.active span:after {
  transform: rotate(-45deg);
}

article {
  max-width: 1000px;
  margin: 0 auto;
  padding: 10px;
}
  .carousel-control-next-icon, .carousel-control-prev-icon {
   background-color: #0e5bc2;
  }
#inferior{
color: #FFF;
background: #073d5b;
position:absolute; /*El div será ubicado con relación a la pantalla*/
left:0px; /*A la derecha deje un espacio de 0px*/
right:0px; /*A la izquierda deje un espacio de 0px*/
bottom: -289px; /*Abajo deje un espacio de 0px*/
height:50px; /*alto del div*/
z-index:0;
 }
 .row{
  margin: 0;
  padding: 0;
 }
 .btn-secondary {
   
    background-color: #fff;
    border-color: red;
    color: red;
}
.opacity{
  display: none;
  z-index: 1020;
  opacity: 0.1;
}
.w-100{
  width: 100%;
  max-height: 500px;
}
.padd{
  padding: 10px !important;
}
</style>
<body>
<?php
    if(isset($_POST['enviar'])){
        $cuerpo = '
        <!DOCTYPE html>
        <html>
        <head>
         <title></title>
        </head>
        <body>
        
        <div style="font-size:16px;"> Nombre: '.$_POST['nombre'].'</div>
        <div style="font-size:16px;"> Contacto: '.$_POST['telefono'].'</div>
        <div style="font-size:16px;"> Asunto: '.$_POST['asunto'].'</div>
        <div style="font-size:17px;"> Mensaje: '.$_POST['cuerpo'].'</div>
        
        </body>
        </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: ".$_POST['nombre']." <".$_POST['emisor'].">\r\n";

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        $headers .= "Reply-To: ".$_POST['emisor']."\r\n";

        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";
        if(mail($_POST['receptor'],$_POST['asunto'],$cuerpo,$headers)){
            echo "<script>swal('Correo enviado!', 'Gracias por enviar tu correo', 'success');</script>";
        }else{
            echo "<script>swal('Correo fallido!', 'Revise su configuracion de SMTP', 'warning');;</script>";
        }
    }
?>
<section class="navigation">
  <div class="nav-container">
    <div class="brand">
      <a href="#!">
        <img src="https://viva.bepapers.com/wp-content/uploads/2019/09/WEB-WIWA-outline-2.png" alt="">
      </a>
    </div>
    <nav>
      <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
      <ul class="nav-list">
        <li>
          <a href="#!">Santa Marta</a>
        </li>
        <li>
          <a href="#!">WIWA</a>
        </li>
        <li>
          <a href="#!">APARTAMENTOS</a>
          <ul class="nav-dropdown">
            <li>
              <a href="#!">Web Design</a>
            </li>
            <li>
              <a href="#!">Web Development</a>
            </li>
            <li>
              <a href="#!">Graphic Design</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#!">GALERIA</a>
        </li>
        <li>
          <a href="#!">PROMOTORES</a>
        </li>
        <li>
          <a href="#!">CONTACTO</a>
        </li>
      </ul>
    </nav>
  </div>
</section>

<div class="row prueba img-back" style="width: 100%;">
  <div class="col-md-5 col-12" ></div>
  <div class="col-md-4 caja col-12" >
    <div class="row">
      <div class="col-12">
        <h4 class="titulo-piso">Elije el area y luego el piso que deseas consultar</h4>
      </div>
      <div class="col-md-4 col-4" >
      <select class="select"  id="change3" style="float: right;height: 39px;border-radius: 10px;">
        <option value="tipo">Tipo</option>
        <option value="A">tipo A</option>
        <option value="B">Tipo B</option>
      </select>
    </div>  
      <div class="col-md-4 col-4" >
      <select class="select"  id="change2" style="float: right;height: 39px;border-radius: 10px; " >
        <option value="">Areas</option>
        <option value="area1"> Area 65 mtrs</option>
        <option value="area2">Area 85 mtrs</option>
        <option value="area3">Area 100 mtrs</option>
      </select>
    </div>
    <div class="col-md-4 col-4">
     
       <select class="select " id="change" style="height: 39px;border-radius: 10px;">
        <option value="">Pisos</option>
        <option value="25">piso 25</option>
        <option value="24">piso 24</option>
        <option value="23">piso 23</option>
      </select>
    </div>
    
   

  </div>
  </div>
  <div class="col-md-3 col-12">
    
  </div>
  <div class="row" id="rojo" style=" z-index: 1100; position: relative;width: 67%; margin-right: auto;margin-left: auto;margin-top: -41%;max-height: 460px; display: none;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
      <button type="button" class="close regresar" data-dismiss="modal" aria-label="Close" style="z-index: 1110;position: relative;"><span aria-hidden="true" style="color:blue;"> X</span></button>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img id="imagenpreview" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview2"  class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="row" id="rojo2" style=" z-index: 1100; position: relative;width: 67%; margin-right: auto;margin-left: auto;margin-top: -41%;max-height: 460px; display: none;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
      </ol>
      <div class="carousel-inner">
        <button type="button" class="close regresar" data-dismiss="modal" aria-label="Close" style="z-index: 1110;position: relative;"><span aria-hidden="true" style="color:blue;"> X</span></button>
        <div class="carousel-item active">
          <img id="imagenpreview9"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview10"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview3"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview4"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview5"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview6"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview7"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img id="imagenpreview8"  class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="row" id="rojo3" style=" z-index: 1100; position: relative;width: 67%; margin-right: auto;margin-left: auto;margin-top: -41%;max-height: 460px; display: none;">
    <form method="post">
        <div style="background-color:#fff; width:80%; padding: 10px;margin-left: auto;    margin-right: auto;">
      <button type="button" class="close regresar" data-dismiss="modal" aria-label="Close" style="z-index: 1110;position: relative;"><span aria-hidden="true" style="color:blue;"> X</span></button>
      <h4 style="color:#0e5bc2;text-align: center;">Formulario de cotización </h4>
            <div class="form-row padd">
                <div class="col">
                        <input type="text" class="form-control " size="55" name="asunto" value="" required autofocus placeholder="Asunto">
                </div>
                <div class="col">
                        <input type="text" size="25" name="nombre" class="form-control" value="" required style="" placeholder="Tu Nombre">
                </div>
            </div>
            <div class="form-row padd">
                <div class="col">
                        <input type="email" size="25" name="emisor" required class="form-control" value="" required autofocus placeholder="Mi correo">
                </div>
                <div class="col">
                        <input type="number" size="25" name="telefono" class="form-control" value="" required style="" placeholder="Numero de contacto">
                </div>
               
            </div>
            
            <div class="form-group padd">
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="cuerpo" style="" placeholder="Indique su mensaje  y el codigo del apto que deseas consultar" cols="57" rows="5" rows="3"></textarea>
            </div>
             <div class="col">
                        <input type="text" size="55" name="receptor" class="form-control" value="no-reply@pruebasmid.com"  style="visibility: hidden;" >
                </div>
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary">
        </div>


    </form>
  </div>
</div>




<div class="modal fade " tabindex="-1" role="dialog" id="modalshow">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onClick="document.location.reload(true)"><span aria-hidden="true"> X</span></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 col-12" style="">
            <div class="row">
              <div class="col-md-12">
                <h4 class="titulo-piso-modal titulo-modal" ></h4>
              </div>
              <div class="col-md-4">
              <h6 class="subtitle construida" ></h6>
              </div>
              <div class="col-md-4">
              <h6 class="subtitle construida-res-1" ></h6>
            </div>
              <div class="col-md-12"></div>
              <div class="col-md-4">
                <h6 class="subtitle construida-2"></h6>
              </div>
              <div class="col-md-4">
                <h6 class="subtitle construida-res-2" ></h6>
              </div>
              <div class="col-md-12"></div>
              <div class="col-md-4">
                <h6 class="subtitle construida-3" ></h6>
              </div>
              <div class="col-md-4">
                <h6 class="subtitle construida-res-3"></h6>
              </div>
              <div class="col-md-12"></div>
              <div class="col-md-4">
                <h6 class="subtitle construida-4" ></h6>
              </div>
              <div class="col-md-4">
                <h6 class="subtitle construida-res-4"></h6>
              </div>
              <div class="col-md-12"></div>
              <div class="col-md-4">
                <h6 class="subtitle construida-5" ></h6>
              </div>
              <div class="col-md-4">
                <h6 class="subtitle construida-res-5"></h6>
              </div>
              <div class="col-md-12"></div>
              <div class="col-md-4">
                <h6 class="subtitle construida-6"></h6>
              </div>
              <div class="col-md-4">
                <h6 class="subtitle construida-res-6"></h6>
              </div>


            </div>
          </div>
          <div class="col-md-6 col-12">
            <div class="row">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6">
                    <a href="" id="planos"  download>
                    <button type="button" class="btn btn-secondary btn-aling" >descargar planos</button>
                    </a>
                  </div>
                  <div class="col-md-6">
              
                    <button type="button" class="btn btn-secondary btn-aling vistaprevia"  >Vista paronamica</button>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="row">

                  <div class="col-md-6">

                    <button type="button" class="btn btn-secondary btn-aling masimg"  >Fotos del apto</button>

                  </div>
                  <div class="col-md-6">
                    <button type="button" class="btn btn-secondary btn-aling interesa" >Me interesa</button>
                  </div>
                </div>
              </div>

            </div>
          </div>




        </div>

      </div>
        
        <img id="imagen"  alt="" style="width: 100%; height:auto;">
      </div>
    </div><!-- /.modal-content -->
    
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- partial -->

<div id="inferior" class="row" style="height: 179px;">
    <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-4">
      <img src="http://viva.bepapers.com/wp-content/uploads/2019/09/LOGO-Fotter-web-02-2.png" alt="Smiley face" style="padding-top: 40px !important;width: 100%;margin-bottom: 24px;">
      <p style="font-size: 12px !important; text-align: center;">© Copyright 2019 .Todos los derechos reservados.  WIWA.CO Construcciones.</p>
    </div>
    <div class="col-12 col-md-4"></div>
</div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
<script>
  (function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery
</script>
<script  src="./script.js"></script>

<script>
  $(document).on('change','.select',function(){
  //this is just getting the value that is selected
  var title = $("#change").val();
  var area = $("#change2").val();
  var tipo = $("#change3").val();

  if (tipo=='A'){
    $(".prueba").removeClass("img-back-2");
    $(".prueba").addClass("img-back-3");
    $(".prueba").removeClass("img-back");
;
  }
  if (tipo=='B'){
    $(".prueba").removeClass("img-back-3");
    $(".prueba").removeClass("img-back");
    $(".prueba").addClass("img-back-2");

  }
  if (tipo=='tipo'){
    $(".prueba").addClass("img-back");
    $(".prueba").removeClass("img-back3");
    $(".prueba").removeClass("img-back-2");

  }
   
  if (title=='25') {
    if (area=='area1') {
      
      $("#imagen").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#planos").attr("href","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
      $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
      $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
      $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
      $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

      $(document).on('click','.vistaprevia',function(){
          $('#rojo').toggle(1000);
        $('#rojo').modal('show');

     
        $("#modalshow").addClass("opacity");
        
      });
       $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
      $(document).on('click','.masimg',function(){
         $('#rojo2').toggle(1000);
        $('#rojo2').modal('show');
        $("#modalshow").addClass("opacity");
        
      });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');

        $("#modalshow").addClass("opacity");

      });
      function closeWin() {
       myWindow.close();
      }

      $(".titulo-modal").text("Apartamento tipo A-250");
      $(".construida").text("Area construida");
      $(".construida-res-1").text("75 mtrs2");
      $(".construida-2").text("Area privada");
      $(".construida-res-2").text("15 mtrs2");
      $(".construida-3").text("Habitaciones");
      $(".construida-res-3").text("2")
      $(".construida-4").text("Baños");
      $(".construida-res-4").text("1");
      $(".construida-5").text("parqueaderos");
      $(".construida-res-5").text("1");
      $(".construida-6").text("deposito");
      $(".construida-res-6").text("no");
     mostrarmodal(title);
  }
   if (area=='area2') {
       $("#imagen").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
       $("#planos").attr("href","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
    $("#imagenpreview").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
     $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
     $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
     $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
     $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

     $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }


     $(".titulo-modal").text("Apartamento tipo A-255");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("58 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("10 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("2")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("1");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("1");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("no");
       mostrarmodal(title);
  }
  

  }
   if (title=='24') {
    if (area=='area1') {
      $("#imagen").attr("src","https://www.portafolio.co/files/article_multimedia/uploads/2016/02/06/56b65b7b057a9.jpeg");
      $("#planos").attr("href","https://www.portafolio.co/files/article_multimedia/uploads/2016/02/06/56b65b7b057a9.jpeg");
      $("#imagenpreview").attr("src","https://www.portafolio.co/files/article_multimedia/uploads/2016/02/06/56b65b7b057a9.jpeg");
      $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
      $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
      $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
      $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
      $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

      $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }


      $(".titulo-modal").text("Apartamento tipo B-255");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("108 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("40 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("4")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("2");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("3");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("si");
     mostrarmodal(title);
  }
   if (area=='area2') {
       $("#imagen").attr("src","https://propiedadescom.s3.amazonaws.com/files/600x400/nezahualcoyotl-203-centro-area-1-cuauhtemoc-distrito-federal-7658397-foto-01.jpg");
       $("#planos").attr("href","https://propiedadescom.s3.amazonaws.com/files/600x400/nezahualcoyotl-203-centro-area-1-cuauhtemoc-distrito-federal-7658397-foto-01.jpg");
      $("#imagenpreview").attr("src","https://propiedadescom.s3.amazonaws.com/files/600x400/nezahualcoyotl-203-centro-area-1-cuauhtemoc-distrito-federal-7658397-foto-01.jpg");
     $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
     $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
     $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
     $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
     $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

      $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }



     $(".titulo-modal").text("Apartamento tipo B-175");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("208 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("70 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("6")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("6");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("4");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("si");
     mostrarmodal(title);
  }
   if (area=='area3') {
       $("#imagen").attr("src","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
        $("#planos").attr("href","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
       $("#imagenpreview").attr("src","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
     $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
     $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
     $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
     $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
     $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

       $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }




     $(".titulo-modal").text("Apartamento tipo C-375");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("50 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("50 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("1")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("1");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("1");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("no");
     mostrarmodal(title);
  }
  

  }

  if (title=='23') {
    if (area=='area1') {
      $("#imagen").attr("src","https://www.estrategiaweb360.com/wp-content/uploads/2018/03/area_comercial_empresa.jpg");
        $("#planos").attr("href","https://www.estrategiaweb360.com/wp-content/uploads/2018/03/area_comercial_empresa.jpg");
      $("#imagenpreview").attr("src","https://www.estrategiaweb360.com/wp-content/uploads/2018/03/area_comercial_empresa.jpg");
      $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
      $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
      $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
      $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
      $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
      $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
      $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

       $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }



      $(".titulo-modal").text("Apartamento tipo C-275");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("150 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("50 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("3")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("2");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("2");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("si");
     mostrarmodal(title);
  }
   if (area=='area2') {
       $("#imagen").attr("src","https://sites.google.com/site/tema4gdupc/_/rsrc/1468737401513/5-ubicacion-del-establecimiento-comercial/5-1-area-comercial/MANAGER2.jpg");
        $("#planos").attr("href","https://sites.google.com/site/tema4gdupc/_/rsrc/1468737401513/5-ubicacion-del-establecimiento-comercial/5-1-area-comercial/MANAGER2.jpg");
      $("#imagenpreview").attr("src","https://sites.google.com/site/tema4gdupc/_/rsrc/1468737401513/5-ubicacion-del-establecimiento-comercial/5-1-area-comercial/MANAGER2.jpg");
     $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
     $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
     $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
     $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
     $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

      $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }



     $(".titulo-modal").text("Apartamento tipo D-275");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("350 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("100 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("6")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("6");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("6");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("si");
     mostrarmodal(title);
  }
   if (area=='area3') {
       $("#imagen").attr("src","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
       $("#planos").attr("href","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
      $("#imagenpreview").attr("src","https://cramster-image.s3.amazonaws.com/definitions/DC-2350V3.png");
     $("#imagenpreview2").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview3").attr("src","https://www.altonivel.com.mx/wp-content/uploads/2018/04/rascacielos-mas-altos-de-mexico.jpg");
     $("#imagenpreview4").attr("src","https://i.ytimg.com/vi/frMXIq2UvYM/maxresdefault.jpg");
     $("#imagenpreview5").attr("src","https://d36tnp772eyphs.cloudfront.net/blogs/2/2019/05/los-edificios-mas-altos-de-la-ciudad-de-mexico-shutterstock_1146770330.jpg");
     $("#imagenpreview6").attr("src","https://realestatemarket.com.mx/images/2018/05-Mayo/1005/1005g-ventajas-de-los-edificios-inteligentes.jpg");
     $("#imagenpreview7").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview8").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");
     $("#imagenpreview9").attr("src","https://viva.bepapers.com/wp-content/uploads/2019/09/apartamento-00011.jpg");
     $("#imagenpreview10").attr("src","https://static.tokkobroker.com/water_pics/21454063959861147075320274952933296041622038968954615070617220190223731055966.jpg");

      $(document).on('click','.vistaprevia',function(){
      $('#rojo').toggle(1000);
       $('#rojo').modal('show');
       $("#modalshow").addClass("opacity");
     });

      $(document).on('click','.regresar',function(){
         $("#modalshow").removeClass("opacity");
        closeWin();
       
        
      });
     $(document).on('click','.masimg',function(){
      $('#rojo2').toggle(1000);

       $('#rojo2').modal('show');
       $("#modalshow").addClass("opacity");
     });
      $(document).on('click','.interesa',function(){
        $('#rojo3').toggle(1000);
        $('#rojo3').modal('show');
        $("#modalshow").addClass("opacity");
      });
        function closeWin() {
       myWindow.close();
      }



     $(".titulo-modal").text("Apartamento tipo D-205");
     $(".construida").text("Area construida");
     $(".construida-res-1").text("250 mtrs2");
     $(".construida-2").text("Area privada");
     $(".construida-res-2").text("150 mtrs2");
     $(".construida-3").text("Habitaciones");
     $(".construida-res-3").text("5")
     $(".construida-4").text("Baños");
     $(".construida-res-4").text("5");
     $(".construida-5").text("parqueaderos");
     $(".construida-res-5").text("5");
     $(".construida-6").text("deposito");
     $(".construida-res-6").text("si");
     mostrarmodal(title);
  }
  

  }
  
 
});
  function mostrarmodal(value) {
   $('.modal-title').html(value);
   $('.modal').modal('show');
  }
  
</script>
</body>
</html>