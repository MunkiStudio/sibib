<header>
	<div class="container">
		<h1><a href="/admin/noticias">Noticias </a> <?php if($noticia){ echo "Editar"; }else{ echo "Crear";}?></h1>
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

<?php if($errors): ?>
<div class="container">
	<ul>
	<?php foreach($errors as $error): ?>
		<li><?php echo $error; ?></li>
	<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
<div class="container">
	<div class="buttons-container">
		<span>
			<a class="buttons btn-secondary" href="/admin/noticias"><img src="<?php echo base_url() ?>resources/images/admin/back.png"/>Volver</a>
			<?php if($noticia): ?>
			<a class="buttons btn-primary" href="/noticias/show/<?php echo $noticia->ID; ?>"><img src="<?php echo base_url() ?>resources/images/admin/view_white.png"/>Ver</a>
			<?php endif; ?>
		</span>
		<?php if($noticia): ?>
		<span class="btn-right">
			<form method="POST" action="/admin/noticias/delete">
			<input type="hidden" value="<?php echo $noticia->ID?>" name="id" >
			<button type="submit" class="buttons btn-secondary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</button>
			</form>
		</span>
		<?php endif; ?>
	</div>
	<form method="post" action="/admin/noticias/save" enctype="multipart/form-data" />
		<?php if($noticia): ?>
			<input type="hidden" name="id" value="<?php echo $noticia->ID;?>">
		<?php endif; ?>

		<div class="inputs">
			<label>Título Noticia</label>
			<?php if($noticia):?>
			<input type="text" name="titulo" id="titulo" value="<?php echo $noticia->titulo;?>" />
			<?php else: ?>
			<input type="text" name="titulo" id="titulo" value="" />
			<?php endif; ?>
		</div>
		<div class="inputs">
			<label>Imagen</label>
			<input type="file" name="imagen" />
		</div>
		<div class="inputs">
			<label>Texto</label>
			<textarea class="giant ckeditor" name="contenido">
				<?php if($noticia){ echo $noticia->contenido; }?>
			</textarea>
		</div>
		<div class="save">
			<input type="submit" class="buttons btn-primary" value="Guardar">
			<input type="reset" class="buttons btn-secondary" value="Cancelar">
		</div>
	</form>
</div>