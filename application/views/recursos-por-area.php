
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
			<a href="index.html"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
			<a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
			<nav>
				<a class="main" href="/">Inicio</a>
				<a class="main" href="/noticias">Noticias</a>
				<a class="main" href="/sibib">SIBIB</a>
				<label class="selected">Recursos de Información</label>
				<a class="main" href="capacitaciones">Servicios</a>
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
				<label class="section-selected">Recursos por Área</label>
			</nav>
		</div>
	</div>
	
	<div id="area-bg">
		<div class="container">
			<img src="<?php echo $images_folder ?>icons/icon-area.png" alt="" />
			<h1 class="title-section">Recursos por Área</h1>
			<hr class="title-line" />
			<label class="explanation">Elige facultad y carrera. Encuentra los recursos hechos para ti</label>
			<br />
			<div class="multiple-bar">
				<select id="facultades">
					<option value="" disabled selected>Facultad</option>
					
				</select>
				<select id="carreras">
					<option value="" disabled selected>Carrera</option>
				</select>
				<a class="btn-search" id="searchRecurso">
					<img id="btn-icon" src="<?php echo $images_folder ?>icons/icon-search-red.png" alt="" />
				</a>
			</div>
		</div>
	</div>
	
	<div class="container">
		
	</div>
</div>	

	