<?php require('main/views/header.php'); ?>

<div class="grid-container">
  <div class="grid-x">
    <div class="cell">
      <div class="img-hero">
        <img src="<?php echo constant('URLMAIN'); ?>public/img/hero1.png" alt="Logo IEP San Luis">
      </div>
    </div>
  </div>

  <div class="grid-x">
    <div class="cell small-9 medium-8 large-8">
      <h3>BIENVENIDOS PAGINA PRINCIPAL</h3>
    </div>
    <div class="cell small-9 medium-4 large-4">
      secretarios
      <a href="<?php echo "http://localhost/iepsanluis/admin/" ?>">admin</a>
      <a href="<?php echo "http://localhost/iepsanluis/estudiantes/" ?>">Estudiantes</a>
      <a href="<?php echo "http://localhost/iepsanluis/docentes/" ?>">Docentes</a>
    </div>
    <div class="cell small-9 medium-4-large-4">
      <a href="<?php echo "http://localhost/iepsanluis/main/nosotros/" ?>">Nosotros</a>
    </div>
  </div>
</div>

<?php require('main/views/footer.php'); ?>