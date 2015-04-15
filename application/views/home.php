<div class="welcome">
  <header class="fixed">
    <div class="shadow">
      <div class="container header">
        <a href="/" id="logo-header">
          <div class="brand-header">Sistema de Bibliotecas de la Universidad Católica del Maule</div>
        </a>
        <a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav-white.png" alt="" /></a>
        <nav>
          <a href="/">Inicio</a>
          <a href="/sibib">SIBIB</a>
          <a href="/recursos">Recursos de Información</a>
          <a href="/servicios">Servicios</a>
          <a href="/informacion">Gestión</a>
        </nav>
      </div>
    </div>
  </header>

</div>

<div class="container">
  <div class="busqueda">
      <h3>Buscador del Sistema de Bibliotecas</h3>
      <div class="busqueda-modulo">
          <span class="logo-search">
            <img src="<?php echo $images_folder ?>/logo-search-blue.png">
          </span>
          <form id="ebscoSearch" method="post" class="search">
              <input id="ebscohostwindow" type="hidden" value="1">
              <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s7053667&groupid=main&profid=eds&mode=bool&lang=es&authtype=ip,guest,uid" />
              <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" />
              <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+" />
              <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />

             <span class="title-search">
              <!-- <h4>Buscador del Sistema de Bibliotecas</h4> -->
              <input id="ebscohostsearchtext" name="ebscohostsearchtext" placeholder="¿Qué estás buscando?">
            </span>
            <div class="filters">
              <div class="top">
                <label><input type="radio" name="searchFieldSelector" id="guidedField_0" value="Palabra Clave"> Palabra Clave</label>
                <label><input type="radio" name="searchFieldSelector" id="guidedField_1" value="Título" checked> Título</label>
                <label><input type="radio" name="searchFieldSelector" id="guidedField_2" value="Autor"> Autor</label>
              </div>

              <div class="bottom">
                <label><input type="checkbox" name="chkCatalogOnly" id="chkCatalogOnly" value="#"> Sólo catálogo</label>
                <label><input type="checkbox" name="chkLibraryCollection" id="chkLibraryCollection" value="#"> Disponible en SIBIB</label>
              </div>
            </div>

          </form>
      </div>
    </div>
  <div class="destacamos">
    <h3>Destacamos</h3>
    <div class="destacamos-modulo">
      <div class="links-destacamos">
        <a class="destacado"  href="http://gliese.ucm.cl:8991/F/-/?func=find-b-0&local_base=UCM01">Catálogo</a>
        <a class="destacado" href="http://gliese.ucm.cl:8991/F/-/&server;_f?func=file&file_name=login">Renovación</a>
        <a class="destacado" href="/base_datos">Base de Datos</a>
        <a class="destacado" href="/categorias">Libros<br>Digitales</a>
        <a class="destacado" href="http://atoz.ebsco.com/titles/6371">Revistas digitales</a>
        <a class="destacado" href="http://guiastematicas.biblioteca.ucm.cl/">Guías temáticas</a>
      </div>
    </div>
  </div>
</div>

