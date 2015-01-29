<header>
	<div class="container">
		<h1>otrosrepos</h1>
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
		<a href="/admin/otrosrepos/new" class="buttons btn-primary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/plus.png"/>Nuevo</a>
		<!-- TODO USE JAVASCRIPT TO DELETE -->
		<a class="buttons btn-secondary" href="#"><img src="<?php echo base_url() ?>resources/images/admin/delete_black.png"/>Eliminar</a>

	</div>
	<div class="list">
		<table>
			<tr>
				<th class="check"></th>
				<th class="title">Título</th>
				<th class="actions">Acciones</th>
			</tr>
			<?php foreach($otrosrepos as $otrorepo): ?>
			<tr class="table-content">
				<td><input type="checkbox" name="select_news" value="<?php echo $otrorepo->id;?>" /></td>
				<td><?php echo $otrorepo->titulo; ?></td>
				<td>
					<a href="/admin/otrosrepos/<?php echo $otrorepo->id;?>" class="simptip-position-top simptip-fade" data-tooltip="Editar"><img src="<?php echo base_url() ?>resources/images/admin/edit.png" alt="Editar" /></a>
					<form method="POST" action="/admin/otrosrepos/delete" class="list-inline">
					<input type="hidden" value="<?php echo $otrorepo->id?>" name="id" >
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
