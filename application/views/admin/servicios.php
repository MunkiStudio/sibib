<header>
  <div class="container">
    <h1>Texto Servicios</h1>
    <a href="/auth/logout" class="head-button">
      <img src="<?php echo base_url() ?>resources/images/admin/logout.png" alt="" />
      <p>salir</p>
    </a>
    <a href="/admin" class="head-button">
      <img src="<?php echo base_url() ?>resources/images/admin/home.png" alt="" />
      <p>home</p>
    </a>
  </div>

</header><!-- /header -->


<?php if($edit == true):?>
<div class="container">
  <form action="/admin/servicios/save" method="post" accept-charset="utf-8">
    <div class="inputs">
      <label for="">Texto</label>
      <textarea class="giant ckeditor" name="texto">
      <?php echo $servicios->texto;?>
      </textarea>
    </div>
    <div class="save">
      <input type="submit" class="buttons btn-primary" value="Guardar">
      <input type="reset" class="buttons btn-secondary" value="Cancelar">
    </div>
  </form>
</div>
<?php else: ?>
<div class="container">
  <div class="buttons-container">
    <a href="/admin/servicios/edit" class="buttons btn-primary"><img src="<?php echo base_url() ?>resources/images/admin/edit.png" alt="Editar" />Editar</a>
  </div>
</div>


<div class="container servicios">
  <?php echo $servicios->texto ?>
</div>

<?php endif; ?>