<div class="gray-bg">
  <div class="container">
    <h3 class="title-center">Noticias</h3>
    <div class="modulo-noticia">
      <!--Última noticia 1-->
      <?php
      foreach($noticias as $noticia):
        ?>
      <div class="noticia">
        <figure class="imagen-noticia">
          <?php
          if($noticia->imagen==null){
            ?>
            <img src="<?php echo $images_folder ?>otros-repos/img-link-test.png" alt="" />
            <?php
          }else{
            ?>
            <img src="<?php echo $noticia->imagen?>" alt="" />
            <?php
          }
          ?>

        </figure>
        <div class="info-noticia">
          <label for="fecha" class="date-news-main"><?php echo mdate("%l %d de %F %Y",strtotime($noticia->fecha)) ?></label>
          <div class="gray-line"></div>
          <h5 class="title-noticia"><a href="/noticias/show/<?php echo $noticia->id; ?>"><?php echo $noticia->titulo ?></a></h5>
          <ul class="social">
            <li>
              <a href="http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo $noticia->titulo?>
                &p[url]=<?php site_url('noticias/show/')+$noticia->id?>
                &p[images][0]=<?php echo $noticia->imagen?>"
                class="simptip-position-top simptip-fade" data-tooltip="Comparte en Facebook">
                <img src="<?php echo $images_folder ?>fb.png" alt="Facebook" />
              </a>
            </li>
            <li>
              <a href="https://twitter.com/share?url=<?php site_url('noticias/show/')+$noticia->id?>
              &text=<?php echo $noticia->titulo?>&via=sibib&hashtags=UCM,SIBIB"
                class="simptip-position-top simptip-fade" data-tooltip="Comparte en Twitter">
                <img src="<?php echo $images_folder ?>tw.png" alt="Twitter" />
              </a>
            </li>
          </ul>
          <p class="p-standard"><?php echo word_limiter($noticia->contenido,20) ?></p>
          <div class="read-more"><a href="/noticias/show/<?php echo $noticia->id; ?>">Leer más →</a></div>
        </div>
      </div>
    <?php endforeach; ?>

  </div>


    <a href="/noticias" class="btn-blue">Ver todas las noticias</a>
  </div>
</div>

<div class="bibliotecas">
  <div class="container">
    <h3 id="h-white">Bibliotecas</h3>
    <div class="white-line"></div>
    <nav class="tabs">
      <a href="#sanmiguel">San Miguel</a>
      <a href="#carmen">Nuestra Señora del Carmen</a>
      <a href="#isidro">San Isidro</a>
      <a href="#huilquilemu">Villa Huilquilemu</a>
    </nav>
    <!-- TODO TABS -->
    <div id="sanmiguel">
      <img class="biblioteca-map" src="<?php echo $images_folder ?>map-l-miguel.png" alt="" />
      <img class="biblioteca-map-medium" src="<?php echo $images_folder ?>map-m-miguel.png" alt="" />
      <img class="map-small biblioteca-map-small " src="<?php echo $images_folder ?>map-s-miguel.png" alt="" />
      <div class="btn-main biblioteca-map-small">
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-left.png" alt="" /></a>
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-right.png" alt="" /></a>
      </div>
    </div>

    <div id="carmen">
      <img class="biblioteca-map" src="<?php echo $images_folder ?>map-l-carmen.png" alt="" />
      <img class="biblioteca-map-medium" src="<?php echo $images_folder ?>map-m-carmen.png" alt="" />
      <img class="map-small biblioteca-map-small " src="<?php echo $images_folder ?>map-s-carmen.png" alt="" />
      <div class="btn-main biblioteca-map-small">
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-left.png" alt="" /></a>
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-right.png" alt="" /></a>
      </div>
    </div>

    <div id="huilquilemu">
      <img class="biblioteca-map" src="<?php echo $images_folder ?>map-l-huilquilemu.png" alt="" />
      <img class="biblioteca-map-medium" src="<?php echo $images_folder ?>map-m-huilquilemu.png" alt="" />
      <img class="map-small biblioteca-map-small " src="<?php echo $images_folder ?>map-s-huilquilemu.png" alt="" />
      <div class="btn-main biblioteca-map-small">
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-left.png" alt="" /></a>
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-right.png" alt="" /></a>
      </div>
    </div>

    <div id="isidro">
      <img class="biblioteca-map" src="<?php echo $images_folder ?>map-l-isidro.png" alt="" />
      <img class="biblioteca-map-medium" src="<?php echo $images_folder ?>map-m-isidro.png" alt="" />
      <img class="map-small biblioteca-map-small " src="<?php echo $images_folder ?>map-s-isidro.png" alt="" />
      <div class="btn-main biblioteca-map-small">
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-left.png" alt="" /></a>
        <a class="btn-news"><img src="<?php echo $images_folder ?>arrow-right.png" alt="" /></a>
      </div>
    </div>
  </div>
</div>
