<div class="submenu">
		<div class="container header">
			<nav>
				<a href="#">Formulario Online</a>
				<a href="http://www.alumni.ucm.cl/">Alumni</a>
			</nav>
		</div>
	</div>

	<header class="fixed white">
		<div class="container header">
			<a href="/"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
		<a href="/" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/sibib">SIBIB</a>
				<a class="main" href="/recursos">Recursos de Información</a>
				<a class="main" href="/servicios">Servicios</a>
				<a class="main" href="/informacion">Gestión</a>
			</nav>
		</div>
	</header>
<div class="main-content top100">
	<div class="container">
		<h1 class="title-section">Noticias</h1>
		<hr class="title-line" />
	</div>

	<div class="container">
		<div class="main-new">
			<label for="date" class="date-news-main"><?php echo mdate("%l %d de %F %Y", strtotime($noticia->fecha)) ?></label>
			<h5 class="title-noticia"><?php echo $noticia->titulo?></h5>
      <?php
        if($noticia->imagen){
          ?>
          <img src="<?php echo $noticia->imagen?>" alt="" />

          <?php
        }else{
          ?>
          <img src="<?php echo $images_folder ?>otros-repos/img-link-test.png" alt="" />
          <?php
        }
        ?>

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
					class="simptip-position-top simptip-fade" data-tooltip="Comparte en Twitter"><img src="<?php echo $images_folder ?>tw.png" alt="Twitter" /></a></li>
			</ul>
			<p class="p-standard" id="no-margin"><?php echo $noticia->contenido?></p>
		</div>

		<div class="old-news-modulo">
			<h3>Otras Noticias</h3>

			<?php foreach($noticias_sidebar as $noticia): ?>
				<div class="calendar-date">
					<div class="calendar">
						<div class="calendar-day">
							<label for=""><?php echo date("d", strtotime($noticia->fecha)) ?></label>
						</div>
						<div class="calendar-month">
							<label for=""><?php echo date("M", strtotime($noticia->fecha)) ?></label>
						</div>
					</div>
				</div>
				<div class="calendar-title">
					<a href="/noticias/show/<?php echo $noticia->id?>"><?php echo $noticia->titulo?></a>
				</div>

				<div class="gray-line"></div>

			<?php endforeach; ?>

			<a href="/noticias" class="btn-blue">Ver todas las noticias</a>
		</div>

	</div>

</div>

