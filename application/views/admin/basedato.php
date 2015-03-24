<header>
	<div class="container">
		<h1><a href="/admin/basedatos">basedatos</a> > Editar</h1>
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
			<a class="buttons btn-secondary" href="/admin/basedatos"><img src="<?php echo base_url() ?>resources/images/admin/back.png"/>Volver</a>

		</span>
		<?php if($basedato): ?>
		<span class="btn-right">
			<form method="POST" action="/admin/basedatos/delete">
			<input type="hidden" value="<?php echo $basedato->id?>" name="id" >
			<button type="submit" class="buttons btn-secondary"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</button>
			</form>
		</span>
		<?php endif; ?>
	</div>
	<form method="post" action="/admin/basedatos/save" enctype="multipart/form-data" />
		<?php if($basedato): ?>
			<input type="hidden" name="id" value="<?php echo $basedato->id;?>">
		<?php endif; ?>
		<div class="inputs">
			<label>Link basedato</label>
			<input name="url" type="url" value="<?php echo ($basedato) ? $basedato->url : "" ?>"/>
		</div>
		<div class="inputs">
			<label>Imagen</label>
			<input type="file" name="imagen" />
		</div>
		<div class="inputs">
			<label>Título</label>
			<input name="titulo" value="<?php echo ($basedato) ? $basedato->titulo: ""?>"/>
		</div>

		<div class="inputs">
			<label>Bloqueado</label>
			<?php if($basedato): ?>
				<input name="bloqueado" type="checkbox" <?php echo ($basedato->locked) ? "checked": ""?> value="1"/>
			<?php else: ?>
				<input name="bloqueado" type="checkbox" value="1"/>
			<?php endif; ?>
		</div>
		<div class="inputs">
			<label>Descripción</label>
			<textarea class="giant ckeditor" name="descripcion">
				<?php if($basedato){ echo $basedato->descripcion; }?>
			</textarea>
		</div>
		<div class="save">
			<input type="submit" class="buttons btn-primary" value="Guardar">
			<input type="reset" class="buttons btn-secondary" value="Cancelar">
		</div>
	</form>
</div>
