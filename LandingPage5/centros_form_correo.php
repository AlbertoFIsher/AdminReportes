<?php
  /*
  session_start();
  if(!isset($_SESSION['name'])){
    header("Location: admin_login.html");
  }*/
?>


<!DOCTYPE html>
<html lang="es">
<head>

  <title>Centros</title>

  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=0">

  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/grid2.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/formInteres.css">
  <link rel="stylesheet" href="css/formularioContacto.css">
  <link rel="stylesheet" href="css/search.css">
  <link rel="stylesheet" href="css/stellar.css">
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style_form_informes.css">
     
  
</head>
<body class="fondo">
   
<!--========================================================
                          HEADER
=========================================================-->
<div class="encabezado_unam1"><img src="imagenes/encabezado/encabezadoLP.png"/> </div>
<header id="header" class=>

  <div id="stuck_container2">
   <div class="container">
        <h1>
          <a href="index.html"></a>
        </h1>
          <nav id="mainNav">
            <ul class="sf-menu">
            
              <li><a class="a" href="http://docencia.tic.unam.mx/index.html">Inicio</a></li>
              <li><a class='a' href="http://docencia.tic.unam.mx/company.html">Conócenos</a></li>
              <li class="current"><a href="http://docencia.tic.unam.mx/services.html">Capacítate</a></li>
              <li ><a href="http://docencia.tic.unam.mx/projects.html">Infórmate</a></li>
              <li><a href="http://docencia.tic.unam.mx/ademas.html">Además</a></li>

         </ul>    

            </ul>
            <div class="clearfix"></div>
            </nav>
             
       </div>
  </div>
   <div class="clearfix"></div>
</header>
<!--=========================Formulario para correo==========================-->
	
<div class="contenedor_form" style="display: none;">
    <div class="margen_form">

      <div class="elemento_form">
        <div>

          <div class="boton_cerrar" id="cerrar"> Cerrar X</div> 

          <div class="title_env"> Envio de correo</div>
          
          <div class="datos_form">
          
            <input   type="text" placeholder="Destinatario" class="dest" id="destinatario">
            <br>
            <input type="text" placeholder="Asunto" class="dest">
            <br>
            
            <textarea placeholder="Mensaje" class="men"></textarea>


        </div>
        <button class="boton_enviar" id="enviar">Enviar</button>
      </div>
    </div>
    
  </div>
</div>
<!--=========================================================================-->
<!--========================================================
                          CONTENT
=========================================================-->

<section class="section_a">

<div class="pu" style="background-color: gray; height: 40px;"> 
</div>


<div class="pu" style="background-color: red; height: 40px">
  
</div>

<div class="pu" style="background-color: gray; height: 40px">
  
</div>
<div class="pu" style="background-color: red; height: 40px">
  
</div>
<div class="pu" style="background-color: gray; height: 40px">
  
</div>
<div class="pu" style="background-color: red; height: 40px">
  
</div>
<div class="pu" style="background-color: gray; height: 40px">
  
</div>
<div class="pu" style="background-color: red; height: 40px">
  
</div>


  <div class="row_tb_inf">
    <div>
      <p class="tit_reportes">Seguimiento de usuarios registrados a diplomados</p>
    </div>
    <div id="tabla_dat" >
      
    </div>
    <p align="right"><button class="btn_rec" id="rec">Aceptar</button></p>
  </div>
</section>



<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="grid_4 mar_t_25 s16">
          <h5 >&copy;Todos los derechos reservados 2017</h5>
          <p class="mar_t_2">Hecho en México, Universidad Nacional Autónoma de México (UNAM), todos los derechos reservados 2017. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando se cite la fuente completa y su dirección electrónica, y no se mutile. De otra forma requiere permiso previo por escrito de la institución. Sitio web administrado por: Dirección de Docencia en TIC - UNAM.</p>
          <div class="privacy-block mar_t_2">
            Créditos</div>
        </div>
        <div class="grid_2 mar_t_25 s17">
          <h5>DDTIC</h5>
          <ul class="list_2">
            <li><a href="http://docencia.tic.unam.mx/company.html">Acerca de</a></li>
            <li><a href="http://docencia.tic.unam.mx/organigrama.html">Organigrama</a></li>
            <li><a href="http://docencia.tic.unam.mx/directorio.html">Directorio</a></li>
            <li><a href="http://tic.unam.mx/">DGTIC</a></li>
            <li></li>
          </ul>
        </div>
        <div class="grid_2 mar_t_25 s18">
          <h5>Sedes</h5>
          <ul class="list_2">
            <li><a href="http://docencia.tic.unam.mx/ubicacioncu.html">Ciudad Universitaria</a></li>
            <li><a href="http://docencia.tic.unam.mx/ubicacionnl.html">Nuevo León</a></li>
            <li><a href="http://docencia.tic.unam.mx/ubicacioncm.html">Mascarones</a></li>
            <li><a href="http://docencia.tic.unam.mx/ubicacioncp.html">Polanco</a></li>
            <li><a href="http://docencia.tic.unam.mx/ubicacionsa.html">San Agustín</a></li>
              <li><a href="http://cursosenlinea.tic.unam.mx/">Cursos en línea</a></li>
          </ul>
        </div>
        <div class="grid_2 mar_t_25 s19">
          <h5>Redes Sociales</h5>
          <ul class="list_2">
          
            <li><a href="https://twitter.com/aprendeTICunam">Twitter</a></li>
            <li><a href="https://www.facebook.com/aprendeTICunam">Facebook</a></li>
             <li><a href="https://www.facebook.com/DesarrolloDeCursosEnLinea">Facebook cursos en línea</a></li>
            <li></li>
            <li></li>
          </ul>
        </div>        
    <!--    <div class="grid_2 mar_t_25 s20">
          <h5>Más</h5>
          <ul class="list_2">
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Press</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </div>
</footer>

</body>
</html>

<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script src="js/script.js"></script>

<script src="js/ver_seguimiento_correo.js"></script>
