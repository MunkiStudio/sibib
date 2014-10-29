<div class="submenu">
	<div class="container header">
		<nav>
			<a href="#">Formulario Online</a>
			<a href="#">Alumni</a>
		</nav>
	</div>
</div>

<header>
	<div class="container header">
		<a href="/"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
		<a href="/" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
		<nav>
			<a class="main" href="/">Inicio</a>
			<label class="selected">Noticias</label>
			<a class="main" href="/sibib">SIBIB</a>
			<a class="main" href="/recursos">Recursos de Información</a>
			<a class="main" href="/capacitaciones">Servicios</a>
			<a class="main" href="/informacion">Gestión</a>
		</nav>
	</div>
</header>

<div class="container">
	<h1 class="title-section">Noticias</h1>
	<hr class="title-line" />
</div>

<div class="container small">
	<?php foreach($noticias as $noticia): ?>
		<div class="full-noticia">
			<div class="content-full-noticia">
				<figure>
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
				<div class="text-full-noticia">
					<label for="date" class="date-news-main"><?php echo mdate("%l %d de %F %Y", strtotime($noticia->fecha)) ?></label>
					<hr class="separator" />
					<h5 class="title-noticia"><a href="/noticias/show/<?php echo $noticia->ID?>"><?php echo $noticia->titulo ?></a></h5>
					<ul class="social">
						<li>
							<a href="http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo $noticia->titulo?>
				                &p[url]=<?php site_url('noticias/show/')+$noticia->ID?>
				                &p[images][0]=<?php echo $noticia->imagen?>"
								class="simptip-position-top simptip-fade" data-tooltip="Comparte en Facebook"><img src="<?php echo $images_folder ?>fb.png" alt="Facebook" /></a></li>
						<li>
							<a href="https://twitter.com/share?url=<?php site_url('noticias/show/')+$noticia->ID?>
							&text=<?php echo $noticia->titulo?>&via=sibib&hashtags=UCM,SIBIB"
							class="simptip-position-top simptip-fade" 
							data-tooltip="Comparte en Twitter">
								<img src="<?php echo $images_folder ?>tw.png" alt="Twitter" />
							</a>
							 

						</li>
					</ul>
					<p class="p-standard" id="no-margin"><?php echo word_limiter($noticia->contenido,20) ?></p>
					<div class="read-more"><a href="/noticias/show/<?php echo $noticia->ID?>">Leer más →</a></div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<div class="container">
		<nav class="pagination">
			<?php echo $links; ?>
			
		</nav>
	</div>