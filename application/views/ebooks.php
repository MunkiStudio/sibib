	<header class="fixed white">
		<div class="container header">
			<a href="/"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
			<a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/sibib">SIBIB</a>
				<label class="selected">Recursos de Información</label>
				<a class="main" href="/servicios">Servicios</a>
				<a class="main" href="/informacion">Gestión</a>
			</nav>
		</div>
	</header>

<div class="main-content top100">
	<div class="nav-menu">
		<div class="container small">
			<nav class="nav-left">
				<a href="/recursos" class="nav-link">Recursos de Información</a>
				<label>></label>
				<label class="section-selected">Ebooks</label>
			</nav>
		</div>
	</div>

	<div id="ebooks-bg">
		<div class="container">
			<img src="<?php echo $images_folder ?>icons/icon-ebooks.png" alt="" />
			<h1 class="title-section">Ebooks</h1>
			<hr class="title-line" />
			<div class="search-bar">
				<form action="<?php echo site_url('ebooks/search');?>" method="post">
				<input type="" name="search" placeholder="¿Buscas alguno en particular?" autofocus="true"/>
					<button type="submit" class="btn-search">
						<img id="btn-icon" style="position: relative;top: -7px;left: -8px;" src="<?php echo $images_folder ?>icons/icon-search.png" alt="search" />
					</button>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<?php if(sizeof($ebooks) <= 0):?>
			No se encontraron resultados
		<?php endif; ?>
		<?php foreach($ebooks as $ebook ): ?>
      <a href="<?php echo $ebook->url; ?>" target="_blank" class="btn-link">
        <div class="btn-content">
          <figure class="img-link" style="position: relative;left: -40px;">
            <?php if($ebook->imagen): ?>
              <img src="<?php echo $ebook->imagen;?>" alt="" />
            <?php else: ?>
              <img src="<?php echo $images_folder ?>cover-ebooks/cover-test.png" alt="" />
            <?php endif; ?>
          </figure>
          <div class="content-link">
            <label for="" class="title-ebook"><?php echo $ebook->titulo;?></label>
          <hr />
          <label for="" class="author-ebook">Autor: <?php echo $ebook->autor;?></label>
          <div class="p-standard">
            <?php
                if(str_word_count($ebook->descripcion) > 10){
                  echo word_limiter($ebook->descripcion,10).'...';
                }else{
                  echo $ebook->descripcion;
                }
              ?>
          </div>
          </div>
        </div>
      </a>

		<?php endforeach; ?>

	</div>
	<?php if(isset($links)): ?>
	<div class="container">
		<nav class="pagination">
			<?php echo $links; ?>

		</nav>
	</div>
	<?php endif; ?>
</div>
