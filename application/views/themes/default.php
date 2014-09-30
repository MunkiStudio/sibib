<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Bibliotecas de la Universidad Católica del Maule</title>
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="SIBIB UCM: Sistema de Bibliotecas de la Universidad Católica del Maule" />
    <meta name="keywords" content="biblioteca, universidad católica del maule, talca, chile, ucm, sibib,munki, munki studio, msdark, oinkmypork" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/styles/slidebars.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/styles/main.css">
    <!-- endbuild -->
  </head>
  <body>
  <section id="main-section">
  	<?php echo $output;?>
  </section>
  <footer>
    <div class="container footer">  
      <div>
        <div class="footer-btns">
          <a href="#" class="btn-blue">Alumni</a>
          <a href="#" class="btn-blue">Formulario Online</a>
          <div class="btn-contacto"></div>
          <a class="btn-contacto" href="#"><img src="<?php echo base_url() ?>resources/images/btn-fb-white.png" alt="" /></a>
          <a class="btn-contacto" href="#"><img src="<?php echo base_url() ?>resources/images/btn-mail-white.png" alt="" /></a>
          <div class="btn-contacto"></div>
        </div>
        <div class="links">
          <label for="">Gestión</label>
          <ul>
            <li><a href="#">Solicitud de Bibliografia</a></li>
            <li><a href="#">Últimos Títulos Adquiridos</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">Servicios</label>
          <ul>
            <li><a href="/capacitaciones">Capacitaciones</a></li>
            <li><a href="#">Formulario online</a></li>
            <li><a href="/credenciales">Credenciales</a></li>
            <li><a href="/actualidad">Actualidad</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">Recursos de Información</label>
          <ul>
            <li><a href="/base-datos">Base de datos</a></li>
            <li><a href="#">Revistas electrónicas</a></li>
            <li><a href="#">Catálogo UCM</a></li>
            <li><a href="#">Otros catálogos</a></li>
            <li><a href="/recursos-por-area">Recursos por área</a></li>
            <li><a href="/ebooks">eBooks</a></li>
            <li><a href="#">Repositorio UCM</a></li>
            <li><a href="/otros-repos">Otros repositorios</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">SIBIB</label>
          <ul>
            <li><a href="/sibib">Misión</a></li>
            <li><a href="/sibib">Descripción</a></li>
            <li><a href="/organigrama">Organigrama</a></li>
            <li><a href="/organigrama">Equipo</a></li>
          </ul>
        </div>
      </div>
      
      <div class="white-line"></div>
      
      <label class="copyright" for="">&copy; Sistema de Bibliotecas de la Universidad Católica del Maule, 2014</label>
      <div class="links-footer">
        <nav>
          <a href="#">Acreditación</a>
          <a href="#">Reglamento</a>
          <a href="#">Normativas</a>
        </nav>
      </div>
    </div>
  </footer>
  
  <div class="munki-footer">
    <div class="container small">
      <a href="http://www.munki.cl" target="_blank"><img src="<?php echo base_url() ?>resources/images/logo-munki.png" alt="" /></a>
    </div>
  </div>
  
  <div class="sb-slidebar sb-right">
    <!-- Your right Slidebar content. -->
    <ul class="nav-mobile">
      <ul class="nav-mobile">
        <li><label class="mobile-link mobile-selected">Inicio</label></li>
        <li><a class="mobile-link" href="/noticias">Noticias</a></li>
        <li><a class="mobile-link" href="/sibib">SIBIB</a></li>
        <li><a class="mobile-link" href="/recursos">Recursos de Información</a></li>
        <li><a class="mobile-link" href="/capacitaciones">Servicios</a></li>
        <li><a class="mobile-link" href="/informacion">Gestión</a></li>
      </ul>
    </ul>
  </div>
      
  
  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
     <script>
       (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

       ga('create', 'UA-XXXXX-X');
       ga('send', 'pageview');
    </script>

    
    <!--[if lt IE 9]>
    <script src="<?php echo base_url() ?>resources/scripts/es5-shim.min.js"></script>
    <script src="<?php echo base_url() ?>resources/scripts/json3.min.js"></script>
    <![endif]-->
    

    
    <script src="<?php echo base_url() ?>resources/scripts/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>resources/scripts/slidebars.min.js"></script>
    <script src="<?php echo base_url() ?>resources/scripts/jquery.glide.min.js"></script>
    
    <!-- build:js({.tmp/scripts}) /scripts/scripts.js 
    <script src="<?php echo base_url() ?>static/.tmp/scripts/app.js"></script>
    <script src="<?php echo base_url() ?>static/.tmp/scripts/controllers/main.js"></script>
    endbuild -->
    <script>
      $(document).ready(function(){
        // $.slidebars();
        // var glide = $('.slider').glide({
        //   autoplay:5000,
        //   arrows:false,
        //   navigation:false
        // }).data('api_glide');
        
        // $('.slider_left').next();
        // $('.slider_right').prev();
      });
    </script>

    
</body>

</html>


    
</body>
</html>
