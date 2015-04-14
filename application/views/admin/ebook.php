<header>
	<div class="container">
		<h1><a href="/admin/ebooks">Ebooks</a> > Editar</h1>
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
			<a class="buttons btn-secondary" href="/admin/ebooks"><img src="<?php echo base_url() ?>resources/images/admin/back.png"/>Volver</a>

		</span>
		<?php if($ebook): ?>
		<span class="btn-right">
			<form method="POST" action="/admin/ebook/delete">
			<input type="hidden" value="<?php echo $ebook->id?>" name="id" >
			<button type="submit" class="buttons btn-secondary"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</button>
			</form>
		</span>
		<?php endif; ?>
	</div>
	<form method="post" action="/admin/ebook/save" enctype="multipart/form-data" />
		<?php if($ebook): ?>
			<input type="hidden" name="id" value="<?php echo $ebook->id;?>">
		<?php endif; ?>
    <div class="inputs">
      <label for="">Categoría</label>
			<select name="categoria">
      <?php foreach($categorias as $categoria): ?>
        <option value="<?php echo $categoria->id;?>"><?php echo $categoria->titulo; ?></option>

      <?php endforeach; ?>
      </select>
    </div>
		<div class="inputs">
			<label>Link ebook</label>
			<input name="url" type="url" value="<?php echo ($ebook) ? $ebook->url : "" ?>"/>
		</div>
		<div class="inputs">
			<label>Imagen portada</label>
			<input type="file" name="imagen" />
		</div>
		<div class="inputs">
			<label>Título</label>
			<input name="titulo" value="<?php echo ($ebook) ? $ebook->titulo: ""?>"/>
		</div>
		<div class="inputs">
			<label>Autor</label>
			<input name="autor" value="<?php echo ($ebook) ? $ebook->autor: ""?>"/>
		</div>
		<div class="inputs">
			<label>Año</label>
			<input name="year" type="number" value="<?php echo ($ebook) ? $ebook->year: ""?>"/>
		</div>
		<div class="inputs">
			<label>Descripción</label>
			<textarea class="giant ckeditor" name="descripcion">
				<?php if($ebook){ echo $ebook->descripcion; }?>
			</textarea>
		</div>
		<div class="save">
			<input type="submit" class="buttons btn-primary" value="Guardar">
			<input type="reset" class="buttons btn-secondary" value="Cancelar">
		</div>
	</form>
</div>
