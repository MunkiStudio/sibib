<header>
	<div class="container">
		<h1><a href="/admin/links">Links</a> > Editar</h1>
		<a href="/auth/logout" class="head-button">
			<img src="<?php echo base_url() ?>resources/images/admin/logout.png" alt="" />
			<p>salir</p>
		</a>
		<a href="/admin" class="head-button">
			<img src="<?php echo base_url() ?>resources/images/admin/home.png" alt="" />
			<p>home</p>
		</a>
	</div>
</header>

<div class="container">
	<div class="buttons-container">
		<span>
			<a class="buttons btn-secondary" href="/admin"><img src="<?php echo base_url() ?>resources/images/admin/back.png"/>Volver</a>
			<a class="buttons btn-primary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/view_white.png"/>Ver</a>
		</span>
		<span class="btn-right">
			<a class="buttons btn-secondary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</a>
		</span>
	</div>
	<div class="inputs">
		<label>Link</label>
		<input type="" name="" value="" />
	</div>
	<div class="inputs">
		<label>Imagen</label>
		<input type="file" name="" value="" />
	</div>
	<div class="inputs">
		<label>Título</label>
		<input type="" name="" value="" />
	</div>
	<div class="inputs">
		<label>Descripción</label>
		<textarea class="medium"></textarea>
	</div>
	
	<div class="save">
		<a class="buttons btn-primary" href="#">Guardar</a>
		<a class="buttons btn-secondary" href="#">Cancelar</a>
	</div>
</div>