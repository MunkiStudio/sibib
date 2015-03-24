<header class="fixed white">
		<div class="container header">
			<a href="/"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
			<a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/sibib">SIBIB</a>
				<label class="selected">Recursos de Información</label>
				<a class="main" href="/capacitaciones">Servicios</a>
				<a class="main" href="/informacion">Gestión</a>			</nav>
		</div>
	</header>

<div class="main-content top100">
	<div class="nav-menu">
		<div class="container small">
			<nav class="nav-left">
				<a href="/recursos" class="nav-link">Recursos de Información</a>
				<label>></label>
				<label class="section-selected">Otros repositorios</label>
			</nav>
		</div>
	</div>

	<div id="repo-bg">
		<div class="container">
			<img src="<?php echo $images_folder ?>icons/icon-repo.png" alt="" />
			<h1 class="title-section">Otros Repositorios</h1>
			<hr class="title-line" />
		</div>
	</div>

	<div class="container">
    <?php foreach($otrosrepos as $otrorepo):?>
  		<a href="<?php echo $otrorepo->url;?>" class="btn-link">
  			<div class="btn-content">
          <figure class="img-link" style="position: relative;left: -40px;">
            <?php if($otrorepo->imagen):?>
              <img src="<?php echo $otrorepo->imagen; ?>" alt="" />
            <?php else: ?>
              <img src="<?php echo $images_folder ?>otros-repos/img-link-test.png" alt="" />
            <?php endif; ?>
          </figure>
          <div class="content-link">
            <label for=""><?php echo $otrorepo->titulo; ?></label>
            <br />
            <?php if($otrorepo->locked): ?>
            <div class="simptip-position-top simptip-fade" data-tooltip="Recurso protegido">
		<img src="<?php echo $images_folder ?>icons/icon-lock.png" alt="<?php echo $otrorepo->locked ?>" />
            </div>
            <?php else: ?>
              <div class="simptip-position-top simptip-fade" data-tooltip="Recurso publico">
                <img src="<?php echo $images_folder ?>icons/icon-unlock.png" alt="" />
              </div>
            <?php endif; ?>
            <span class="p-standard">
              <?php
                if(str_word_count($otrorepo->descripcion) > 10){
                  echo word_limiter($otrorepo->descripcion,10).'...';
                }else{
                  echo $otrorepo->descripcion;
                }
              ?>
            </span>
          </div>
        </div>
  		</a>
    <?php endforeach; ?>
	</div>

</div>

