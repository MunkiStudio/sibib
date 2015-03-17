
  <header class="fixed white">
    <div class="container header">
      <a href="/"><img class="main-logo-header" src="<?php echo $images_folder ?>logo-sibib-color.png" alt="" /></a>
      <a href="#" ><img class="mini sb-toggle-right" src="<?php echo $images_folder ?>mini-nav.png" alt="" /></a>
      <nav>
        <a class="main" href="/">Inicio</a>
        <a class="main" href="/sibib">SIBIB</a>
        <label class="selected">Recursos de Información</label>
        <a class="main" href="/servicios">Servicios</a>
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
        <label class="section-selected">categorias</label>
      </nav>
    </div>
  </div>

  <div id="ebooks-bg">
    <div class="container">
      <img src="<?php echo $images_folder ?>icons/icon-ebooks.png" alt="" />
      <h1 class="title-section">categorias ebooks</h1>
      <hr class="title-line" />
      <!-- <div class="search-bar">
        <form action="<?php echo site_url('categorias/search');?>" method="post">
        <input type="" name="search" placeholder="¿Buscas alguno en particular?" autofocus="true"/>
          <button type="submit" class="btn-search">
            <img id="btn-icon" style="position: relative;top: -7px;left: -8px;" src="<?php echo $images_folder ?>icons/icon-search.png" alt="search" />
          </button>
        </form>
      </div> -->
    </div>
  </div>

  <div class="container">
    <?php if(sizeof($categorias) <= 0):?>
      No se encontraron resultados
    <?php endif; ?>
    <?php foreach($categorias as $ebook ): ?>
    <a href="/ebooks/categoria/<?php echo $ebook->id; ?>">
    <div class="ebook">
      <figure>
        <?php if($ebook->imagen): ?>
          <img src="<?php echo $ebook->imagen;?>" alt="" />
        <?php else: ?>
          <img src="<?php echo $images_folder ?>cover-categorias/cover-test.png" alt="" />
        <?php endif; ?>
      </figure>
      <label for="" class="title-ebook"><?php echo $ebook->titulo;?></label>
      <hr />
      <div class="p-standard"><?php echo $ebook->descripcion;?></div>
    </div>
    </a>
    <?php endforeach; ?>

  </div>
  <?php if(isset($links)): ?>
  <div class="container">
    <nav class="pagination">
      <?php echo $links; ?>

    </nav>
  </div>
  <?php endif; ?>
</div>
