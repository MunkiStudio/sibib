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
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/styles/style.css">
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
          <a href="http://www.alumni.ucm.cl/" class="btn-blue">Alumni</a>
          <!-- <a href="#" class="btn-blue">Formulario Online</a> -->
          <div class="btn-contacto"></div>
          <a class="btn-contacto" href="https://www.facebook.com/sibibucm"><img src="<?php echo base_url() ?>resources/images/btn-fb-white.png" alt="" /></a>
          <a class="btn-contacto" href="mailto:sibib@ucm.cl"><img src="<?php echo base_url() ?>resources/images/btn-mail-white.png" alt="" /></a>
          <div class="btn-contacto"></div>
        </div>
        <div class="links">
          <label for="">Gestión</label>
          <ul>
            <li><a href="/informacion">Gestión</a></li>
            <li><a href="http://sibib.ucm.cl/descargas/Formulario_BMO_BC.xls">Solicitud de Bibliografía</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">Servicios</label>
          <ul>
            <li><a href="/servicios">Servicios</a></li>
            <li><a href="#">Formulario online</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">Recursos de Información</label>
          <ul>
            <li><a href="/base_datos">Base de datos</a></li>
            <li><a href="http://atoz.ebsco.com/titles/6371">Revistas electrónicas</a></li>
            <li><a href="http://gliese.ucm.cl:8991/F/-/?func=find-b-0&local_base=UCM01">Catálogo UCM</a></li>
            <li><a href="http://sibibtest.ucm.cl/catalogos">Otros catálogos</a></li>
            <li><a href="http://guiastematicas.biblioteca.ucm.cl/">Guías temáticas</a></li>
            <li><a href="/categorias">eBooks</a></li>
            <li><a href="http://cibertesis.ucm.cl:8080/jspui/">Tesis digitales</a></li>
            <li><a href="/otros_repos">Repositorios</a></li>
          </ul>
        </div>
        <div class="links">
          <label for="">SIBIB</label>
          <ul>
            <li><a href="/sibib">Misión</a></li>
            <li><a href="/sibib#descripcion">Descripción</a></li>
            <li><a href="/organigrama">Organigrama</a></li>
            <li><a href="/organigrama#equipo">Equipo</a></li>
          </ul>
        </div>
      </div>

      <div class="white-line"></div>

      <label class="copyright" for="">&copy; Sistema de Bibliotecas de la Universidad Católica del Maule, 2015</label>
      <div class="links-footer">
        <nav>
          <a href="http://www.sibib.ucm.cl/acreditacion/login.php">Acreditación</a>
          <a href="/resources/Reglamento SIBIB.docx">Reglamento</a>
          <a href="http://sibibtest.ucm.cl/resources/Reglamento%20SIBIB.docx">Normativas</a>
        </nav>
      </div>
    </div>
  </footer>

  <div class="munki-footer">
    <div class="container small">
      <a href="http://www.munki.cl" target="_blank">Diseño y Desarrollo por <img src="<?php echo base_url() ?>resources/images/logo-munki.png" alt="" /></a>
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
        <li><a class="mobile-link" href="/servicios">Servicios</a></li>
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
    <script src="<?php echo base_url() ?>resources/scripts/ie.js"></script>
    <![endif]-->

    <script src="//cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>
    <script src="http://support.ebsco.com/eit/scripts/ebscohostsearch.js"></script>
    <script src="<?php echo base_url() ?>resources/scripts/main.js"></script>


</body>

</html>



</body>
</html>
