<header>
	<div class="container">
		<h2>Administración SIBIB</h2>
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
<div class="container login">
	<form method="post" action="/auth/login">
	<h1>Login</h1>
	<input type="text" name="login" placeholder="Email o Usuario" />
	<br />
	<input type="password" name="password" placeholder="Contraseña" />
	<br />
	<div class="button-login">
		<button type="submit" class="buttons btn-primary">Login</button>
	</div>
	</form>
</div>