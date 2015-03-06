
	<header class="fixed white">
		<div class="container header">
			<a href="index.html"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
			<a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/sibib">SIBIB</a>
				<a class="main" href="/recursos">Recursos de Información</a>
				<label class="selected">Servicios</label>
				<a class="main" href="/informacion">Gestión</a>
			</nav>
		</div>
	</header>

<div class="main-content top100">
	<!-- <div class="nav-menu">
		<div class="container small">
			<nav>
				<label class="section-selected">Servicios</label>

			</nav>
		</div>
	</div> -->

	<div class="container">
		<h1 class="title-section">Servicios</h1>
		<hr class="title-line" />
	</div>

	<div class="container title servicios">
    <?php echo $servicios->texto ?>
  </div>
</div>
