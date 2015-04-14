<header>
	<div class="container">
		<h1>Ebooks</h1>
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
		<a href="/admin/ebook/new" class="buttons btn-primary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/plus.png"/>Nuevo</a>
		<!-- TODO USE JAVASCRIPT TO DELETE -->
		<!-- <a class="buttons btn-secondary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</a> -->

	</div>
	<div class="list">
		<table>
			<tr>
				<th class="check"></th>
				<th class="title">Título</th>
        <th class="actions">Categoría</th>
				<th class="actions">Acciones</th>
			</tr>
			<?php foreach($ebooks as $ebook): ?>
			<tr class="table-content">
				<td><input type="checkbox" name="select_news" value="<?php echo $ebook->id;?>" /></td>
				<td><?php echo $ebook->titulo; ?></td>
        <td><?php echo $ebook->categoria;?></td>
				<td>
					<a href="/admin/ebook/<?php echo $ebook->id;?>" class="simptip-position-top simptip-fade" data-tooltip="Editar"><img src="<?php echo base_url() ?>resources/images/admin/edit.png" alt="Editar" /></a>
					<form method="POST" action="/admin/ebook/delete" class="list-inline">
					<input type="hidden" value="<?php echo $ebook->id?>" name="id" >
					<button type="submit" class="simptip-position-top simptip-fade delete" data-tooltip="Eliminar"><img src="<?php echo base_url() ?>resources/images/admin/delete.png" alt="Borrar" /></button>
					</form>
				</td>
			</tr>
			<?php endforeach; ?>

		</table>

	</div>
</div>

<div class="container">
		<nav class="pagination">
			<?php echo $links; ?>

		</nav>
	</div>
