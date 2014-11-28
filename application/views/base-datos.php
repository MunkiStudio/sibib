	<div class="submenu">
		<div class="container header">
			<nav>
				<a href="#">Formulario Online</a>
				<a href="#">Alumni</a>
			</nav>
		</div>
	</div>
	
	<header class="fixed white">
		<div class="container header">
			<a href="index.html"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
			<a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/noticias">Noticias</a>
				<a class="main" href="/sibib">SIBIB</a>
				<label class="selected">Recursos de Información</label>
				<a class="main" href="/servicios">Servicios</a>
				<a class="main" href="/informacion">Gestión</a>			</nav>
		</div>
	</header>
	
<div class="main-content top100">		
	<div class="nav-menu">
		<div class="container small">
			<nav class="nav-left">
				<a href="/recursos" class="nav-link">Recursos de Información</a>
				<label>></label>
				<label class="section-selected">Base de Datos</label>
			</nav>
		</div>
	</div>
	
	<div id="datos-bg">
		<div class="container">
			<img src="<?php echo $images_folder ?>icons/icon-datos.png" alt="" />
			<h1 class="title-section">Base de Datos</h1>
			<hr class="title-line" />
		</div>
	</div>
	
	<div class="container">
		<?php foreach($basedatos as $bd):?>
			<a href="<?php echo $bd->url;?>" class="btn-link">
				<div class="btn-content">
					<figure class="img-link" style="position: relative;left: -40px;">
						<?php if($bd->imagen):?>
							<img src="<?php echo $bd->imagen; ?>" alt="" />
						<?php else: ?>
							<img src="<?php echo $images_folder ?>otros-repos/img-link-test.png" alt="" />
						<?php endif; ?>
					</figure>
					<div class="content-link">
						<label for=""><?php echo $bd->titulo; ?></label>
						<p class="p-standard"><?php $bd->descripcion; ?></p>
						<?php if($bd->locked): ?>
						<div class="simptip-position-top simptip-fade" data-tooltip="Recurso protegido">
							<img src="<?php echo $images_folder ?>icons/icon-lock.png" alt="" />
						</div>
						<?php else: ?>
							<div class="simptip-position-top simptip-fade" data-tooltip="Recurso publico">
								<img src="<?php echo $images_folder ?>icons/icon-unlock.png" alt="" />
							</div>
						<?php endif; ?>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
		
	</div>
</div>